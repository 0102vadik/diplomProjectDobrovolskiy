{{--@php use Illuminate\Support\Facades\Auth; @endphp--}}
@extends('layouts.app')

@section('head_links')
    <link rel="stylesheet" href="{{ asset('css/create-form-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets.css') }}">
@endsection

@section('content')
    <header>
        <div class="container">
            <h2 class="create-title">Отправка заявки</h2>
        </div>
    </header>
    <main>
        <div class="container">
            <!-- РАСКОММЕНТИРОВАТЬ МЕТОД ПОСТ И УБРАТЬ ACTION (Должно перенаправлять на страницу send-application-success.blade.php) -->
            <form method="post" action="{{route('newApplication')}}">
                @csrf
                <div class="block">
                    <div>
                        <label class="custom-label" for="header">Заголовок</label>
                        <input class="custom-input" type="text" name="header" id="header">
                    </div>
                </div>
                <div class="fifth-block block">
                    <div>
                        <label class="custom-label" for="description">Сообщение</label>
                        <textarea class="custom-textarea" name="message" id="description" cols="30"
                                  rows="10"></textarea>
                    </div>
                </div>
                <button class="btn button" type="submit">Отправить заявку</button>
            </form>
        </div>
    </main>
@endsection
