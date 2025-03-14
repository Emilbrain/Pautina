<div class="section">
    <header>
        <div class="header__container">
            <div class="header__logo">
                <a href="/">
                    <img src="{{asset('images/logo/logo_text.svg')}}" alt="">
                </a>
            </div>
            <nav class="header__nav">
                <a href="" class="link">О нас</a>
                <a href="" class="link">Мероприятия</a>
                <a href="" class="link">Направления</a>
                <a href="" class="link">Услуги
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M0 9.50983L2.38623 11.8961L9.0759 5.22734V10.6H11.8959V0H1.2959V2.83H6.66936L0 9.50983Z"
                              fill="#202020"/>
                    </svg>
                </a>
                <a href="" class="link">Контакты</a>
            </nav>
            <div class="header__menu">
                @auth()
                    <div class="header__profile">
                        @if(auth()->user()->role === 'admin')
                            <a href="{{route('admin.view.main')}}" class="header__icon--profile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"
                                     fill="none">
                                    <path
                                        d="M13 0C14.7239 0 16.3772 0.684819 17.5962 1.90381C18.8152 3.12279 19.5 4.77609 19.5 6.5C19.5 8.22391 18.8152 9.87721 17.5962 11.0962C16.3772 12.3152 14.7239 13 13 13C11.2761 13 9.62279 12.3152 8.40381 11.0962C7.18482 9.87721 6.5 8.22391 6.5 6.5C6.5 4.77609 7.18482 3.12279 8.40381 1.90381C9.62279 0.684819 11.2761 0 13 0ZM13 16.25C20.1825 16.25 26 19.1588 26 22.75V26H0V22.75C0 19.1588 5.8175 16.25 13 16.25Z"
                                        fill="#8D79F3"/>
                                </svg>
                            </a>
                        @else
                            <a href="{{route('view.profile')}}" class="header__icon--profile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26"
                                     fill="none">
                                    <path
                                        d="M13 0C14.7239 0 16.3772 0.684819 17.5962 1.90381C18.8152 3.12279 19.5 4.77609 19.5 6.5C19.5 8.22391 18.8152 9.87721 17.5962 11.0962C16.3772 12.3152 14.7239 13 13 13C11.2761 13 9.62279 12.3152 8.40381 11.0962C7.18482 9.87721 6.5 8.22391 6.5 6.5C6.5 4.77609 7.18482 3.12279 8.40381 1.90381C9.62279 0.684819 11.2761 0 13 0ZM13 16.25C20.1825 16.25 26 19.1588 26 22.75V26H0V22.75C0 19.1588 5.8175 16.25 13 16.25Z"
                                        fill="#8D79F3"/>
                                </svg>
                            </a>

                        @endif
                    </div>
                    <div class="header__link--logout">
                        <a href="{{route('logout')}}" class="link">Выйти</a>
                    </div>
                @endauth
                @guest()
                    <div class="button  header__button--auth">
                        <button id="openModalAuth">Авторизация</button>
                    </div>
                @endguest
            </div>
        </div>
    </header>
</div>
