@php use Illuminate\Support\Facades\Auth; @endphp
@extends('layouts.app')

@section('head_links')
    <link rel="stylesheet" href="{{ asset('css/create-form-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/my-profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets.css') }}">
@endsection

@section('content')
    <header>
        <div class="container">
            <h2 class="create-title">Личный кабинет</h2>
        </div>
    </header>
    <main>
        <div class="container">
            @if(Auth::user()->type_user == "Компания")
                <form method="post" enctype="multipart/form-data">
                    <div class="first-block block">
                        <div>
                            <img class="profile-icon" src="{{ asset('img/company-icons/sample_user_icon.png') }}"
                                 alt="company-icon">
                        </div>
                        <div class="custom-image-upload-wrapper">
                            {{--<label class="custom-label" for="salary">Загрузка изображения</label>
                            <div>
                                <input type="file" name="photo" multiple accept="image/jpeg,image/png">
                                <span>Доступные типы файлов: jpeg, png</span>
                            </div>--}}
                            <label class="custom-label">Загрузка изображения</label>
                            <label class="custom-image-upload">
                                <span class="custom-image-upload-text" type="text"></span>
                                <input type="file" name="photo" accept="image/jpeg,image/png">
                                <span class="{{--custom-image-upload-btn--}} btn button">Выберите файл</span>
                            </label>
                        </div>
                    </div>

                    <div class="second-block block">
                        <div>
                            <label class="custom-label" for="companyName">Название компании</label>
                            <input class="custom-input" type="text" name="companyName" id="companyName"
                                   value="{{Auth::user()->name}}" required>
                        </div>
                        <div>
                            <label class="custom-label" for="companyPlace">Местонахождение</label>
                            <input class="custom-input" type="text" name="companyPlace" id="companyPlace">
                        </div>
                        {{--<div>
                            <label class="custom-label" for="salary">Доход</label>
                            <div class="custom-select">
                                <select name="" id="salary">
                                    <option selected value="0" hidden></option>
                                    <option value="fullDay"></option>
                                    <option value="shiftWork">Сменный график</option>
                                    <option value="flexibleSchedule">Гибкий график</option>
                                    <option value="distantWork">Удалённая работа</option>
                                </select>
                                <div class="select_arrow">
                                </div>
                            </div>
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
                        </div>--}}
                    </div>
                    <div class="third-block block">
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
                        <div>
                            <label class="custom-label" for="phone">Контактный телефон</label>
                            <input class="custom-input" type="tel" name="phone" id="companyName" required>
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
                    <div class="block">
                        <div>
                            <label class="custom-label" for="description">Описание</label>
                            <textarea class="custom-textarea" name="description" id="description" cols="30"
                                      rows="10"></textarea>
                        </div>
                    </div>
                    <button class="btn button">Сохранить изменения</button>
                </form>
            @endif

            @if(Auth::user()->type_user == "Студент")
                <form method="post" enctype="multipart/form-data">
                    <div class="first-block block">
                        <div>
                            <img class="profile-icon" src="{{ asset('img/company-icons/sample_user_icon.png') }}"
                                 alt="company-icon">
                        </div>
                        <div>
                            <label class="custom-label" for="salary">Загрузка изображения</label>
                            <div>
                                <input type="file" name="photo" multiple accept="image/jpeg,image/png">
                                <span>Доступные типы файлов: jpeg, png</span>
                            </div>
                        </div>
                    </div>

                    <div class="second-block block">
                        <div>

                            <label class="custom-label" for="companyName">ФИО</label>
                            <input class="custom-input" type="text" name="companyName" id="companyName"
                                   value="{{Auth::user()->name}}">
                        </div>
                        <div>
                            <label class="custom-label" for="companyPlace">Город проживания</label>
                            <input class="custom-input" type="text" name="companyPlace" id="companyPlace">
                        </div>
                    </div>
                    <div class="block">
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
                    <div class="fourth-block block">
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
                            <label class="custom-label" for="salary">Предпочитаемый доход</label>
                            <div class="custom-select">
                                <select name="" id="salary">
                                    <option selected value="notDefined">Доход не указан</option>
                                    <option value="from500">От 500 руб.</option>
                                    <option value="from1000">От 1000 руб.</option>
                                    <option value="from1500">От 1500 руб.</option>
                                    <option value="from2000">От 2000 руб.</option>
                                    <option value="from2500">От 2500 руб.</option>
                                </select>
                                <div class="select_arrow">
                                </div>
                            </div>
                        </div>
                        <div class="custom-select-container">
                            <label class="custom-label" for="schedule">Предпочитаемый график работы</label>
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
                    <div class="sixth-block block">
                        <div>
                            <label class="custom-label" for="companyPlace">Курс</label>
                            <input class="custom-input" type="number" name="companyPlace" id="companyPlace">
                        </div>
                        <div>
                            <label class="custom-label" for="companyPlace">Группа</label>
                            <input class="custom-input" type="text" name="companyPlace" id="companyPlace">
                        </div>
                    </div>
                    <div class="block">
                        <div>
                            <label class="custom-label" for="description">Описание</label>
                            <textarea class="custom-textarea" name="description" id="description" cols="30"
                                      rows="10"></textarea>
                        </div>
                    </div>
                    <button class="btn button">Сохранить изменения</button>
                </form>
            @endif
        </div>
    </main>

@endsection
