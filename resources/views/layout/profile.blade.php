@extends('main')
@section('layout')
    <div class="content__container">
        @include('components.header')
        <div class="section body__container">
            <div class="profile__row">
                <div class="profile__column">
                    <div class="content__border">
                        <header class="profile__top">
                            <div class="profile__avatar">
                                <img src="{{asset('images/icon/avatar.png')}}" alt="">
                            </div>
                            <div class="profile__socials">
                                @auth()
                                    <a href="mailto:{{auth()->user()->email}}">
                                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M42.625 20.25L28.125 29.3125L13.625 20.25V16.625L28.125 25.6875L42.625 16.625M42.625 13H13.625C11.6131 13 10 14.6131 10 16.625V38.375C10 39.3364 10.3819 40.2584 11.0617 40.9383C11.7416 41.6181 12.6636 42 13.625 42H42.625C43.5864 42 44.5084 41.6181 45.1883 40.9383C45.8681 40.2584 46.25 39.3364 46.25 38.375V16.625C46.25 14.6131 44.6188 13 42.625 13Z"
                                            fill="#8D79F3"/>
                                        <circle cx="28" cy="28" r="27.5" stroke="#A7A7A7"/>
                                    </svg>
                                </a>
                                @endauth
                                @auth()
                                    @if(auth()->user()->telegram)
                                    <a href="t.me/{{auth()->user()->telegram}}">
                                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1335_591)">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M46.015 28.0075C46.015 37.9528 37.9528 46.015 28.0075 46.015C18.0622 46.015 10 37.9528 10 28.0075C10 18.0622 18.0622 10 28.0075 10C37.9528 10 46.015 18.0622 46.015 28.0075ZM28.6372 23.2844C26.883 24.0191 23.3894 25.5335 18.1416 27.8125C17.302 28.1574 16.8521 28.4872 16.8072 28.8171C16.7408 29.3749 17.4389 29.5915 18.3807 29.8838C18.5022 29.9215 18.6278 29.9605 18.7564 30.0016C19.686 30.3015 20.9155 30.6463 21.5602 30.6613C22.1449 30.6763 22.7897 30.4364 23.5094 29.9416C28.4123 26.628 30.9313 24.9487 31.0962 24.9187C31.2162 24.8887 31.3661 24.8588 31.4711 24.9487C31.576 25.0387 31.576 25.2186 31.561 25.2636C31.4895 25.5616 28.5645 28.2771 27.2334 29.5128C26.8905 29.8312 26.6534 30.0513 26.5981 30.1066C26.4575 30.2513 26.3143 30.3884 26.1766 30.5202C25.3159 31.344 24.6701 31.9622 26.2082 32.9704C26.9075 33.432 27.4715 33.8168 28.0269 34.1958C28.6982 34.6537 29.3569 35.1031 30.2266 35.6693C30.4315 35.8038 30.6276 35.9434 30.819 36.0795C31.5659 36.6108 32.2399 37.0903 33.0754 37.0187C33.5552 36.9737 34.05 36.5239 34.3049 35.1745C34.9046 31.9958 36.0741 25.0837 36.344 22.2349C36.374 21.995 36.344 21.6801 36.314 21.5301C36.284 21.3802 36.2391 21.1853 36.0591 21.0354C35.8342 20.8554 35.5044 20.8254 35.3544 20.8254C34.6797 20.8404 33.6302 21.2003 28.6372 23.2844Z"
                                                      fill="#8D79F3"/>
                                            </g>
                                            <circle cx="28" cy="28" r="27.5" stroke="#A7A7A7"/>
                                            <defs>
                                                <clipPath id="clip0_1335_591">
                                                    <rect width="36" height="36" fill="white"
                                                          transform="translate(10 10)"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                       @endif
                                @endauth
                            </div>
                        </header>
                        <main class="profile__body">
                            <div class="profile__name">
                                @auth
                                    {{ auth()->user()->fio }}
                                @endauth
                            </div>
                            <div class="profile__age">
                                @auth
                                    @if(auth()->user()->birthday)
                                        {{ auth()->user()->birthday }}
                                    @else
                                        Пусто
                                    @endif
                                @endauth
                            </div>
                            <div class="profile__education">
                                @auth
                                    @if(auth()->user()->status)
                                        {{ auth()->user()->	status }}
                                    @else
                                        Пусто
                                    @endif
                                    @if(auth()->user()->direction)
                                        {{ auth()->user()->	direction }}
                                    @else
                                        Пусто
                                    @endif
                                    @if(auth()->user()->company)
                                        {{ auth()->user()->	company }}
                                    @else
                                        Пусто
                                    @endif
                                @endauth
                            </div>
                            <div class="profile__location">
                                Город @if(auth()->user()->city)
                                    {{ auth()->user()->	city }}
                                @else
                                    Пусто
                                @endif
                            </div>
                        </main>
                        <footer class="profile__bottom">
                            {{--                            <div class="profile__share">--}}
                            {{--                                <a href="">--}}
                            {{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="30" viewBox="0 0 34 30"--}}
                            {{--                                         fill="none">--}}
                            {{--                                        <path--}}
                            {{--                                            d="M34 14L20.7778 0V8C7.55556 10 1.88889 20 0 30C4.72222 23 11.3333 19.8 20.7778 19.8V28L34 14Z"--}}
                            {{--                                            fill="#8D79F3"/>--}}
                            {{--                                    </svg>--}}
                            {{--                                </a>--}}
                            {{--                                <a href="">--}}
                            {{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"--}}
                            {{--                                         fill="none">--}}
                            {{--                                        <path--}}
                            {{--                                            d="M6 6H15V15H6V6ZM30 6V15H21V6H30ZM21 22.5H24V19.5H21V16.5H24V19.5H27V16.5H30V19.5H27V22.5H30V27H27V30H24V27H19.5V30H16.5V24H21V22.5ZM24 22.5V27H27V22.5H24ZM6 30V21H15V30H6ZM9 9V12H12V9H9ZM24 9V12H27V9H24ZM9 24V27H12V24H9ZM6 16.5H9V19.5H6V16.5ZM13.5 16.5H19.5V22.5H16.5V19.5H13.5V16.5ZM16.5 9H19.5V15H16.5V9ZM3 3V9H0V3C0 2.20435 0.316071 1.44129 0.87868 0.87868C1.44129 0.316071 2.20435 0 3 0L9 0V3H3ZM33 0C33.7957 0 34.5587 0.316071 35.1213 0.87868C35.6839 1.44129 36 2.20435 36 3V9H33V3H27V0H33ZM3 27V33H9V36H3C2.20435 36 1.44129 35.6839 0.87868 35.1213C0.316071 34.5587 0 33.7957 0 33V27H3ZM33 33V27H36V33C36 33.7957 35.6839 34.5587 35.1213 35.1213C34.5587 35.6839 33.7957 36 33 36H27V33H33Z"--}}
                            {{--                                            fill="#8D79F3"/>--}}
                            {{--                                    </svg>--}}
                            {{--                                </a>--}}
                            {{--                                <a href="">--}}
                            {{--                                    Поделиться профилем--}}
                            {{--                                </a>--}}
                            {{--                            </div>--}}
                            <div class="button profile__editBtn">
                                <a href="{{route('view.profile.edit')}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                         fill="none">
                                        <path
                                            d="M17.71 4.0425C18.1 3.6525 18.1 3.0025 17.71 2.6325L15.37 0.2925C15 -0.0975 14.35 -0.0975 13.96 0.2925L12.12 2.1225L15.87 5.8725M0 14.2525V18.0025H3.75L14.81 6.9325L11.06 3.1825L0 14.2525Z"
                                            fill="white"/>
                                    </svg>
                                    Редактировать профиль</a>
                            </div>
                        </footer>
                    </div>
                </div>
                <div class="profile__column profileInformation__container">
                    <div class="content__border">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection

