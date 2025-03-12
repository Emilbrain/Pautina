<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function registration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fio' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ], [
            'fio.required' => 'Поле ФИО обязательно для заполнения',
            'email.required' => 'Поле почта обязательно для заполнения',
            'email.email' => 'Поле почта должно быть валидным email адресом',
            'email.unique' => 'Пользователь с таким email уже существует',
            'password.required' => 'Поле пароль обязательно для заполнения',
            'password.confirmed' => 'Поле пароль должно совпадать с подтверждением пароля',
            'password.min' => 'Поле пароль должно быть не менее 6 символов',
        ]);
        // Если валидация не прошла
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ошибка валидации',
                'errors' => $validator->errors() // Передаем массив ошибок
            ], 422);
        }

        $password = Hash::make($request->password);
        User::create([
            'fio' => $request->fio,
            'email' => $request->email,
            'password' => $password
        ]);

        return response()->json(['success' => true]);
    }

    public function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ], [
            'email.required' => 'Поле почта обязательно для заполнения',
            'email.email' => 'Поле почта должно быть валидным email адресом',
            'password.required' => 'Поле пароль обязательно для заполнения',
        ]);
        // Если валидация не прошла
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ошибка валидации',
                'errors' => $validator->errors() // Передаем массив ошибок
            ], 422);
        }
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            // Если успешный вход
            return response()->json([
                'success' => true,
            ]);
        } else {
            // Если вход не удался
            $validator->errors()->add('email', 'Неверный email или пароль');
            return response()->json([
                'success' => false,
                'message' => 'Неверный email или пароль',
                'errors' => $validator->errors()
            ], 401);
        }
    }

    public function logout( ){
        Auth::logout();
      request()->session()->invalidate();
      request()->session()->regenerateToken();
      return redirect()->route('view.event');
    }
}
