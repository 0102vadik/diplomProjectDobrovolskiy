@extends('layouts.app')

@section('head_links')
    <link rel="stylesheet" href="{{ asset('css/home-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/assets.css') }}">
@endsection

@section('content')
    <div class="container">
        <!-- For student -->
        <header>
            <div class="header-container">
                <div class="header-title-container">
                    <h2 class="header-title">
                        Найди <span>свою работу</span> сегодня!
                    </h2>
                    <h3 class="header-subtitle">
                        Сотни вакансий в компьютерной, инженерной и технологической сферах ждут вас.
                    </h3>
                </div>

                <form action="">
                    <div class="header-search">
                        <input class="search-input" type="search" placeholder="Какую вакансию вы ищите?">
                        <button class="search-btn" type="submit">Найти</button>
                    </div>
                </form>
            </div>
        </header>

        <!-- For company -->
        <header style="display: none">
            <div class="header-container">
                <div class="header-title-container">
                    <h2 class="header-title">
                        Найди <span>молодого специалиста</span> сегодня!
                    </h2>
                    <h3 class="header-subtitle">
                        Сотни студентов ждут ваших предложений.
                    </h3>
                </div>

                <form action="">
                    <div class="header-search">
                        <input class="search-input" type="search"
                               placeholder="Студентов со знанием каких языков программирования вы ищите?">
                        <button class="search-btn" type="submit">Найти</button>
                    </div>
                </form>
            </div>
        </header>

    </div>
    <main>
        <div class="container">
            <div class="application-content">
                <!-- Фильтры -->
                <aside class="application-filters">
                    <h2 class="application-filters-title">Фильтры</h2>
                    <article class="filter-type filter-by">
                        <h3 class="filter-title">Отфильтровать по</h3>
                        <div class="filter-choose">
                            <div>
                                <input id="relevant" type="radio" name="filterBy" value="По соответствию">
                                <label for="relevant">По соответствию</label>
                            </div>
                            <div>
                                <input id="date" type="radio" name="filterBy">
                                <label for="date">По дате</label>
                            </div>
                            <div>
                                <input id="salary-expensive" type="radio" name="filterBy">
                                <label for="salary-expensive">По убыванию зарплаты</label>
                            </div>
                            <div>
                                <input id="salary-cheaper" type="radio" name="filterBy">
                                <label for="salary-cheaper">По возрастанию зарплаты</label>
                            </div>
                        </div>
                    </article>
                    <article class="filter-type salary">
                        <h3 class="filter-title">Уровень дохода</h3>
                        <div class="filter-choose">
                            <div>
                                <input id="from500" type="radio" name="salary">
                                <label for="from500">От 500 руб.</label>
                            </div>
                            <div>
                                <input id="from1000" type="radio" name="salary">
                                <label for="from1000">От 1000 руб.</label>
                            </div>
                            <div>
                                <input id="from1500" type="radio" name="salary">
                                <label for="from1500">От 1500 руб.</label>
                            </div>
                            <div>
                                <input id="from2000" type="radio" name="salary">
                                <label for="from2000">От 2000 руб.</label>
                            </div>
                            <div>
                                <input id="from2500" type="radio" name="salary">
                                <label for="from2500">От 2500 руб.</label>
                            </div>
                        </div>
                    </article>
                    <article class="filter-type specialization">
                        <h3 class="filter-title">Специализация</h3>
                        <div class="filter-choose">
                            <div>
                                <input id="frontend" type="radio" name="specialization">
                                <label for="frontend">Front-end разработчик</label>
                            </div>
                            <div>
                                <input id="backend" type="radio" name="specialization">
                                <label for="backend">Back-end разработчик</label>
                            </div>
                            <div>
                                <input id="fullstack" type="radio" name="specialization">
                                <label for="fullstack">Fullstack разработчик</label>
                            </div>
                            <div>
                                <input id="game" type="radio" name="specialization">
                                <label for="game">Разработчик игр</label>
                            </div>
                            <div>
                                <input id="mobile" type="radio" name="specialization">
                                <label for="mobile">Разработчик моб. приложений</label>
                            </div>
                            <div>
                                <input id="tester" type="radio" name="specialization">
                                <label for="tester">Тестировщик</label>
                            </div>
                            <div>
                                <input id="projectManager" type="radio" name="specialization">
                                <label for="projectManager">Менеджер проекта</label>
                            </div>
                        </div>
                    </article>
                    <article class="filter-type lang">
                        <h3 class="filter-title">Языки программирования</h3>
                        <div class="filter-choose">
                            <div>
                                <input id="c#" type="checkbox" name="lang">
                                <label for="c#">C#</label>
                            </div>
                            <div>
                                <input id="c++" type="checkbox" name="lang">
                                <label for="c++">C++</label>
                            </div>
                            <div>
                                <input id="javascript" type="checkbox" name="lang">
                                <label for="javascript">JavaScript</label>
                            </div>
                            <div>
                                <input id="php" type="checkbox" name="lang">
                                <label for="php">PHP</label>
                            </div>
                            <div>
                                <input id="java" type="checkbox" name="lang">
                                <label for="java">Java</label>
                            </div>
                            <div>
                                <input id="1c" type="checkbox" name="lang">
                                <label for="1c">1С</label>
                            </div>
                        </div>
                    </article>
                    <article class="filter-type schedule">
                        <h3 class="filter-title">График работы</h3>
                        <div class="filter-choose">
                            <div>
                                <input id="fullDay" type="checkbox" name="schedule">
                                <label for="fullDay">Полный день</label>
                            </div>
                            <div>
                                <input id="shiftWork" type="checkbox" name="schedule">
                                <label for="shiftWork">Сменный график</label>
                            </div>
                            <div>
                                <input id="flexibleSchedule" type="checkbox" name="schedule">
                                <label for="flexibleSchedule">Гибкий график</label>
                            </div>
                            <div>
                                <input id="distantWork" type="checkbox" name="schedule">
                                <label for="distantWork">Удалённая работа</label>
                            </div>
                        </div>
                    </article>
                </aside>
                <!-- Список вакансий / стундентов -->
                <!-- For student -->
                <section class="application-container">
                    <!-- For student -->
                    <h2 class="application-title">Count вакансий</h2>
                    <!-- For company -->
                    <h2 class="application-title" style="display: none">Count студентов</h2>
                    <div class="application-list">
                        <article class="application-card">
                            <div class="company-icon">
                                <img src="{{ asset('img/company-icons/yarik.png') }}" alt="company-icon">
                            </div>
                            <div class="company-info">
                                <div class="company-name">
                                    Kabashov company
                                </div>
                                <div class="application-name">
                                    Front-end разработчик
                                </div>
                                <div class="application-langs">
                                    <div class="application-lang">HTML</div>
                                    <div class="application-lang">CSS</div>
                                    <div class="application-lang">JavaScript</div>
                                </div>
                                <div class="application-description">
                                    В нашей компании не хватает front-end разработчиков, да и back-end страдает. А всё
                                    почему? Да потому что я бездарь и ничего не знаю. Да и вообще, не хочу ничего делать
                                    — создал компанию на стипендию. Обращайтесь!
                                </div>
                                <div class="application-btn">
                                    <button class="button btn">Подробнее</button>
                                </div>
                            </div>
                        </article>
                        <article class="application-card">
                            <div class="company-icon">
                                <img src="{{ asset('img/company-icons/peugeot.png') }}" alt="company-icon">
                            </div>
                            <div class="company-info">
                                <div class="company-name">
                                    Peugeot Automobile company
                                </div>
                                <div class="application-name">
                                    Back-end разработчик
                                </div>
                                <div class="application-langs">
                                    <div class="application-lang">PHP</div>
                                    <div class="application-lang">Laravel</div>
                                </div>
                                <div class="application-description">
                                    Автомобильная компания Peugeot ищет back-end разработчиков для создания
                                    информационно-аналитической системы по устранению ржавчины в багажнике и на нижней
                                    части автомобилей. Весёлая компания сварщиков подскажет какие факторы должны
                                    учитываться и какие методы анализа требуются. Оставляй свою заявку!
                                </div>
                                <div class="application-btn">
                                    <button class="button btn">Подробнее</button>
                                </div>
                            </div>
                        </article>
                        <article class="application-card">
                            <div class="company-icon">
                                <img src="{{ asset('img/company-icons/test.jpg') }}" alt="company-icon">
                            </div>
                            <div class="company-info">
                                <div class="company-name">
                                    Golushkov industries
                                </div>
                                <div class="application-name">
                                    Fullstack разработчик
                                </div>
                                <div class="application-langs">
                                    <div class="application-lang">PHP</div>
                                    <div class="application-lang">Laravel</div>
                                </div>
                                <div class="application-description">
                                    Крупная строительная компания Golushkov industries в поисках fullstack разработчика.
                                    Автоматизированная система по разработке календариков, карточек социальных сетей и
                                    генератора QR-кодов. Оплата сдельная, вахтовый метод. Ждём ваших заявок!
                                </div>
                                <div class="application-btn">
                                    <button class="button btn">Подробнее</button>
                                </div>
                            </div>
                        </article>
                        <article class="application-card">
                            <div class="company-icon">
                                <img src="{{ asset('img/company-icons/test.jpg') }}" alt="company-icon">
                            </div>
                            <div class="company-info">
                                <div class="company-name">
                                    Golushkov industries
                                </div>
                                <div class="application-name">
                                    Fullstack разработчик
                                </div>
                                <div class="application-langs">
                                    <div class="application-lang">PHP</div>
                                    <div class="application-lang">Laravel</div>
                                </div>
                                <div class="application-description">
                                    Крупная строительная компания Golushkov industries в поисках fullstack разработчика.
                                    Автоматизированная система по разработке календариков, карточек социальных сетей и
                                    генератора QR-кодов. Оплата сдельная, вахтовый метод. Ждём ваших заявок!
                                </div>
                                <div class="application-btn">
                                    <button class="button btn">Подробнее</button>
                                </div>
                            </div>
                        </article>
                        <article class="application-card">
                            <div class="company-icon">
                                <img src="{{ asset('img/company-icons/test.jpg') }}" alt="company-icon">
                            </div>
                            <div class="company-info">
                                <div class="company-name">
                                    Golushkov industries
                                </div>
                                <div class="application-name">
                                    Fullstack разработчик
                                </div>
                                <div class="application-langs">
                                    <div class="application-lang">PHP</div>
                                    <div class="application-lang">Laravel</div>
                                </div>
                                <div class="application-description">
                                    Крупная строительная компания Golushkov industries в поисках fullstack разработчика.
                                    Автоматизированная система по разработке календариков, карточек социальных сетей и
                                    генератора QR-кодов. Оплата сдельная, вахтовый метод. Ждём ваших заявок!
                                </div>
                                <div class="application-btn">
                                    <button class="button btn">Подробнее</button>
                                </div>
                            </div>
                        </article>
                        <article class="application-card">
                            <div class="company-icon">
                                <img src="{{ asset('img/company-icons/test.jpg') }}" alt="company-icon">
                            </div>
                            <div class="company-info">
                                <div class="company-name">
                                    Golushkov industries
                                </div>
                                <div class="application-name">
                                    Fullstack разработчик
                                </div>
                                <div class="application-langs">
                                    <div class="application-lang">PHP</div>
                                    <div class="application-lang">Laravel</div>
                                </div>
                                <div class="application-description">
                                    Крупная строительная компания Golushkov industries в поисках fullstack разработчика.
                                    Автоматизированная система по разработке календариков, карточек социальных сетей и
                                    генератора QR-кодов. Оплата сдельная, вахтовый метод. Ждём ваших заявок!
                                </div>
                                <div class="application-btn">
                                    <button class="button btn">Подробнее</button>
                                </div>
                            </div>
                        </article>
                        <article class="application-card">
                            <div class="company-icon">
                                <img src="{{ asset('img/company-icons/test.jpg') }}" alt="company-icon">
                            </div>
                            <div class="company-info">
                                <div class="company-name">
                                    Golushkov industries
                                </div>
                                <div class="application-name">
                                    Fullstack разработчик
                                </div>
                                <div class="application-langs">
                                    <div class="application-lang">PHP</div>
                                    <div class="application-lang">Laravel</div>
                                </div>
                                <div class="application-description">
                                    Крупная строительная компания Golushkov industries в поисках fullstack разработчика.
                                    Автоматизированная система по разработке календариков, карточек социальных сетей и
                                    генератора QR-кодов. Оплата сдельная, вахтовый метод. Ждём ваших заявок!
                                </div>
                                <div class="application-btn">
                                    <button class="button btn">Подробнее</button>
                                </div>
                            </div>
                        </article>
                        <article class="application-card">
                            <div class="company-icon">
                                <img src="{{ asset('img/company-icons/test.jpg') }}" alt="company-icon">
                            </div>
                            <div class="company-info">
                                <div class="company-name">
                                    Golushkov industries
                                </div>
                                <div class="application-name">
                                    Fullstack разработчик
                                </div>
                                <div class="application-langs">
                                    <div class="application-lang">PHP</div>
                                    <div class="application-lang">Laravel</div>
                                </div>
                                <div class="application-description">
                                    Крупная строительная компания Golushkov industries в поисках fullstack разработчика.
                                    Автоматизированная система по разработке календариков, карточек социальных сетей и
                                    генератора QR-кодов. Оплата сдельная, вахтовый метод. Ждём ваших заявок!
                                </div>
                                <div class="application-btn">
                                    <button class="button btn">Подробнее</button>
                                </div>
                            </div>
                        </article>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
