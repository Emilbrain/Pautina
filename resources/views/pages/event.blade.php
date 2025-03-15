@extends('layout.page')
@section('content')

    <div class="banner">
        <div class="banner__ribbon mt100px">
            <div class="banner__ribbon-scroll ">

            <span>
                |
            </span>

                <span>
                 Паутина
            </span>

                <span>
                |
            </span>

                <span>
                 14 дней
            </span>

                <span>
                |
            </span>

                <span>
                3 направлений
            </span>

                <span>
                |
            </span>

                <span>
                3 этапа
            </span>

                <span>
                |
            </span>

                <span>
                Турнир
            </span>

                <span>
                |
            </span>

                <span>
                 Паутина
            </span>

                <span>
                |
            </span>

                <span>
                 14 дней
            </span>

                <span>
                |
            </span>

                <span>
                3 направлений
            </span>

                <span>
                |
            </span>

                <span>
                3 этапа
            </span>

                <span>
                |
            </span>

                <span>
                 Турнир
                </span>

                <span>
                |
            </span>

                <span>
                 Паутина
            </span>

                <span>
                |
            </span>

                <span>
                 14 дней
            </span>

                <span>
                |
            </span>

                <span>
                3 направлений
            </span>

                <span>
                |
            </span>

                <span>
                 Паутина
            </span>

                <span>
                |
            </span>

                <span>
                 14 дней
            </span>

                <span>
                |
            </span>

                <span>
                3 направлений
            </span>

                <span>
                |
            </span>

                <span>
                3 этапа
            </span>

                <span>
                |
            </span>

                <span>
                Турнир
            </span>

                <span>
                |
            </span>

                <span>
                 Паутина
            </span>

                <span>
                |
            </span>

                <span>
                 14 дней
            </span>

                <span>
                |
            </span>

                <span>
                3 направлений
            </span>

                <span>
                |
            </span>

                <span>
                3 этапа
            </span>

                <span>
                |
            </span>

                <span>
                 Турнир
                </span>

                <span>
                |
            </span>

                <span>
                 Паутина
            </span>

                <span>
                |
            </span>

                <span>
                 14 дней
            </span>

                <span>
                |
            </span>

                <span>
                3 направлений
            </span>

                <span>
                |
            </span>

            </div>
        </div>
        <div class="section">
            <div class="banner__row">
                <div class="banner__row__column banner__text">
                    <h1>
                        Турнир
                    </h1>
                    <p class="banner__subtitle">
                        Прокачайте свои умения за 14
                        <br>
                        увлекательных дней!
                    </p>
                    <div class="button banner__btn">
                        @auth()
                            <a href="#applications">
                                Участвовать
                            </a>
                        @endauth
                        @guest()
                            <a id="openModalAuth">
                                Участвовать
                            </a>
                        @endguest
                    </div>
                </div>
                <div class="banner__row__column">
                    <div class="banner__imageContainer">
                        <div class="banner__image">
                            <img src="" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    <div class="promo section mt100px">--}}
    {{--        <div class="promo__title">--}}
    {{--            <h2>--}}
    {{--                Прокачаемся в одном из--}}
    {{--                <br>--}}
    {{--                7 направлений за 14 дней!--}}
    {{--            </h2>--}}
    {{--        </div>--}}
    {{--        <div class="promo__row">--}}
    {{--            <div class="promo__row__column promo__inf">--}}
    {{--                <div class="promo__date">--}}
    {{--                    Даты:--}}
    {{--                    <span>--}}
    {{--                        3-17 апреля 2025--}}
    {{--                    </span>--}}
    {{--                </div>--}}
    {{--                <p class="promo__text">--}}
    {{--                    Вы создадите проект в портфолио под руководством опытного наставника, получите много обратной связи,--}}
    {{--                    улучшите свои навыки по выбранному направлению.--}}
    {{--                </p>--}}
    {{--                <p class="promo__text">--}}
    {{--                    А также примете участие в конкурсе и получите сертификат участника и подарки за призовые места.--}}
    {{--                </p>--}}
    {{--                <p class="promo__text">--}}
    {{--                    Принять участие могут как начинающие, так и успешные специалисты.--}}
    {{--                </p>--}}
    {{--            </div>--}}
    {{--            <div class="promo__row__column promo__blocks">--}}
    {{--                <div class="promo__infoBlock">--}}
    {{--                    Персональная проверка вашей работы от эксперта--}}
    {{--                </div>--}}
    {{--                <div class="promo__infoBlock">--}}
    {{--                    Полезные материалы для обучения по направлению--}}
    {{--                </div>--}}
    {{--                <div class="promo__infoBlock">--}}
    {{--                    Сертификаты и подарки на финальном конкурсе--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    {{--    <div class="directions section mt100px">--}}
    {{--        <div class="directions__title">--}}
    {{--            <h2>--}}
    {{--                Направления--}}
    {{--            </h2>--}}
    {{--        </div>--}}

    {{--        <div class="directions__row">--}}
    {{--            <div class="directions__columnBlock">--}}
    {{--                <div class="directions__columnBlock__img">--}}
    {{--                    <img src="{{asset('images/directions/directions_1.png')}}" alt="">--}}
    {{--                </div>--}}
    {{--                <div class="directions__columnBlock__title">--}}
    {{--                    Веб-дизайн--}}
    {{--                </div>--}}
    {{--                <div class="directions__columnBlock__subtitle">--}}
    {{--                    Создание визуально привлекательных и удобных веб-страниц--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="directions__columnBlock">--}}
    {{--                <div class="directions__columnBlock__img">--}}
    {{--                    <img src="{{asset('images/directions/directions_2.png')}}" alt="">--}}
    {{--                </div>--}}
    {{--                <div class="directions__columnBlock__title">--}}
    {{--                    Веб-разработка front-end--}}
    {{--                </div>--}}
    {{--                <div class="directions__columnBlock__subtitle">--}}
    {{--                    Создание внешнего интерфейса веб-сайтов и приложений--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="directions__columnBlock">--}}
    {{--                <div class="directions__columnBlock__img">--}}
    {{--                    <img src="{{asset('images/directions/directions_3.png')}}" alt="">--}}
    {{--                </div>--}}
    {{--                <div class="directions__columnBlock__title">--}}
    {{--                    Веб-разработка front-end--}}
    {{--                </div>--}}
    {{--                <div class="directions__columnBlock__subtitle">--}}
    {{--                    Создание серверной части веб-сайтов и приложений--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}


    <div class="section mt100px">
        @auth
            @if($applications)
                <div class="stages__title" id="application_tournament">
                    <h2>
                        Отправка работ
                    </h2>
                </div>
                <form action="{{ route('application.update', $applications) }}" id="applications"
                      class="event__form mt30px" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- Ссылка для скачивания задания -->
                    <!-- для ссылки сделай выделение какое нибудь -->
                    <div class="form-group mb-3 button">
                        <a href="{{ $applications->event->task }}" class=" btn-info" target="_blank">Скачать задание</a>
                    </div>

                    @if($fileExists)
                        <p>Файл уже загружен дальнейшая загрузка файла удалит предыдущий ответ</p>
                    @endif

                    <!-- Поле для загрузки файла работы -->
                    <div class="form-group">
                        <label for="answer">Загрузите файл работы</label>
                        <input type="file" name="answer" id="answer" class="form-control">
                        @error('answer')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Кнопка отправки формы -->
                    <div class="form-group mt-3">
                        <button type="submit" class="button btn-primary">Отправить</button>
                    </div>
                </form>
            @else
                <div class="stages__title" id="send_work">
                    <h2>
                        Заявки на турнир
                    </h2>
                </div>
                <form action="{{ route('application.store') }}" class="event__form mt30px" id="applications"
                      method="post">
                    @csrf
                    <input type="text" name="group" placeholder="Введите группу" value="{{ old('group') }}">
                    @error('code')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="text" name="code" placeholder="Введите код доступа">
                    <button type="submit" class="button btn-primary">Отправить</button>
                </form>
            @endif
        @endauth
    </div>

@endsection
