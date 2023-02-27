@extends('layouts.app')

@section('head_links')
    <link rel="stylesheet" href="{{ asset('css/registration.css') }}">
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Вы хотите зарегистрироваться как:
                    </div>
                    <div class="choose">
                        <a class="btn btn-primary registration" id="studentBtn" href="{{ route('register-student') }}">Студент</a>
                        <a class="btn btn-primary registration" id="companyBtn" href="{{ route('register-company') }}">Компания</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
