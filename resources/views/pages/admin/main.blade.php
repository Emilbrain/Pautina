@extends('layout.profile')

@section('content')
    <div class="container">
        <div>
            <a href="{{ route('admin.view.main') }}">Главная</a>
            <a href="{{ route('admin.view.create') }}">Создание</a>
            <a href="{{ route('admin.view.applications') }}">Заявки</a>

        </div>
        <h2>Список мероприятий</h2>

        @if ($events->isEmpty())
            <p>Нет доступных мероприятий.</p>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Группа</th>
                    <th>Код</th>
                    <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->group }}</td>
                        <td>
                            <span id="code-{{ $event->id }}">{{ $event->code }}</span>
                        </td>
                        <td>
                            <button class="btn btn-outline-primary" onclick="copyToClipboard('{{ $event->id }}')">
                                Скопировать
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <script>
        function copyToClipboard(eventId) {
            let codeElement = document.getElementById('code-' + eventId);
            let textToCopy = `Название: ${codeElement.closest("tr").children[0].innerText}
Группа: ${codeElement.closest("tr").children[1].innerText}
Код: ${codeElement.innerText}`;

            navigator.clipboard.writeText(textToCopy).then(() => {
                alert('Данные скопированы:\n\n' + textToCopy);
            }).catch(err => {
                console.error('Ошибка копирования: ', err);
            });
        }
    </script>
@endsection
