<div class="application-content">
    <!-- Фильтры -->
    <div>
        <aside class="application-filters">
            <form method="post" action="{{route('sortStudents')}}">
                @csrf
                <h2 class="application-filters-title">Фильтры</h2>
                {{--<article class="filter-type filter-by">
                    <h3 class="filter-title">Отфильтровать по</h3>
                    <div class="filter-choose">
                        <div>
                            <input id="relevant" type="radio" name="filterBy" value="По соответствию" checked>
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
                </article>--}}
                <article class="filter-type specialization">
                    <h3 class="filter-title">Специализация</h3>
                    <div class="filter-choose">
                        <div>
                            <input id="frontend" type="checkbox" name="specialization[]" value="Front-end разработчик">
                            <label for="frontend">Front-end разработчик</label>
                        </div>
                        <div>
                            <input id="backend" type="checkbox" name="specialization[]" value="Back-end разработчик">
                            <label for="backend">Back-end разработчик</label>
                        </div>
                        <div>
                            <input id="fullstack" type="checkbox" name="specialization[]" value="Fullstack разработчик">
                            <label for="fullstack">Fullstack разработчик</label>
                        </div>
                        <div>
                            <input id="game" type="checkbox" name="specialization[]" value="Fullstack разработчик">
                            <label for="game">Разработчик игр</label>
                        </div>
                        <div>
                            <input id="mobile" type="checkbox" name="specialization[]" value="Разработчик моб. приложений">
                            <label for="mobile">Разработчик моб. приложений</label>
                        </div>
                        <div>
                            <input id="tester" type="checkbox" name="specialization[]" value="Тестировщик">
                            <label for="tester">Тестировщик</label>
                        </div>
                        <div>
                            <input id="projectManager" type="checkbox" name="specialization[]" value="Менеджер проекта">
                            <label for="projectManager">Менеджер проекта</label>
                        </div>
                    </div>
                </article>
                <div class="filter-more">
                    <article class="filter-type salary">
                        <h3 class="filter-title">Предпочитаемый доход</h3>
                        <div class="filter-choose">
                            <div>
                                <input id="notDefined" type="checkbox" name="salary[]" value="Доход не указан">
                                <label for="notDefined">Доход не указан</label>
                            </div>
                            <div>
                                <input id="from500" type="checkbox" name="salary[]" value="От 500 руб.">
                                <label for="from500">От 500 руб.</label>
                            </div>
                            <div>
                                <input id="from1000" type="checkbox" name="salary[]" value="От 1000 руб.">
                                <label for="from1000">От 1000 руб.</label>
                            </div>
                            <div>
                                <input id="from1500" type="checkbox" name="salary[]" value="От 1500 руб.">
                                <label for="from1500">От 1500 руб.</label>
                            </div>
                            <div>
                                <input id="from2000" type="checkbox" name="salary[]" value="От 2000 руб.">
                                <label for="from2000">От 2000 руб.</label>
                            </div>
                            <div>
                                <input id="from2500" type="checkbox" name="salary[]" value="От 2500 руб.">
                                <label for="from2500">От 2500 руб.</label>
                            </div>
                        </div>
                    </article>
                    <article class="filter-type place">
                        <h3 class="filter-title">Местонахождение</h3>
                        <div class="filter-choose">
                            <div>
                                <input id="mogilev" type="checkbox" name="place[]" value="Могилёв">
                                <label for="mogilev">Могилёв</label>
                            </div>
                            <div>
                                <input id="minsk" type="checkbox" name="place[]" value="Минск">
                                <label for="minsk">Минск</label>
                            </div>
                            <div>
                                <input id="grodno" type="checkbox" name="place[]" value="Гродно">
                                <label for="grodno">Гродно</label>
                            </div>
                            <div>
                                <input id="brest" type="checkbox" name="place[]" value="Брест">
                                <label for="brest">Брест</label>
                            </div>
                            <div>
                                <input id="vitebsk" type="checkbox" name="place[]" value="Витебск">
                                <label for="vitebsk">Витебск</label>
                            </div>
                            <div>
                                <input id="gomel" type="checkbox" name="place[]" value="Гомель">
                                <label for="gomel">Гомель</label>
                            </div>
                        </div>
                    </article>
{{--                    <article class="filter-type lang">--}}
{{--                        <h3 class="filter-title">Языки программирования</h3>--}}
{{--                        <div class="filter-choose">--}}
{{--                            <div>--}}
{{--                                <input id="c#" type="checkbox" name="lang[]" value="C#">--}}
{{--                                <label for="c#">C#</label>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <input id="c++" type="checkbox" name="lang[]" value="C++">--}}
{{--                                <label for="c++">C++</label>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <input id="javascript" type="checkbox" name="lang[]" value="JavaScript">--}}
{{--                                <label for="javascript">JavaScript</label>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <input id="php" type="checkbox" name="lang[]" value="PHP">--}}
{{--                                <label for="php">PHP</label>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <input id="java" type="checkbox" name="lang[]" value="Java">--}}
{{--                                <label for="java">Java</label>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <input id="1c" type="checkbox" name="lang[]" value="1С">--}}
{{--                                <label for="1c">1С</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </article>--}}
                    <article class="filter-type schedule">
                        <h3 class="filter-title">График работы</h3>
                        <div class="filter-choose">
                            <div>
                                <input id="fullDay" type="checkbox" name="schedule[]" value="Полный день">
                                <label for="fullDay">Полный день</label>
                            </div>
                            <div>
                                <input id="shiftWork" type="checkbox" name="schedule[]" value="Сменный график">
                                <label for="shiftWork">Сменный график</label>
                            </div>
                            <div>
                                <input id="flexibleSchedule" type="checkbox" name="schedule[]" value="Гибкий график">
                                <label for="flexibleSchedule">Гибкий график</label>
                            </div>
                            <div>
                                <input id="distantWork" type="checkbox" name="schedule[]" value="Удалённая работа">
                                <label for="distantWork">Удалённая работа</label>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="show-more">
                    <span class="show-more-text">Показать больше</span>
                    <div class="select-arrow"></div>
                </div>
                <button class="btn button" type="submit">Применить</button>
            </form>
        </aside>
    </div>

    <!-- Список вакансий / стундентов -->

    <section class="application-container">
        <h2 class="application-title">Кол-во студентов: {{count($arrayObject)}}</h2>
        <div class="application-list">
            @foreach($arrayObject as $object)
                <article class="application-card">
                    <div class="company-icon">
                        <img src="{{ asset($object->getDataQuestionnaire()->getPhotoSrc())}}" alt="company-icon">
                    </div>
                    <div class="company-info">
                        <div class="company-name-place">
                            <div class="company-name">
                                {{$object->getDataQuestionnaire()->getSurname()}} {{$object->getDataQuestionnaire()->getName()}} {{$object->getDataQuestionnaire()->getPatronymic()}}
                            </div>
                            @if($object->getDataQuestionnaire()->getCity())
                                <div class="company-place">
                                    <img src="{{ asset('img/interface-icons/fi-rr-marker.png') }}" alt="place-icon"
                                         width="15px">
                                    {{$object->getDataQuestionnaire()->getCity()}}
                                </div>
                            @endif
                        </div>
                        <div class="application-name">
                            {{$object->getDataQuestionnaire()->getSpecialization()}}
                        </div>
                        <div class="application-price">
                            {{$object->getDataQuestionnaire()->getPreferredIncome()}}
                        </div>
                        <div class="application-langs-schedules">
                            <div class="application-langs">
                                @foreach($object->getArrayLanguages() as $language)
                                    <div class="application-lang">{{$language['language']}}</div>
                                @endforeach
                            </div>
                            <div class="application-schedules">
                                <div class="application-schedule">{{$object->getDataQuestionnaire()->getPreferredSchedule()}}</div>
                            </div>
                        </div>
                        <div class="application-description">
                            {{$object->getDataQuestionnaire()->getDescription()}}
                        </div>
                        <div class="application-btn">
                            <button class="button btn"
                                    onclick="window.location.href='/home/company/more/{{$object->getDataQuestionnaire()->getId()}}'">
                                Подробнее
                            </button>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
</div>
