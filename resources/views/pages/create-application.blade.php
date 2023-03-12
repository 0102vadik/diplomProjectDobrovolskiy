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
            <form method="post">
                <div class="first-block block">
                    <div>
                        <label class="custom-label" for="companyName">Название компании</label>
                        <input class="custom-input" type="text" name="companyName" id="companyName"
                               value="{{Auth::user()->name}}" disabled>
                    </div>
                    <div>
                        <label class="custom-label" for="companyPlace">Местонахождение</label>
                        <input class="custom-input" type="text" name="companyPlace" id="companyPlace">
                    </div>
                </div>
                <div class="second-block block">
                    <div class="custom-select-container">
                        <label class="custom-label" for="specialization">Специализация</label>
                        <div class="custom-select">
                            <select name="" id="specialization">
                                <option selected value="0" hidden></option>
                                <option value="frontend">Front-end разработчик</option>
                                <option value="backend">Back-end разработчик</option>
                                <option value="fullstack">Fullstack разработчик</option>
                                <option value="game">Разработчик игр</option>
                                <option value="mobile">Разработчик моб. приложений</option>
                                <option value="tester">Тестировщик</option>
                                <option value="projectManager">Менеджер проекта</option>
                            </select>
                            <div class="select_arrow">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="third-block block">
                    <div>
                        <label class="custom-label" for="salary">Доход</label>
                        <input class="custom-input" type="text" name="salary" id="salary">
                    </div>
                    <div class="custom-select-container">
                        <label class="custom-label" for="schedule">График работы</label>
                        <div class="custom-select">
                            <select name="" id="schedule">
                                <option selected value="0" hidden></option>
                                <option value="fullDay">Полный день</option>
                                <option value="shiftWork">Сменный график</option>
                                <option value="flexibleSchedule">Гибкий график</option>
                                <option value="distantWork">Удалённая работа</option>
                            </select>
                            <div class="select_arrow">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="forth-block block">
                    <div>
                        <label class="custom-label" for="salary">Языки программирования</label>
                        <div class="langs">
                            <div class="lang">
                                <input class="custom-checkbox" type="checkbox" id="c#" value="c#">
                                <label for="c#">C#</label>
                            </div>
                            <div class="lang">
                                <input class="custom-checkbox" type="checkbox" id="c++" value="c++">
                                <label for="c++">C++</label>
                            </div>
                            <div class="lang">
                                <input class="custom-checkbox" type="checkbox" id="javascript" value="javascript">
                                <label for="javascript">JavaScript</label>
                            </div>
                            <div class="lang">
                                <input class="custom-checkbox" type="checkbox" id="php" value="php">
                                <label for="php">PHP</label>
                            </div>
                            <div class="lang">
                                <input class="custom-checkbox" type="checkbox" id="java" value="java">
                                <label for="java">Java</label>
                            </div>
                            <div class="lang">
                                <input class="custom-checkbox" type="checkbox" id="1c" value="1c">
                                <label for="1c">1C</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fifth-block block">
                    <div>
                        <label class="custom-label" for="description">Описание</label>
                        <textarea class="custom-textarea" name="description" id="description" cols="30"
                                  rows="10"></textarea>
                    </div>
                </div>
                <button class="btn button">Создать вакансию</button>
            </form>
        </div>
    </main>
@endsection
