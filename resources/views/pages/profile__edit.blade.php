@extends('layout.page')
@section('content')
    <div class="section">
        <form action="" method="post">
            @csrf
            <div class="section body__container">
                <div class="profile__row">
                    <div class="profile__column">
                        <div class="content__border">
                            <header class="profile-edit__top">
                                <label for="avatar">
                                    <div class="edit__avatar">
                                        <div class="avatar__img">
                                            <img src="{{asset('images/icon/avatar.png')}}" alt="">
                                        </div>
                                        <div class="avatar__text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="18"
                                                 viewBox="0 0 15 18" fill="none">
                                                <path
                                                    d="M4.23529 13.7647V7.41177H0L7.41176 0L14.8235 7.41177H10.5882V13.7647H4.23529ZM0 18V15.8824H14.8235V18H0Z"
                                                    fill="#8D79F3"/>
                                            </svg>
                                            Изменить фотографию
                                        </div>
                                    </div>
                                </label>
                                <input type="file" name="avatar" id="avatar">

                            </header>
                            <footer class="profile-edit__bottom mt30px">
                                <div class="button profile__saveBtn">
                                    <a href="">
                                        Сохранить
                                    </a>
                                </div>
                            </footer>
                        </div>

                        <div class="profile__edit-links mt30px">
                            <a href="" class="profile__edit-link active">
                                Основная информация
                            </a>
                            <a href="" class="profile__edit-link">
                                Контактная информация
                            </a>
                            <a href="" class="profile__edit-link">
                                Профессиональные навыки
                            </a>
                            <a href="" class="profile__edit-link">
                                Приватность/Смена пароля
                            </a>
                        </div>
                    </div>
                    <div class="profile__column profilePage__container">

                        <div class="content__border">
                            <div class="profileEdit__top">
                                <h3>
                                    Основная информация
                                </h3>
                            </div>
                            <div class="profileEdit__main">
                                <div class="profileEdit__section mt30px">
                                    <label for="name">Имя</label>
                                    <input type="text" name="name" id="name" value="Федотов Евгений Валерьевич">
                                    <p class="profileEdit__section__subtext">
                                        Для изменения имени обратитесь к администратору
                                    </p>
                                </div>

                                <div class="profileEdit__section mt30px">
                                    <label for="birthday">Дата рождения</label>
                                    <input type="date" name="birthday" id="birthday" value="2025-07-25">
                                </div>

                                <div class="profileEdit__section mt30px">
                                    <label for="status">Статус</label>
                                    <div class="custom-selector">
                                        <select id="status" name="status">
                                            <option value="Study">Учусь</option>
                                            <option value="Work">Работаю</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="profileEdit__section mt30px">
                                    <label for="Specialization">Специальность/должность</label>
                                    <input type="text" name="Specialization" id="Specialization" value="веб-разработка">
                                </div>

                                <div class="profileEdit__section mt30px">
                                    <label for="Organization">Организация</label>
                                    <input type="text" name="Organization" id="Organization" value="МЦК-КТИТС">
                                </div>


                                <div class="button profileEdit__saveBtn mt30px">
                                    <a href="">
                                        Сохранить
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="content__border mt30px ">
                            <div class="profileEdit__top">
                                <h3>
                                    Контактная информация
                                </h3>
                            </div>
                            <div class="profileEdit__main">
                                <div class="profileEdit__section mt30px">
                                    <label for="email">Почта</label>
                                    <input type="email" name="email" id="email" value="evgen765@gmail.com">
                                    <p class="profileEdit__section__subtext">
                                        Для изменения почты обратитесь к администратору
                                    </p>
                                </div>

                                <div class="profileEdit__section mt30px">
                                    <label for="telegram">Телеграм</label>
                                    <input type="text" name="telegram" id="telegram" value="2025-07-25">
                                </div>

                                <div class="profileEdit__section mt30px">
                                    <label for="City">Город</label>
                                    <input type="text" name="City" id="City" value="Казань  ">
                                </div>


                                <div class="button profileEdit__saveBtn mt30px">
                                    <a href="">
                                        Сохранить
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="content__border mt30px ">
                            <div class="profileEdit__top">
                                <h3>
                                    Профессиональные навыки
                                </h3>
                            </div>

                            <div class="profileEdit__main">
                                <div class="profileEdit__section mt30px">
                                    <label for="Direction">Направление</label>
                                    <div class="custom-selector">
                                        <select id="Direction" name="Direction">
                                            <option value="web_design">Веб-дизайн</option>
                                            <option value="front-end">Front-end разработчик</option>
                                            <option value="back-end">Back-end разработчик</option>
                                            <option value="full-stack">Full-stack разработчик</option>
                                        </select>
                                    </div>
                                    <p class="profileEdit__section__subtext">
                                        Для изменения направления обратитесь к администратору
                                    </p>
                                </div>

                                <div class="profileEdit__section mt30px">
                                    <label for="hard_skills">Hard skills</label>
                                    <textarea name="hard_skills" id="hard_skills" rows="10">Понимание какой-то технологии, умение пользоваться определенной программой, опыт вождения или знание английского — это все хард-скиллы. Они специфичны для конкретной профессии и обычно остаются неизменными на одной и той же должности в разных компаниях.
                                    </textarea>
                                </div>

                                <div class="profileEdit__section mt30px">
                                    <label for="soft_skills">Soft skills</label>
                                    <textarea name="soft_skills" id="soft_skills" rows="5">Например, умение договариваться, стрессоустойчивость, внимательность, самоорганизация или тайм-менеджмент — софт-скиллы.
                                    </textarea>
                                </div>


                                <div class="profileEdit__section mt30px">
                                    <label for="portfolio">Ссылка на портфолио</label>
                                    <input type="text" name="portfolio" id="portfolio"
                                           value="https://www.behance.net/alenakolesni6">
                                </div>

                                <div class="profileEdit__section mt30px">
                                    <label for="experience">Опыт работы</label>
                                    <textarea name="experience" id="experience" rows="5">Фриланс 3 года
                                    </textarea>
                                </div>

                                <div class="button profileEdit__saveBtn mt30px">
                                    <a href="">
                                        Сохранить
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="content__border mt30px ">
                            <div class="profileEdit__top">
                                <h3>
                                    Приватность
                                </h3>
                            </div>

                            <div class="profileEdit__main">
                                <div class="profileEdit__section mt30px">
                                    <div class="private__container">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                        </label>
                                        Закрытый профиль
                                    </div>
                                    <p class="profileEdit__section__subtext">
                                        В закрытом профиле публично отображается только фотография и имя
                                    </p>
                                </div>

                                <h3 class="mt30px">
                                    Смена пароля
                                </h3>

                                <div class="profileEdit__section mt30px">
                                    <label for="old_password">Старый пароль</label>
                                    <input type="password" name="old_password" id="old_password">
                                </div>

                                <div class="profileEdit__section mt30px">
                                    <label for="password">Новый пароль</label>
                                    <input type="password" name="password" id="password">
                                </div>

                                <div class="profileEdit__section mt30px">
                                    <label for="password_confirmation">Повторите новый пароль</label>
                                    <input type="password" name="password_confirmation" id="password">
                                </div>

                                <div class="button profileEdit__saveBtn mt30px">
                                    <a href="">
                                        Сохранить
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
