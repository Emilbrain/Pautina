@extends('layout.profile')

@section('content')
    <div class="container">
        <div class="mb-3">
            <a href="{{ route('admin.view.main') }}">Главная</a>
            <a href="{{ route('admin.view.create') }}">Создание</a>
            <a href="{{ route('admin.view.applications') }}">Заявки</a>
        </div>

        <h2>Список заявок</h2>

        <!-- Форма фильтрации -->
        <form action="{{ route('admin.view.applications') }}" method="GET" class="mb-4">
            <div class="row">
                <!-- Фильтр по мероприятию -->
                <div class="col-md-4">
                    <label for="event_id" class="form-label">Мероприятие</label>
                    <select name="event_id" id="event_id" class="form-control">
                        <option value="">Все мероприятия</option>
                        @foreach($events as $event)
                            <option value="{{ $event->id }}" {{ request('event_id') == $event->id ? 'selected' : '' }}>
                                {{ $event->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <!-- Фильтр по группе -->
                <div class="col-md-4">
                    <label for="group" class="form-label">Группа</label>
                    <select name="group" id="group" class="form-control">
                        <option value="">Все группы</option>
                        @foreach($groups as $grp)
                            <option value="{{ $grp }}" {{ request('group') == $grp ? 'selected' : '' }}>
                                {{ $grp }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <!-- Кнопка применения фильтров -->
                <div class="col-md-4 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">Применить фильтры</button>
                    <a href="{{ route('admin.view.applications') }}" class="btn btn-primary">Сбросить фильтры</a>
                </div>
            </div>
        </form>

        @if ($applications->isEmpty())
            <p>Нет доступных заявок.</p>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Мероприятие</th>
                    <th>ФИО</th>
                    <th>Статус</th>
                    <th>Файл</th>
                    <th>Создано</th>
                    <th>Изменено</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($applications as $application)
                    <tr id="row-{{ $application->id }}">
                        <td>{{ $application->id }}</td>
                        <td>{{ $application->event->title }}</td>
                        <td>{{ $application->user->fio }}</td>
                        <td>{{ $application->status }}</td>
                        <td>
                            @if ($application->answer)
                                <a href="{{ asset('storage/' . $application->answer) }}" download target="_blank">Скачать</a>
                            @else
                                Не загружено
                            @endif
                        </td>
                        <td>{{ $application->created_at->format('d.m.Y H:i') }}</td>
                        <td>{{ $application->updated_at->format('d.m.Y H:i') }}</td>
                        <td>
                            <button class="btn btn-outline-primary" onclick="copyToClipboard({{ $application->id }})">
                                Скопировать
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!-- Пагинация -->
            <div>
                {{ $applications->withQueryString()->links() }}
            </div>
        @endif
    </div>

    <script>
        function copyToClipboard(applicationId) {
            let row = document.getElementById('row-' + applicationId);
            let cells = row.getElementsByTagName('td');
            let textToCopy = `ID: ${cells[0].innerText}\n` +
                `Мероприятие: ${cells[1].innerText}\n` +
                `ФИО: ${cells[2].innerText}\n` +
                `Статус: ${cells[3].innerText}\n` +
                `Файл: ${cells[4].innerText}\n` +
                `Создано: ${cells[5].innerText}\n` +
                `Изменено: ${cells[6].innerText}`;
            navigator.clipboard.writeText(textToCopy)
                .then(() => {
                    alert('Данные скопированы:\n\n' + textToCopy);
                })
                .catch(err => {
                    console.error('Ошибка копирования: ', err);
                });
        }
    </script>
@endsection
