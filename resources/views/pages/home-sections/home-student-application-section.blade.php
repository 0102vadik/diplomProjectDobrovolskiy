<div class="application-content">
    <!-- Фильтры -->
    <div>
        <aside class="application-filters">
            <form action="{{route('sortAnnouncement')}}" method="post">
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
                <article class="filter-type filter-work-type">
                    <h3 class="filter-title">Тип</h3>
                    <div class="filter-choose">
                        <div>
                            <input id="internship" value="Стажировка" type="checkbox" name="type[]">
                            <label for="internship">Стажировка</label>
                        </div>
                        <div>
                            <input id="practice" value="Практика" type="checkbox" name="type[]">
                            <label for="practice">Практика</label>
                        </div>
                        <div>
                            <input id="work" value="Работа" type="checkbox" name="type[]">
                            <label for="work">Работа</label>
                        </div>
                    </div>
                </article>
                <div class="filter-more">
                    {{--<article class="filter-type salary">
                        <h3 class="filter-title">Уровень дохода</h3>
                        <div class="filter-choose">
                            <div>
                                <input id="notDefined" type="radio" name="salary">
                                <label for="notDefined">Доход не указан</label>
                            </div>
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
                    </article>--}}
                    <article class="filter-type place">
                        <h3 class="filter-title">Местонахождение</h3>
                        <div class="filter-choose">
                            <div>
                                <input id="mogilev" value="Могилёв" type="checkbox" name="city[]">
                                <label for="mogilev">Могилёв</label>
                            </div>
                            <div>
                                <input id="minsk" value="Минск" type="checkbox" name="city[]">
                                <label for="minsk">Минск</label>
                            </div>
                            <div>
                                <input id="grodno" value="Гродно" type="checkbox" name="city[]">
                                <label for="grodno">Гродно</label>
                            </div>
                            <div>
                                <input id="brest" value="Брест" type="checkbox" name="city[]">
                                <label for="brest">Брест</label>
                            </div>
                            <div>
                                <input id="vitebsk" value="Витебск" type="checkbox" name="city[]">
                                <label for="vitebsk">Витебск</label>
                            </div>
                            <div>
                                <input id="gomel" value="Гомель" type="checkbox" name="city[]">
                                <label for="gomel">Гомель</label>
                            </div>
                        </div>
                    </article>
                    {{--<article class="filter-type specialization">
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
                    </article>--}}
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
        <h2 class="application-title">Кол-во вакансий: {{count($arrayAnnouncements)}}</h2>
        <div class="application-list">
            @foreach($arrayAnnouncements as $object)
                <article class="application-card">
                    <div class="company-icon">
                        <img src="{{ asset($object->logo_src)}}" alt="company-icon">
                    </div>
                    <div class="company-info">
                        <div class="company-name-place">
                            <div class="company-name">
                                {{$object->company_name}}
                            </div>
                            @if($object->city)
                                <div class="company-place">
                                    <img src="{{ asset('img/interface-icons/fi-rr-marker.png') }}" alt="place-icon"
                                         width="15px">
                                    {{$object->city}}
                                </div>
                            @endif
                        </div>
                        <div class="application-name">
                            {{$object->header}}
                        </div>
                        <div class="application-description">
                            {{$object->description}}
                        </div>
                        <div class="application-btn">
                            <button class="button btn"
                                    onclick="window.location.href='/home/student/more/{{$object->id_course}}'">
                                Подробнее
                            </button>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
</div>
