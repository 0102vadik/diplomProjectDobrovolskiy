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

            <form action="{{route('searchStudent')}}" method="post">
                @csrf
                <div class="header-search">
                    <input class="search-input" type="search" name="search" placeholder="Какую вакансию вы ищите?">
                    <button class="search-btn" type="submit">Найти</button>
                </div>
            </form>
        </div>
</header>
