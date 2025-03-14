<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Event;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showMain()
    {
        $events = Event::all();
        return view('pages.admin.main', compact('events'));
    }

    public function showApplications(Request $request)
    {
        // Получаем параметры фильтрации из запроса
        $eventId = $request->query('event_id');
        $group = $request->query('group');

        // Формируем запрос с подгрузкой связанных моделей
        $query = Application::with(['user', 'event']);

        // Фильтрация по мероприятию
        if ($eventId) {
            $query->where('event_id', $eventId);
        }

        // Фильтрация по группе (группе мероприятия)
        if ($group) {
            $query->whereHas('event', function ($q) use ($group) {
                $q->where('group', $group);
            });
        }

        // Пагинация – по 30 записей на страницу
        $applications = $query->paginate(30);

        // Для формы фильтрации получаем список всех мероприятий и групп
        $events = Event::select('id', 'title')->get();
        $groups = Event::select('group')->distinct()->pluck('group');

        return view('pages.admin.applications', compact('applications', 'events', 'groups'));
    }

    public function showCreate()
    {
        return view('pages.admin.create');
    }

    public function storeEvent(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'task' => 'required|string|max:255',
            'group' => 'required|string|min:3|max:255',
            'code' => 'required|string|min:4|max:255|unique:events,code',
        ], [
            'title.required' => 'Поле "Название" обязательно для заполнения.',
            'title.string' => 'Поле "Название" должно быть строкой.',
            'title.max' => 'Поле "Название" не должно превышать 255 символов.',

            'task.required' => 'Поле "Задание" обязательно для заполнения.',
            'task.string' => 'Поле "Задание" должно быть строкой.',
            'task.max' => 'Поле "Задание" не должно превышать 255 символов.',

            'group.required' => 'Поле "Группа" обязательно для заполнения.',
            'group.string' => 'Поле "Группа" должно быть строкой.',
            'group.min' => 'Поле "Группа" должно содержать не менее 3 символов.',
            'group.max' => 'Поле "Группа" не должно превышать 255 символов.',

            'code.required' => 'Поле "Код" обязательно для заполнения.',
            'code.string' => 'Поле "Код" должно быть строкой.',
            'code.min' => 'Поле "Код" должно содержать не менее 4 символов.',
            'code.max' => 'Поле "Код" не должно превышать 255 символов.',
            'code.unique' => 'Поле "Код" должно быть уникальным.',
        ]);


        Event::create($data);

        return redirect()->route('admin.view.main')->with('success', 'Событие успешно создано');
    }
}
