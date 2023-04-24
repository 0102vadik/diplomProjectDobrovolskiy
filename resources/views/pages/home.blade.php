@php use Illuminate\Support\Facades\Auth; @endphp
@extends('layouts.app')

@section('head_links')
    <link rel="stylesheet" href="{{ asset('css/home-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets.css') }}">
@endsection

@section('content')
    <!-- Header -->
    <div class="container">
        @if(Auth::user()->type_user == "Студент")
            @include('pages.home-sections.home-student-header-section')
        @endif
        @if(Auth::user()->type_user == "Компания")
            @include('pages.home-sections.home-company-header-section')
        @endif
    </div>

    <!-- Main (Applications) -->
    <main id="applications">
        <div class="container">
            @if(Auth::user()->type_user == "Студент")
                @include('pages.home-sections.home-student-application-section')
            @endif
            @if(Auth::user()->type_user == "Компания")
                @include('pages.home-sections.home-company-application-section')
            @endif
        </div>
    </main>

    <script src="{{ asset('js/filter-more-less.js') }}"></script>
@endsection
