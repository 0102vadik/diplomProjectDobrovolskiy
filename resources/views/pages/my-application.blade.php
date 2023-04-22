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
        </div>
    </header>
    <div class="container">
        <div class="application-content">
            <section class="application-container">
                {{--@if(Auth::user()->type_user == "Компания")
                    <h2 class="application-title">{{count($arrayObject)}} студентов</h2>
                @endif--}}
                <div class="application-list">
                    <article class="application-card">
                        <div class="company-icon">
                            <img src="{{--{{ asset($object->getLogoSrc())}}--}}" alt="company-icon">
                        </div>
                        <div class="company-info">
                            <div class="company-name-place">
                                <div class="company-name">
                                    {{--{{$object->getNameCompany()}}--}}
                                </div>
                                <div class="company-place">
                                    <img src="{{ asset('img/interface-icons/fi-rr-marker.png') }}" alt="place-icon"
                                         width="15px">
                                    {{--{{$object->getCity()}}--}}
                                </div>
                            </div>
                            <div class="application-name">
                                Front-end разработчик
                            </div>
                            <div class="application-price">
                                от 2000 руб.
                            </div>
                            <div class="application-langs-schedules">
                                <div class="application-langs">
                                    {{--                                @foreach($object->getArrayLanguages() as $language)--}}
                                    {{--                                    <div class="application-lang">{{$language['level']}} {{$language['language']}}</div>--}}
                                    {{--                                @endforeach--}}
                                </div>
                                <div class="application-schedules">
                                    <div class="application-schedule">Полный день</div>
                                </div>
                            </div>
                            <div class="application-description">
                                {{-- {{$object->getDescription()}}--}}
                            </div>
                            <div class="application-btn">
                                <button
                                    class="button btn danger" {{--onclick="window.location.href='{{ route("more-company") }}'"--}}>
                                    Удалить заявку
                                </button>
                            </div>
                        </div>
                    </article>
                    {{--                        --}}
                    {{--                        <article class="application-card">--}}
                    {{--                            <div class="company-icon">--}}
                    {{--                                <img src="{{ asset('img/company-icons/yarik.png') }}" alt="company-icon">--}}
                    {{--                            </div>--}}
                    {{--                            <div class="company-info">--}}
                    {{--                                <div class="company-name-place">--}}
                    {{--                                    <div class="company-name">--}}
                    {{--                                        Kabashov company--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="company-place">--}}
                    {{--                                        <img src="{{ asset('img/interface-icons/fi-rr-marker.png') }}" alt="place-icon"--}}
                    {{--                                             width="15px">--}}
                    {{--                                        Могилёв--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="application-name">--}}
                    {{--                                    Front-end разработчик--}}
                    {{--                                </div>--}}
                    {{--                                <div class="application-price">--}}
                    {{--                                    от 2000 руб.--}}
                    {{--                                </div>--}}
                    {{--                                <div class="application-langs-schedules">--}}
                    {{--                                    <div class="application-langs">--}}
                    {{--                                        <div class="application-lang">HTML</div>--}}
                    {{--                                        <div class="application-lang">CSS</div>--}}
                    {{--                                        <div class="application-lang">JavaScript</div>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="application-schedules">--}}
                    {{--                                        <div class="application-schedule">Полный день</div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="application-description">--}}
                    {{--                                    В нашей компании не хватает front-end разработчиков, да и back-end страдает. А всё--}}
                    {{--                                    почему? Да потому что я бездарь и ничего не знаю. Да и вообще, не хочу ничего делать--}}
                    {{--                                    — создал компанию на стипендию. Обращайтесь!--}}
                    {{--                                </div>--}}
                    {{--                                <div class="application-btn">--}}
                    {{--                                    <button class="button btn">Подробнее</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </article>--}}
                    {{--                        <article class="application-card">--}}
                    {{--                            <div class="company-icon">--}}
                    {{--                                <img src="{{ asset('img/company-icons/peugeot.png') }}" alt="company-icon">--}}
                    {{--                            </div>--}}
                    {{--                            <div class="company-info">--}}
                    {{--                                <div class="company-name-place">--}}
                    {{--                                    <div class="company-name">--}}
                    {{--                                        Peugeot Automobile company--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="company-place">--}}
                    {{--                                        <img src="{{ asset('img/interface-icons/fi-rr-marker.png') }}" alt="place-icon"--}}
                    {{--                                             width="15px">--}}
                    {{--                                        Гродно--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="application-name">--}}
                    {{--                                    Back-end разработчик--}}
                    {{--                                </div>--}}
                    {{--                                <div class="application-price">--}}
                    {{--                                    от 2000 руб.--}}
                    {{--                                </div>--}}
                    {{--                                <div class="application-langs-schedules">--}}
                    {{--                                    <div class="application-langs">--}}
                    {{--                                        <div class="application-lang">PHP</div>--}}
                    {{--                                        <div class="application-lang">Laravel</div>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="application-schedules">--}}
                    {{--                                        <div class="application-schedule">Гибкий график</div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="application-description">--}}
                    {{--                                    Автомобильная компания Peugeot ищет back-end разработчиков для создания--}}
                    {{--                                    информационно-аналитической системы по устранению ржавчины в багажнике и на нижней--}}
                    {{--                                    части автомобилей. Весёлая компания сварщиков подскажет какие факторы должны--}}
                    {{--                                    учитываться и какие методы анализа требуются. Оставляй свою заявку!--}}
                    {{--                                </div>--}}
                    {{--                                <div class="application-btn">--}}
                    {{--                                    <button class="button btn">Подробнее</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </article>--}}
                    {{--                        <article class="application-card">--}}
                    {{--                            <div class="company-icon">--}}
                    {{--                                <img src="{{ asset('img/company-icons/test.jpg') }}" alt="company-icon">--}}
                    {{--                            </div>--}}
                    {{--                            <div class="company-info">--}}
                    {{--                                <div class="company-name-place">--}}
                    {{--                                    <div class="company-name">--}}
                    {{--                                        Golushkov industries--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="company-place">--}}
                    {{--                                        <img src="{{ asset('img/interface-icons/fi-rr-marker.png') }}" alt="place-icon"--}}
                    {{--                                             width="15px">--}}
                    {{--                                        Могилёв--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="application-name">--}}
                    {{--                                    Fullstack разработчик--}}
                    {{--                                </div>--}}
                    {{--                                <div class="application-price">--}}
                    {{--                                    от 2000 руб.--}}
                    {{--                                </div>--}}
                    {{--                                <div class="application-langs-schedules">--}}
                    {{--                                    <div class="application-langs">--}}
                    {{--                                        <div class="application-lang">PHP</div>--}}
                    {{--                                        <div class="application-lang">Laravel</div>--}}
                    {{--                                    </div>--}}
                    {{--                                    <div class="application-schedules">--}}
                    {{--                                        <div class="application-schedule">Сменный график</div>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                                <div class="application-description">--}}
                    {{--                                    Крупная строительная компания Golushkov industries в поисках fullstack разработчика.--}}
                    {{--                                    Автоматизированная система по разработке календариков, карточек социальных сетей и--}}
                    {{--                                    генератора QR-кодов. Оплата сдельная, вахтовый метод. Ждём ваших заявок!--}}
                    {{--                                </div>--}}
                    {{--                                <div class="application-btn">--}}
                    {{--                                    <button class="button btn">Подробнее</button>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </article>--}}
                </div>
            </section>
        </div>
    </div>
@endsection
