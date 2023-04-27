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

            @if(Auth::user()->type_user == "Студент")
                <h2 class="create-title">Cписок заявок</h2>
            @endif
            @if(Auth::user()->type_user == "Компания")
                <h2 class="create-title">Cписок вакансий</h2>
            @endif
        </div>
    </header>
    @if(Auth::user()->type_user == "Компания")
        <div class="container">
            <div class="application-content">
                @foreach($informationAnnouncements as $announcements)

                    <section class="application-container">
                        <div class="application-list">
                            <article class="application-card">
                                <div class="company-icon">
                                    <img src="{{ asset($object->logo_src)}}" alt="company-icon">
                                </div>
                                <div class="company-info">
                                    <div class="company-name-place">
                                        <div class="company-name">
                                            {{$object->company_name}}
                                        </div>
                                        @if($object->city)
                                            <div class="company-place">
                                                <img src="{{ asset('img/interface-icons/fi-rr-marker.png') }}"
                                                     alt="place-icon"
                                                     width="15px">
                                                {{$object->city}}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="application-name">
                                        {{$announcements->header}}
                                    </div>
                                    <div class="application-description">
                                        {{$announcements->description}}
                                    </div>
                                    <div class="application-buttons">
                                        <div class="application-btn">
                                            <button
                                                class="button btn"
                                                onclick="window.location.href='/my-applications/students/{{$announcements->id_course}}'">
                                                Заявки студентов
                                            </button>
                                        </div>
                                        <div class="application-btn">
                                            <button
                                                class="button btn danger"
                                                onclick="window.location.href='/my-applications/delete/{{$announcements->id_course}}'">
                                                Удалить вакансию
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </section>
                @endforeach
            </div>
        </div>
    @endif
    @if(Auth::user()->type_user == "Студент")
        <div class="container">
            <div class="application-content">
                @foreach($applicationInfo as $application)

                    <section class="application-container">
                        <div class="application-list">
                            <article class="application-card">
                                <div class="company-icon">
                                    <img src="{{ asset($application->logo_src)}}" alt="company-icon">
                                </div>
                                <div class="company-info">
                                    <div class="company-name-place">
                                        <div class="company-name">
                                            {{$application->company_name}}
                                        </div>
                                        @if($application->city)
                                            <div class="company-place">
                                                <img src="{{ asset('img/interface-icons/fi-rr-marker.png') }}"
                                                     alt="place-icon"
                                                     width="15px">
                                                {{$application->city}}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="application-name">
                                        {{$application->header}}
                                    </div>
                                    <div class="application-description">
                                        {{$application->message}}
                                    </div>
                                    <div class="application-status">
                                        {{--{{$announcements->description}}--}}
                                        @if($application->status == 'Заявка принята')
                                            <input class="custom-input success" type="tel" name="companyPhone"
                                                   id="companyPhone"
                                                   value="Заявка принята" disabled>
                                        @endif
                                        @if($application->status == 'Ожидание ответа')
                                            <input class="custom-input pending" type="tel" name="companyPhone"
                                                   id="companyPhone"
                                                   value="Ожидание ответа" disabled>
                                        @endif
                                        @if($application->status == 'Заявка отклонена')
                                            <input class="custom-input danger" type="tel" name="companyPhone"
                                                   id="companyPhone"
                                                   value="Заявка отклонена" disabled>
                                        @endif

                                    </div>
                                    <div class="application-btn">
                                        <button
                                            class="button btn danger"
                                            onclick="window.location.href='/my-applications/delete/student/{{$application->id_application}}'">
                                            Удалить заявку
                                        </button>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </section>
                @endforeach
            </div>
        </div>
    @endif
@endsection
