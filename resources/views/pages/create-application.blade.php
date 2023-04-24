@php use Illuminate\Support\Facades\Auth; @endphp
@extends('layouts.app')

@section('head_links')
    <link rel="stylesheet" href="{{ asset('css/create-form-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets.css') }}">
@endsection

@section('content')
    <header>
        <div class="container">
            <h2 class="create-title">Создание вакансии</h2>
        </div>
    </header>
    <main>
        <div class="container">
            <form method="post" action="{{route('createApplicationsPost')}}">
                @csrf
                <div class="block">
                    <div>
                        <label class="custom-label" for="header">Заголовок</label>
                        <input class="custom-input" type="text" name="header" id="header">
                    </div>
                </div>
                <div class="fifth-block block">
                    <div>
                        <label class="custom-label" for="description">Описание</label>
                        <textarea class="custom-textarea" name="description" id="description" cols="30"
                                  rows="10"></textarea>
                    </div>
                </div>
                <div class="third-block block">
                    <div class="custom-select-container">
                        <label class="custom-label" for="type">Тип</label>
                        <div class="custom-select">
                            <select name="type" id="type">
                                <option selected value="0" hidden></option>
                                <option value="Стажировка">Стажировка</option>
                                <option value="Практика">Практика</option>
                                <option value="Работа">Работа</option>
                            </select>
                            <div class="select_arrow">
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="custom-label" for="expirationDate">До какого действительна</label>
                        <input class="custom-input" type="date" name="expirationDate" id="expirationDate"
                               min="{{ date("Y-m-d") }}">
                    </div>
                </div>
                <button class="btn button" type="submit">Создать вакансию</button>
            </form>
        </div>
    </main>
@endsection
