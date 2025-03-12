@extends('main')
@section('layout')
    <div class="content__container">
        @include('components.header')
        @yield('content')
    </div>
    @include('components.footer')
@endsection
