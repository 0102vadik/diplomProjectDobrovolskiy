@php use Illuminate\Support\Facades\Auth; @endphp
@extends('layouts.app')

@section('head_links')
    <link rel="stylesheet" href="{{ asset('css/home-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create-form-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/my-application.css') }}">
@endsection

@section('content')
    <header>
        <div class="container">
            @if(Auth::user()->type_user == "Компания")
                <h2 class="create-title">Cписок вакансий</h2>
            @endif
        </div>
    </header>
    @if(Auth::user()->type_user == "Компания")
        <div class="container">
            <div class="application-content">
                {{--@foreach($informationAnnouncements as $announcements)--}}

                    <section class="application-container">
                        <div class="application-list">
                            <article class="application-card">
                                <div class="company-icon">
                                    <img src="{{--{{ asset($object->logo_src)}}--}}" alt="company-icon">
                                </div>
                                <div class="company-info">
                                    <div class="company-name-place">
                                        <div class="company-name">
                                            {{--{{$object->company_name}}--}}
                                            ФИО
                                        </div>
                                    </div>
                                    <div class="application-name">
                                        {{--{{$announcements->header}}--}}
                                        Заголовок
                                    </div>
                                    <div class="application-description">
                                        {{--{{$announcements->description}}--}}
                                        Сообщение
                                    </div>
                                    <div class="application-buttons">
                                        <div class="application-btn">
                                            <button
                                                class="button btn success"
                                                onclick="window.location.href='{{--{{ route('') }}--}}'">
                                                Принять
                                            </button>
                                        </div>
                                        <div class="application-btn">
                                            <button
                                                class="button btn danger"
                                                onclick="window.location.href=''">
                                                Отклонить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </section>
                {{--@endforeach--}}
            </div>
        </div>
    @endif
    @if(Auth::user()->type_user == "Студент")
        <div class="container">
            <div class="application-content">
                Как вы сюда попали?
            </div>
        </div>
    @endif
@endsection
