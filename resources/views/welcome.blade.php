@extends('layouts.riadifront')

@section('content')
<main class="main">
    <div id="particles-js"></div>
    <section class="banner">
      <div class="riadi-container banner__riadi-container">
        <div class="banner__content">
          <h1 class="banner__title">Cервисное инженерное сопровождение</h1>
          <!-- /.banner__title -->
          <p class="banner__desc" style="text-align: justify;">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>от проектирования и строительства новых объектов, до качественного сопровождения действующих инфраструктур.
            <br>
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>наша команда и возможности достаточно универсальны, готовы помочь вам в любом вопросе.
          </p>
          <!-- /.banner__desc -->
          <a class="btn" href="#feedback">ПОДАТЬ ЗАЯВКУ</a>
          <!-- /.banner__btn -->
        </div>
        <!-- /.banner__content -->
      </div>
      <!-- /.riadi-container banner__riadi-container -->

      <div class="banner__slider">
        <div class="slider orange-rectangle">
          <div class="slider__item">
            <img src="/img/slider/slider__item__img-1.jpg" class="slider__item__img" alt="Гарантия дипломированные специалисты">
            <div class="slider__content">
              <h6 class="slider__content__title">ГАРАНТИЯ</h6>
              <!-- /.slider__content__title -->
              <span class="slider__content__subtitle">дипломированные специалисты</span>
              <!-- /.slider__contennt__subtititle -->
            </div>
            <!-- /.slider__content -->
          </div>
          <div class="slider__item">
            <img src="/img/slider/slider__item__img-2.jpg" class="slider__item__img" alt="Качественное обслуживание и монтаж">
            <div class="slider__content">
              <h6 class="slider__content__title">Сервис</h6>
              <!-- /.slider__content__title -->
              <span class="slider__content__subtitle">обслуживание и эксплуатация</span>
              <!-- /.slider__contennt__subtititle -->
            </div>
            <!-- /.slider__content -->
          </div>
          <div class="slider__item">
            <img src="/img/slider/slider__item__img-3.jpg" class="slider__item__img" alt="только качественное обслуживание">
            <div class="slider__content">
              <h6 class="slider__content__title">Качество</h6>
              <!-- /.slider__content__title -->
              <span class="slider__content__subtitle">внимательность к деталям</span>
              <!-- /.slider__contennt__subtititle -->
            </div>
            <!-- /.slider__content -->
          </div>
        </div>
        <!-- /.slider -->
      </div>
      <!-- /.banner__slider -->
    </section>
    <!-- /.banner -->

    <section class="ourService">
      <div class="ourService__widget">
        <div class="ourService__widget__img--wrap">
          <img src="/img/ourService/ourService__widget__img.jpg" alt="Наши услуги RIADI PRO" class="ourService__widget__img">
        </div>
        <!-- /.ourService__widget__img--wrap -->
      </div>
      <!-- /.ourService__widget -->
      <div class="ourService__riadi-container">
        <div class="ourService__content">
          <span class="main__subtitle ourService__subtitle">Строительная компания</span>
          <h2 class="main__title ourService__title">RIADI PRO</h2>
          <div class="ourService__info">
            <div class="ourService__list ourService__list--default">
              <span class="ourService__list__title">Мы выполняем следующие виды работ:</span>
              <!-- /.ourService__list__title -->
              <a href="/pages/service/trimming.php" class="ourService__list__link">отделочные</a>
              <!-- /.ourService__list__link -->
              <a href="/pages/service/dismantling.php" class="ourService__list__link">демонтажные</a>
              <!-- /.ourService__list__link -->
              <a href="/pages/service/wiring.php" class="ourService__list__link">электромонтажные</a>
              <!-- /.ourService__list__link -->
              <a href="/pages/service/commissioning.php" class="ourService__list__link">пусконаладочные</a>
              <!-- /.ourService__list__link -->
              <a href="/pages/service/design.php" class="ourService__list__link">проектные</a>
              <!-- /.ourService__list__link -->
              <a href="/pages/service/steel-erection.php" class="ourService__list__link">монтаж металлоконструкций</a>
              <!-- /.ourService__list__link -->
            </div>
            <!-- /.ourService__list -->
            <div class="ourService__list ourService__list--white">
              <span class="ourService__list__title">А так же монтаж и обслуживание систем:</span>
              <!-- /.ourService__list__title -->
              <a href="/pages/service/ventilation.php" class="ourService__list__link">вентиляции</a>
              <!-- /.ourService__list__link -->
              <a href="/pages/service/heating.php" class="ourService__list__link">теплоснабжения</a>
              <!-- /.ourService__list__link -->
              <a href="/pages/service/conditioning.php" class="ourService__list__link">кондиционирования</a>
              <!-- /.ourService__list__link -->
              <a href="/pages/service/water-supply.php" class="ourService__list__link">водоснабжения</a>
              <!-- /.ourService__list__link -->
              <a href="/pages/service/sewage-and-water-disposal.php" class="ourService__list__link">канализации и водоотведения</a>
              <!-- /.ourService__list__link -->
              <a href="/pages/service/instrumentation.php" class="ourService__list__link">КИПиА</a>
              <!-- /.ourService__list__link -->

            </div>
            <!-- /.ourService__list -->
          </div>
          <!-- /.ourService__info -->
        </div>
      </div>
      <!-- /.riadi-container ourService__riadi-container -->

    </section>
    <!-- /.ourService -->

    <section class="about">
      <div class="riadi-container about__riadi-container">
        <div class="about__content">
          <span class="main__subtitle">Краткая информацию</span>
          <h2 class="main__title">Немного о нас</h2>
          <p class="about__desc" style="text-align: justify;">
            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Строительная компания RIADI PRO - полное сервисное обслуживание любого предприятия и оптимальное решение по модернизации производственного процесса с экономией вашего бюджета.
            <br>
            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Компетенции ООО "РИАДИ ПРО" позволяют сопровождать и обслуживать широкий спектр индустрий, от объектов нефтехимии и агропромышленного комплекса до АЗС и пекарен, от складских комплексов до точек розничных продаж, от крупных комплексных застроек до коттеджей и частных домов.
            <br>
            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>Для каждого клиента у нас есть выгодное предложение и достойный уровень сервиса.
          </p>
          <div style="background-color: #fba549 !important; padding: 5px; margin: 5px; border-radius: 5px;">
            <b>ООО «РИАДИ ПРО»</b> 14 октября 2020 г., вступили в члены саморегулируемой организации Ассоциация «Строители Ульяновска»
            <u><a href="/docs/sro/SRO RIADI PRO.pdf" style="color: white;">Выписка из СРО</a></u>
          </div>
          <a href="/pages/company/company.php" class="btn">ПОДРОБНЕЕ</a>
        </div>
      </div>
      <!-- /.riadi-container about__riadi-container -->
      <div class="about__widget">
        <div class="about__widget__img--wrap orange-rectangle">
          <img src="/img/about/about__widget__img.jpg" alt="Немного о RIADI PRO" class="about__widget__img">
        </div>
        <!-- /.about__img--wrap .orange-rectangle -->
      </div>
      <!-- /.about__widget -->
    </section>
    <!-- /.about -->

    <section class="become-our-client">
      <div class="riadi-container become-our-client__riadi-container">
        <h2 class="become-our-client__title">Стать нашим клиентом просто</h2>
        <div class="become-our-client__content">
          <div class="become-our-client__item">
            <img src="/img/become-our-client/become-our-client__item__img-1.png" alt="" class="become-our-client__item__img">
            <span class="become-our-client__item__title">ВЫ ЗВОНИТЕ</span>
            <!-- /.become-our-client__item__title -->
            <span class="become-our-client__item__desc">Указываете какой вид работ Вас интересует</span>
            <!-- /.become-our-client__item__desc -->
          </div>
          <!-- /.become-our-client__item -->
          <div class="become-our-client__item">
            <img src="/img/become-our-client/become-our-client__item__img-2.png" alt="" class="become-our-client__item__img">
            <span class="become-our-client__item__title">ОБГОВАРИВАЕМ ДЕТАЛИ</span>
            <!-- /.become-our-client__item__title -->
            <span class="become-our-client__item__desc">Вам предоставляется персональный менеджер</span>
            <!-- /.become-our-client__item__desc -->
          </div>
          <!-- /.become-our-client__item -->
          <div class="become-our-client__item">
            <img src="/img/become-our-client/become-our-client__item__img-3.png" alt="" class="become-our-client__item__img">
            <span class="become-our-client__item__title">МЫ ПРОВОДИМ ДИАГНОСТИКУ</span>
            <!-- /.become-our-client__item__title -->
            <span class="become-our-client__item__desc">Выявляем неполадки в оборудовании</span>
            <!-- /.become-our-client__item__desc -->
          </div>
          <!-- /.become-our-client__item -->
          <div class="become-our-client__item">
            <img src="/img/become-our-client/become-our-client__item__img-4.png" alt="" class="become-our-client__item__img">
            <span class="become-our-client__item__title">ОТПРАВЛЯЕМ БРИГАДУ</span>
            <!-- /.become-our-client__item__title -->
            <span class="become-our-client__item__desc">Для ремонта и обслуживания оборудования</span>
            <!-- /.become-our-client__item__desc -->
          </div>
          <!-- /.become-our-client__item -->
          <a name="feedback"></a>
        </div>
        <!-- /.become-our-client__content -->
      </div>
      <!-- /.riadi-container become-our-client__riadi-container -->
    </section>
    <!-- /.become-our-client -->

    <section class="company-feedback">
      <div class="riadi-container company-feedback__riadi-container">
        <img src="/img/company-feedback__img/company-feedback__img.png" alt="Обратная связь" class="company-feedback__img">
        <form class="company-feedback__form" action="" method="POST" enctype="multipart/form-data">
          <h2 class="company-feedback__form__title">Напишите нам</h2>
          <label for="name" class="company-feedback__label">
            <span class="company-feedback__label__title">Имя</span>
            <input name="name" type="text" placeholder="Введите имя" id="name">
          </label>
          <label for="mail" class="company-feedback__label">
            <span class="company-feedback__label__title">E-mail</span>
            <input name="email" type="email" placeholder="Введите почту" id="mail">
          </label>
          <label for="area" class="company-feedback__label">
            <span class="company-feedback__label__title">Сообщение</span>
            <textarea name="area" placeholder="Введите текст" id="area"></textarea>
          </label>
          <label class="company-feedback__label" style="display: inline;">
          <span class="company-feedback__label__title" style="display: inline;">Введите сумму: 4 + 8 = </span>
          <input name="capcha" type="number" id="capcha" required>
          </label>
          <input type="submit" value="Отправить" class="company-feedback__btn">
        </form>
      </div>
    </section>
  </main>
@endsection
