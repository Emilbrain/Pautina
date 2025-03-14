<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Паутина</title>
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <link rel="shortcut icon" href="{{asset('favicon.svg')}}" type="image/x-icon">
</head>
<body>
@yield('layout')


<div class="modal modal__auth" id="modalRegist">
    <div class="modal__auth__content">
        <div class="modal__auth__close" id="closeModalRegist">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                <path
                    d="M36 3.62571L32.3743 0L18 14.3743L3.62571 0L0 3.62571L14.3743 18L0 32.3743L3.62571 36L18 21.6257L32.3743 36L36 32.3743L21.6257 18L36 3.62571Z"
                    fill="#202020"/>
            </svg>
        </div>
        <h2>Регистрация</h2>
        <form method="POST" class="modal__form" id="registerForm"  action="/register">
            @csrf
            <div class="modal__form__section">
                <label for="fio">ФИО</label>
                <input type="text" name="fio" placeholder="ФИО" id="registerForm_fio">
                <div class="error-message" id="error-registerForm_fio"></div>
            </div>
            <div class="modal__form__section">
                <label for="email">Почта</label>
                <input type="email" name="email" placeholder="Почта" id="registerForm_email">
                <div class="error-message" id="error-registerForm_email"></div>
            </div>
            <div class="modal__form__section">
                <label for="password">Пароль</label>
                <input type="password" name="password" placeholder="Пароль" id="registerForm_password">
                <div class="error-message" id="error-registerForm_password"></div>
            </div>
            <div class="modal__form__section">
                <label for="password_confirmation">Повторите пароль</label>
                <input type="password" name="password_confirmation" placeholder="Повторите пароль" id="password_confirmation">

            </div>
            <p class="modal__form__subtext">
                Уже зарегистрированы? <span id="gotoLogin">Авторизуйтесь</span>
            </p>
            <button type="submit" class="button__model">Зарегистрироваться</button>
        </form>
    </div>
</div>

<div class="modal modal__auth" id="modalAuth">
    <div class="modal__auth__content">
        <div class="modal__auth__close" id="closeModalAuth">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                <path
                    d="M36 3.62571L32.3743 0L18 14.3743L3.62571 0L0 3.62571L14.3743 18L0 32.3743L3.62571 36L18 21.6257L32.3743 36L36 32.3743L21.6257 18L36 3.62571Z"
                    fill="#202020"/>
            </svg>
        </div>
        <h2>Авторизация</h2>
        <form method="POST" class="modal__form" id="loginForm" action="/login">
            @csrf
            <div class="modal__form__section">
                <label for="email">Почта</label>
                <input type="email" name="email" placeholder="Почта" id="loginForm_email">
                <div class="error-message" id="error-loginForm_email"></div>

            </div>
            <div class="modal__form__section">
                <label for="password">Пароль</label>
                <input type="password" name="password" placeholder="Пароль" id="loginForm_password">
                <div class="error-message" id="error-loginForm_password"></div>

            </div>
            <p class="modal__form__subtext">
                Еще не зарегистрированы? <span id="gotoRegist">Зарегистрируйтесь</span>
            </p>
            <button type="submit" class="button__model">Войти</button>
        </form>
    </div>
</div>

<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
