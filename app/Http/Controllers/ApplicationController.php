<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    public function applicationCreate(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validate([
            'group' => 'required|string|min:3|max:255',
            'code' => 'required|string|min:4|max:255'
        ],
            [
                'group.required' => 'Поле "Группа" обязательно для заполнения',
                'group.min' => 'Группа должна содержать не менее 3 символов',
                'group.max' => 'Группа должна содержать не более 255 символов',
                'code.required' => 'Поле "Код" обязательно для заполнения',
                'code.min' => 'Код должен содержать не менее 4 символов',
                'code.max' => 'Код должен содержать не более 255 символов'
            ]
        );

        $event = Event::where('code', $data['code'])->first();
//        dd($event);

        if (!$event || $event->group !== $data['group']) {
            return back()->withErrors(['code' => 'Ошибка данных: неверный код или группа']);
        }


        $activeEvent = Event::where('code', $data['code'])->where('group', $data['group'])->first();
        $activeApplication = Application::where('user_id', auth()->id())->where('event_id', $event->id)->first();
        if ($activeApplication) {
            $activeApplication->status = 'в работе';
            $activeApplication->save();
        } else {
            $data['user_id'] = auth()->id();
            $data['event_id'] = $event->id;
            Application::create($data);

        }
        return redirect()->back();
    }

    public function applicationUpdate(Request $request, Application $application): \Illuminate\Http\RedirectResponse
    {
        // Валидируем загружаемый файл (максимальный размер 2 МБ)
        $request->validate([
            'answer' => 'required|file|mimes:zip,rar,7z,tar,gzip|max:10240',
        ], [
            'answer.required' => 'Пожалуйста, выберите файл для загрузки.',
            'answer.file' => 'Выбранный файл некорректен.',
            'answer.max' => 'Размер файла не должен превышать 10 МБ.',
        ]);


        if ($application->answer) {
            Storage::delete($application->answer);
        }

        if ($request->hasFile('answer')) {
            $file = $request->file('answer');
            $application->answer = $file->store('answer', 'public');
            $application->status = 'завершено';
            $application->save();
        } else {
            return redirect()->back()->with('error', 'Файл не найден.');
        }

        return redirect()->back()->with('success', 'Файл успешно загружен.');
    }
}
