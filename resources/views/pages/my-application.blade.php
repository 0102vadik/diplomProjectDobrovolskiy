@php use Illuminate\Support\Facades\Auth; @endphp
@extends('layouts.app')

@section('head_links')
    <link rel="stylesheet" href="{{ asset('css/home-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets.css') }}">
    <link rel="stylesheet" href="{{ asset('css/create-form-style.css') }}">
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
                                    <div class="company-place">
                                        <img src="{{ asset('img/interface-icons/fi-rr-marker.png') }}" alt="place-icon"
                                             width="15px">
                                        {{$object->city}}
                                    </div>
                                </div>
                                <div class="application-name">
                                    {{$announcements->header}}
                                </div>
                                <div class="application-description">
                                    {{$announcements->description}}
                                </div>
                                <div class="application-btn">
                                    <button
                                        class="button btn danger" onclick="window.location.href='/my-applications/delete/{{$announcements->id_course}}'">
                                        Удалить вакансию
                                    </button>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>
            @endforeach
        </div>
    </div>
@endsection
