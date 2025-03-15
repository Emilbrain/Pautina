@extends('layout.profile')

@section('content')
    <div class="container">
        <h2>Создать направление</h2>

        <div class="mb-3 mt30px ">
            <div class="button admin__button">
                <a href="{{ route('admin.view.main') }}">Главная</a>
                <a href="{{ route('admin.view.create') }}">Создание</a>
                <a href="{{ route('admin.view.applications') }}">Заявки</a>
            </div>

        </div>
        <form action="{{ route('admin.event.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Название</label>
                <input type="text" name="title" id="title" class="form-control"
                       value="{{ old('title') }}">
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="task" class="form-label">Задание</label>
                <input type="text" name="task" id="task" class="form-control"
                       value="{{ old('task') }}">
                @error('task')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="group" class="form-label">Группа</label>
                <input type="text" name="group" id="group" class="form-control"
                       value="{{ old('group') }}">
                @error('group')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="code" class="form-label">Код</label>
                <div class="input-group">
                    <input type="text" name="code" id="code" class="form-control"
                           value="{{ old('code') }}">
                    <button type="button" class="btn btn-secondary" onclick="generateUniqueCode()">Сгенерировать
                    </button>
                </div>
                @error('code')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>


    <script>
        function generateUniqueCode() {
            let chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            let code = '';
            for (let i = 0; i < 8; i++) {
                code += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            document.getElementById('code').value = code;
        }
    </script>
@endsection
