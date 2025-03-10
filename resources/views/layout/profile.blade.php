@extends('main')
@section('layout')
    <div class="footer__container">
        @include('components.header')
        @yield('content')
    </div>
    @include('components.footer')
@endsection
