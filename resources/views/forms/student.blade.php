@extends('layouts.app')

@section('head_links')
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a class="btn btn-primary" href="{{ route('register') }}"><</a>
                        {{ __('Регистрация') }}
                    </div>
                    <div class="card">

                        <div class="card-body" id="studentForm">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <input name="type_user" id="type_user" value="Студент" hidden>
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Имя') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="surname" class="col-md-4 col-form-label text-md-end">{{ __('Фамилия') }}</label>

                                    <div class="col-md-6">
                                        <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror"
                                               name="surname" value="{{ old('surname') }}" required autocomplete="name" autofocus>

                                        @error('surname')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="patronymic" class="col-md-4 col-form-label text-md-end">{{ __('Отчество') }}</label>

                                    <div class="col-md-6">
                                        <input id="patronymic" type="text" class="form-control @error('patronymic') is-invalid @enderror"
                                               name="patronymic" value="{{ old('patronymic') }}" required autocomplete="name" autofocus>

                                        @error('patronymic')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                               value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Пароль') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm"
                                           class="col-md-4 col-form-label text-md-end">{{ __('Подтвердите пароль') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                                               autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="course" class="col-md-4 col-form-label text-md-end">{{ __('Курс') }}</label>

                                    <div class="col-md-6">
                                        <input id="course" type="password" class="form-control @error('course') is-invalid @enderror"
                                               name="course" required autocomplete="course">

                                        @error('course')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="group" class="col-md-4 col-form-label text-md-end">{{ __('Группа') }}</label>

                                    <div class="col-md-6">
                                        <input id="group" type="password" class="form-control @error('group') is-invalid @enderror" name="group"
                                               required autocomplete="group">

                                        @error('group')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Зарегистрироваться') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





