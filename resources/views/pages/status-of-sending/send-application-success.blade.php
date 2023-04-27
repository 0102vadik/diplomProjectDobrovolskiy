@extends('layouts.app')

@section('head_links')
    <link rel="stylesheet" href="{{ asset('css/assets.css') }}">
    <link rel="stylesheet" href="{{ asset('css/status-of-sending.css') }}">

@endsection

@section('content')
    <main>
        <div class="container">
            <div class="alert">
                <div class="alert-icon">
                    <img src="{{ asset('img/interface-icons/fi-rr-success.png') }}" alt="success-icon">
                </div>
                <div class="alert-header-text">
                    Поздравляем!
                </div>
                <div class="alert-body">
                    <div class="alert-body-text">
                        Ваша заявка была успешно отправлена
                    </div>
                </div>
                <div class="alert-redirect">
                    <button class="btn button" onclick="window.location.href='{{ route('my-applicationsStudent') }}'">Мои заявки</button>
                </div>
            </div>
        </div>
    </main>
@endsection
