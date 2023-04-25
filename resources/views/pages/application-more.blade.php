@php use Illuminate\Support\Facades\Auth; @endphp
@extends('layouts.app')

@section('head_links')
    <link rel="stylesheet" href="{{ asset('css/create-form-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/send-application.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets.css') }}">
@endsection

@section('content')
    <header>
        <div class="container">
            @if(Auth::user()->type_user == "Студент")
                <h2 class="create-title">Подробнее о вакансии</h2>
                <h2 class="create-title">"{{$information->header}}"</h2>
            @endif
                @if(Auth::user()->type_user == "Компания")
                    <h2 class="create-title">Подробнее о студенте</h2>
                @endif
        </div>
    </header>
    <main>
        <div class="container">
            @if(Auth::user()->type_user == "Студент")
                <div>  {{--method="post" enctype="multipart/form-data"--}}
                    {{--action="{{Auth::user()->type_user == "Компания" ? route('updateProfileCompany') : route('updateProfileStudents')}}"--}}
                    {{--@csrf--}}
                    <div class="first-block block">
                        <div>
                            <img class="profile-icon" src="{{ asset($information->logo_src) }}"
                            alt="company-icon">
                        </div>
                        {{--<div class="custom-image-upload-wrapper">
                            <label class="custom-label">Загрузка изображения</label>
                            <label class="custom-image-upload">
                                <span class="custom-image-upload-text" type="text"></span>
                                <input type="file" name="imgLogo" accept="image/jpeg,image/png">
                                <span class="--}}{{--custom-image-upload-btn--}}{{-- btn button">Выберите файл</span>
                            </label>
                        </div>--}}
                    </div>

                    <div class="second-block block">
                        <div>
                            <label class="custom-label" for="companyName">Название компании</label>
                            <input class="custom-input" type="text" name="companyName" id="companyName"
                                   value="{{$information->company_name}}" disabled>
                        </div>
                        <div>
                            <label class="custom-label" for="companyPlace">Местонахождение</label>
                            <input class="custom-input" type="text" name="companyPlace" id="companyPlace"
                                   value="{{$information->city}}" disabled>
                        </div>
                    </div>
                    <div class="third-block block">
                        {{--<div class="custom-select-container">
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
                        </div>--}}
                        <div>
                            <label class="custom-label" for="phone">Контактный телефон</label>
                            <input class="custom-input" type="tel" name="companyPhone" id="companyPhone"
                                   value="{{$information->phone_contact}}" disabled>
                        </div>
                    </div>
                    <div class="block">
                        <div>
                            <label class="custom-label" for="description">Описание</label>
                            <textarea class="custom-textarea" name="description" id="description" cols="30"
                                      rows="10" disabled>{{$information->description}} </textarea>
                        </div>
                    </div>
                    <button class="btn button" onclick="window.location.href='/home/student/send-application/{{$information->id_company}}'">Отправить заявку</button>
                </div>
            @endif

            @if(Auth::user()->type_user == "Компания")

                <form method="post" enctype="multipart/form-data"
                    {{--action="{{route('updateProfileStudents')}}"--}}>
                    @csrf
                    <div class="first-block block">
                        <div>
                            <img class="profile-icon"
                                 src="{{ asset($moreInformation['photo_src']) }}"
                                 alt="company-icon">
                        </div>
                        {{--<div>
                            <label class="custom-label" for="salary">Загрузка изображения</label>
                            <label class="custom-image-upload">
                                <span class="custom-image-upload-text" type="text"></span>
                                <input type="file" id="imgAvatar" name="imgAvatar" multiple accept="image/jpeg,image/png">
                                <span class="btn button">Выберите файл</span>
                            </label>
                        </div>--}}
                    </div>

                    <div class="name-block block">
                        <div>
                            <label class="custom-label"
                                   for="studentSurname">Фамилия</label>
                            <input class="custom-input" type="text" name="studentSurname" id="studentSurname"
                                   value="{{$moreInformation['surname']}}" disabled>
                        </div>
                        <div>
                            <label class="custom-label"
                                   for="studentName">Имя</label>
                            <input class="custom-input" type="text" name="studentName" id="studentName"
                                   value="{{$moreInformation['name']}}" disabled>
                        </div>
                        <div>
                            <label class="custom-label"
                                   for="studentPatronymic">Отчество</label>
                            <input class="custom-input" type="text" name="studentPatronymic" id="studentPatronymic"
                                   value="{{$moreInformation['patronymic']}}" disabled>
                        </div>
                    </div>

                    <div class="second-block block">
                        <div>
                            <label class="custom-label" for="studentPlace">Город проживания</label>
                            <input class="custom-input" type="text" name="studentPlace" id="studentPlace"
                                   value="{{$moreInformation['city']}}" disabled>
                        </div>
                        <div class="custom-select-container">
                            <label class="custom-label" for="specialization">Специализация</label>
                            <div class="custom-select">
                                <select name="specialization" id="specialization">
                                    <option selected value="{{$moreInformation['specialization'] ?? ""}}"
                                            name="specialization"
                                            hidden>{{$moreInformation['specialization'] ?? ""}}</option>
                                </select>
                                <div class="select_arrow">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block">

                    </div>
                    <div class="fourth-block block">
                        <div>
                            <label class="custom-label" for="salary">Языки программирования</label>
                            <div class="langs">
                                <div class="lang">
                                    <input class="custom-checkbox" name="programmingLanguages[]" type="checkbox"
                                           value="1">
                                    <label for="c#">C#</label>
                                </div>
                                <div class="lang">
                                    <input class="custom-checkbox" name="programmingLanguages[]" type="checkbox"
                                           value="2">
                                    <label for="c++">C++</label>
                                </div>
                                <div class="lang">
                                    <input class="custom-checkbox" name="programmingLanguages[]" type="checkbox"
                                           value="3">
                                    <label for="javascript">JavaScript</label>
                                </div>
                                <div class="lang">
                                    <input class="custom-checkbox" name="programmingLanguages[]" type="checkbox"
                                           value="4">
                                    <label for="php">PHP</label>
                                </div>
                                <div class="lang">
                                    <input class="custom-checkbox" name="programmingLanguages[]" type="checkbox"
                                           value="5">
                                    <label for="java">Java</label>
                                </div>
                                <div class="lang">
                                    <input class="custom-checkbox" name="programmingLanguages[]" type="checkbox"
                                           value="6">
                                    <label for="1c">1C</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fifth-block block">
                        <div>
                            <label class="custom-label" for="salary">Предпочитаемый доход</label>
                            <div class="custom-select">
                                <select name="preferredIncome" id="salary">
                                    <option selected
                                            value="{{$moreInformation['preferred_income'] ??"Доход не указан"}}">{{$information['preferred_income'] ??"Доход не указан"}}</option>
                                </select>
                                <div class="select_arrow">
                                </div>
                            </div>
                        </div>
                        <div class="custom-select-container">
                            <label class="custom-label" for="schedule">Предпочитаемый график работы</label>
                            <div class="custom-select">
                                <select name="preferredSchedule" id="schedule">
                                    <option selected value="{{$moreInformation['preferred_schedule'] ??""}}"
                                            hidden>{{$moreInformation['preferred_schedule'] ??""}}</option>
                                </select>
                                <div class="select_arrow">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sixth-block block">
                        <div>
                            <label class="custom-label" for="studentPlace">Курс</label>
                            <input class="custom-input" type="number" name="studentCourse" id="studentCourse"
                                   value="{{$moreInformation['course']}}" disabled>
                        </div>
                        <div>
                            <label class="custom-label" for="studentPlace">Группа</label>
                            <input class="custom-input" type="text" name="studentGroup" id="studentGroup"
                                   value="{{$moreInformation['group']}}" disabled>
                        </div>
                    </div>
                    <div class="block">
                        <div>
                            <label class="custom-label" for="description">Описание</label>
                            <textarea class="custom-textarea" name="description" id="description" cols="30"
                                      rows="10" disabled>{{$moreInformation['description']}}</textarea>
                        </div>
                    </div>
                    {{--<button class="btn button" type="submit">Отправить заявку</button>--}}
                </form>
            @endif
        </div>
    </main>
@endsection
