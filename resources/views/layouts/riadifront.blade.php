<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.loc.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.min.js') }}" defer></script>
    {{-- fancy box --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

</head>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(
            k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(62950606, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true,
        ecommerce: "dataLayer"
    });

</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/62950606" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150093339-9"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-150093339-9');

</script>

<header class="header">
    <div class="riadi-container header__riadi-container">
        <a href="/" class="logo--wrap">
            <img src="/img/logo/ng-logo3.png" alt="Логотип RIADI pro" class="logo">
        </a>
        <!-- /.logo--wrap -->

        <div class="header__item tel">
            <!-- /.<a href="tel:+79820777555" class="header__item__link">+7 (9820) 777-555</a> -->
            <a href="tel:+79820777555" class="header__item__link ligth_tel">+7 (902) 210-56-62</a>
            <!-- /.header__item__link -->
            <span class="header__item__subtitle">Менеджер</span>
            <!-- /.header__item__subtitle -->
        </div>
        <!-- /.header__item -->

        <div class="header__item mail">
            <a href="mailto:info@riadi.pro" class="header__item__link ligth_tel">info@riadi.pro</a>
            <!-- /.header__item__link -->
            <span class="header__item__subtitle">Пишите нам</span>
            <!-- /.header__item__subtitle -->
        </div>
        <!-- /.header__item -->

        <a href="/pages/offer/offer.php" class="header__btn">Акции</a>
        <!-- /.header__btn -->

        <div class="burger--wrap">
            <div class="burger">
                <div class="burger__item burger__item--1"></div>
                <!-- /.burger__item -->
                <div class="burger__item burger__item--2"></div>
                <!-- /.burger__item -->
                <div class="burger__item burger__item--3"></div>
                <!-- /.burger__item -->
            </div>
            <!-- /.burger -->

            <span class="burger__title">Меню</span>
            <!-- /.burger__title -->
        </div>
        <!-- /.burger--wrap -->

        <div class="header__menu--wrap">
            <nav class="header__menu">
                <a href="/pages/company/company.php" class="header__menu__link">О компании</a>
                <!-- /.header__menu__link -->
                <a href="/pages/service/service.php" class="header__menu__link">Виды работ</a>
                <!-- /.header__menu__link -->
                <a href="/pages/news/news.php" class="header__menu__link">Новости</a>
                <!-- /.header__menu__link -->
                <a href="/pages/gallery/gallery.php" class="header__menu__link">Галерея</a>
                <!-- /.header__menu__link -->
                <a href="/pages/info/info.php" class="header__menu__link">Информация для подрядных организаций</a>
                <!-- /.header__menu__link -->
                <a href="/pages/offer/offer.php" class="header__menu__link">Акции</a>
                <!-- /.header__menu__link -->
                <a href="/pages/gratitude/gratitude.php" class="header__menu__link">Отзывы Наших Заказчиков</a>
                <!-- /.header__menu__link -->
                <a href="/pages/contacts/contacts.php" class="header__menu__link header__menu__link--last">Контакты</a>
                <!-- /.header__menu__link -->
            </nav>
            <!-- /.header__menu -->
        </div>
        <!-- /.header__menu--wrap -->

    </div>
    <!-- /.riadi-container header__riadi-container -->
</header>
<!-- /.header -->

<body>

    @yield('content')

    <footer class="footer">
        <div class="riadi-container footer__riadi-container">
            <div class="footer__info">
                <a href="/" class="logo--wrap">
                    <img src="/img/logo/logo.png" alt="Логотип RIADI pro" class="logo">
                </a>
                <!-- /.logo--wrap -->
                <span class="footer__info__address footer__info__text--light">
                    ООО "РИАДИ ПРО"
                    <hr>
                    432035, Россия,
                    Ульяновская область, г. Ульяновск,
                    проспект Гая, д. 100, офис 19 (2 этаж).
                    <hr>
                </span>
                <!-- /.footer__info__address footer__info__text--light -->
                <div class="footer__info__item">
                    <span class="footer__info__text--bold">Телефон:</span>
                    <a href="tel:+79820777555" class="footer__info__text--light">+7 (9820) 77-75-55
                        <hr>
                    </a>
                    <a href="tel:+79022105662" class="footer__info__text--light">+7 (902) 210-56-62
                        <hr>
                    </a>
                </div>
                <!-- /.footer__info__item -->
                <div class="footer__info__item">
                    <span class="footer__info__text--bold">Email:</span>
                    <a href="mailto:info@riadi.pro" class="footer__info__text--light">info@riadi.pro
                        <hr>
                    </a>
                </div>
                <!-- /.footer__info__item -->
            </div>
            <!-- /.footer__info -->
            <nav class="footer__nav">
                <div class="footer__nav__left">
                    <a href="/pages/company/company.php" class="footer__nav__main-link">О компании</a>
                    <a href="/pages/news/news.php" class="footer__nav__main-link">Новости</a>
                    <a href="/pages/gallery/gallery.php" class="footer__nav__main-link">Галерея</a>
                    <a href="/pages/offer/offer.php" class="footer__nav__main-link">Акции</a>
                    <a href="/pages/gratitude/gratitude.php" class="footer__nav__main-link">Отзывы Наших Заказчиков</a>
                    <a href="/pages/contacts/contacts.php" class="footer__nav__main-link">Контакты</a>
                    <a href="/pages/info/info.php" class="footer__nav__main-link">Информация для подрядных
                        организаций</a>
                </div>
                <div class="footer__nav__right">
                    <a href="/pages/service/service.php" class="footer__nav__main-link footer__nav__right__main-link">Мы
                        выполняем следующие виды работ:</a>
                    <a href="/pages/service/trimming.php" class="footer__nav__link">Отделочные</a>
                    <a href="/pages/service/dismantling.php" class="footer__nav__link">Демонтажные</a>
                    <a href="/pages/service/wiring.php" class="footer__nav__link">Электромонтажные</a>
                    <a href="/pages/service/commissioning.php" class="footer__nav__link">Пусконаладочные</a>
                    <a href="/pages/service/design.php" class="footer__nav__link">Проектные (РД)</a>
                    <a href="/pages/service/steel-erection.php" class="footer__nav__link">Монтаж металлоконструкций</a>
                    <p class="footer__nav__main-link footer__nav__right__main-link">Сервис, монтаж и обслуживание
                        систем:</p>
                    <a href="/pages/service/ventilation.php" class="footer__nav__link">Вентиляции</a>
                    <a href="/pages/service/heating.php" class="footer__nav__link">Теплоснабжения</a>
                    <a href="/pages/service/conditioning.php" class="footer__nav__link">Кондиционирования</a>
                    <a href="/pages/service/water-supply.php" class="footer__nav__link">Водоснабжения</a>
                    <a href="/pages/service/sewage-and-water-disposal.php" class="footer__nav__link">Канализации и
                        водоотведения</a>
                    <a href="/pages/service/instrumentation.php" class="footer__nav__link">КИПиА</a>
                </div>
            </nav>
            <!-- /.footer__nav -->
            <div class="footer__other">
                <div class="footer__other__top">
                    <div class="footer__other__dosc">
                        <span class="footer__other__title" style="font-size: 18px;">
                            Документы
                        </span>
                        <!-- /.footer__other__title footer__other__dosc__title -->
                        <a href="/docs/footer/%D0%94%D0%BE%D0%B3%D0%BE%D0%B2%D0%BE%D1%80%20%E2%84%96%20%D0%9C01-01_19%20%D0%9E%D0%9E%D0%9E%20%D0%A0%D0%98%D0%90%D0%94%D0%98%20%D0%9F%D0%A0%D0%9E%20%20%D0%A8%D0%90%D0%91%D0%9B%D0%9E%D0%9D.docx"
                            class="footer__other__dosc__link"><span
                                class="footer__other__title footer__other__dosc__title">Договор подряда</span></a>
                        <a href="/docs/footer/%D0%9A%D0%B0%D1%80%D1%82%D0%BE%D1%87%D0%BA%D0%B0%20%D0%BF%D1%80%D0%B5%D0%B4%D0%BF%D1%80%D0%B8%D1%8F%D1%82%D0%B8%D1%8F%20%D0%9E%D0%9E%D0%9E%20%D0%A0%D0%98%D0%90%D0%94%D0%98%20%D0%9F%D0%A0%D0%9E%20%D0%98%D0%9D%D0%9D%207321008798.doc"
                            class="footer__other__dosc__link"><span
                                class="footer__other__title footer__other__dosc__title">Карточка предприятия</span></a>
                        <a href="/docs/sro/SRO RIADI PRO.pdf" class="footer__other__dosc__link"><span
                                class="footer__other__title footer__other__dosc__title">Выписка из СРО</span></a>
                        <a href="/docs/footer/price.xls" class="footer__other__dosc__link"><span
                                class="footer__other__title footer__other__dosc__title">Прайс</span></a>
                    </div>
                    <!-- /.footer__other__dosc -->

                    <div class="footer__other__social">
                        <span class="footer__other__title" style="font-size: 18px;">
                            Социальные сети
                        </span>
                        <!-- /.footer__other__title -->
                        <div class="footer__other__social__link--wrap">
                            <a target="_blank" href="https://wa.me/890221056612" class="footer__other__social__link">
                                <img src="/img/footer__other__social__link__img/whatsapp.png" alt=""
                                    class="footer__other__social__link__img">
                            </a>
                            <!-- /.footer__other__social__link -->
                            <a target="_blank" href="tg://resolve?domain=mironovvi" class="footer__other__social__link">
                                <img src="/img/footer__other__social__link__img/telegram.png" alt=""
                                    class="footer__other__social__link__img">
                            </a>
                            <!-- /.footer__other__social__link -->
                            <a target="_blank" href="viber://chat?number=790221056612"
                                class="footer__other__social__link">
                                <img src="/img/footer__other__social__link__img/viber.png" alt=""
                                    class="footer__other__social__link__img">
                            </a>
                            <!-- /.footer__other__social__link -->
                            <a target="_blank" href="https://www.instagram.com/riadi_pro/?hl=ru"
                                class="footer__other__social__link">
                                <img src="/img/footer__other__social__link__img/instagram.png" alt=""
                                    class="footer__other__social__link__img">
                            </a>
                            <!-- /.footer__other__social__link -->
                        </div>
                        <!-- /.footer__other__social__link--wrap -->
                    </div>
                    <!-- /.footer__other__social -->
                </div>
                <!-- /.footer__other__top -->
                <div class="footer__other__copyright">

                    <nav class="navbar navbar-expand-md navbar-dark shadow-sm">
                        <div class="container">
                            @guest
                                <img src="/img/footer__other__copyright__img/agatech.png" alt="AGATECH"
                                    class="footer__other__copyright__img">
                                @if (Route::has('login'))
                                    <a class="footer__other__copyright__text" href="{{ route('login') }}">
                                        {{ __('Login') }}
                                    </a>
                                @endif
                            @else
                                <a class="btn" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <a class="footer__other__copyright__text" href="/admin/blog/posts"><img
                                        src="/img/footer__other__copyright__img/agatech.png" alt="AGATECH"
                                        class="footer__other__copyright__img"></a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        @endguest
                </div>
                </nav>
            </div>
            <!-- /.footer__other__bottom -->
        </div>
        <!-- /.footer__other -->
        </div>
        <!-- /.riadi-container footer__riadi-container -->
    </footer>
    <!-- /.footer -->


</body>

</html>
