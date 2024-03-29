<!DOCTYPE "html">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Repair information site</title>
    <link rel="stylesheet" href="css/info_reset.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" href="css/info_style.css" />
    <link rel="stylesheet" href="css/info_media.css" />
  </head>
  <body>
    <header class="header">
      <div class="header-logo">
        <img src="img/logo.png" alt="Repair logo" />
      </div>
        <nav class="navbar">
            <ul class="navbar__inner">
                <li>
                    <a href="{{ route('private') }}">О компании</a>
                </li>
                <li>
                    <a href="{{ route('information') }}">Примеры работ</a>
                </li>
                <li>
                    <a href="{{ route('orders') }}">Услуги</a>
                </li>
                {{--<li>
                    <a href="../login.php">Регистрация</a>
                </li>--}}
            </ul>
        </nav>
    </header>
    <section>
      <div class="offer__inner">
        <div class="container">
          <div class="offer_wrap">
            <div class="slider_wrap">
              <div class="offer_slider">
                <div class="offer_img">
                  <img
                    class="offer_img_inn"
                    src="img/offer_sliders/krasivaya-kvartira-s-orangevym-divanom-v-stokgolme-1 1.png"
                    alt=""
                  />
                </div>
                <div class="offer_img">
                  <img
                    class="offer_img_inn"
                    src="img/offer_sliders/krasivaya-kvartira-s-orangevym-divanom-v-stokgolme-1 1.png"
                    alt=""
                  />
                </div>
                <div class="offer_img">
                  <img
                    class="offer_img_inn"
                    src="img/offer_sliders/krasivaya-kvartira-s-orangevym-divanom-v-stokgolme-1 1.png"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="offer_text">
              <div class="offer_title">
                <h2>Французский стиль - главный тренд 2222</h2>
              </div>
              <div class="offer_list">
                <div class="offer_block">
                  <p class="offer_wrap_text">Срок: 54 годика</p>
                </div>
                <div class="offer_block">
                  <p class="offer_wrap_text">Площадь: 37 м<sup>2</sup></p>
                </div>
                <div class="offer_block">
                  <p class="offer_wrap_text">Стоимость: 1337228 грн.</p>
                </div>
              </div>
              <div class="offer_button">
                <a href="#">Получить смету</a>
              </div>
            </div>
          </div>
        </div>
        <img class="offer_bg" src="img/work/portfolio-pattern.png" alt="" />
      </div>
      <div class="container">
        <div class="feedback__inner">
          <div class="feedback_title">
            <h2>Отзывы пользователей</h2>
          </div>
          <div class="feedback_block">
            <div class="fd_block_title">
              <img src="img/feedback/photo_2021-11-12_02-15-47 1.png" alt="" />
              <h4>Денис, 54 года</h4>
            </div>
            <div class="feedback_descr">
              <p>
                Когда мы собрались делать ремонт – мы начали искать фирму, которая могла бы сделать
                и ремонт под ключ и дизайн проект. Задача оказалась не простая: На рынке оказались
                либо дорогие дизайнерские бюро, либо обычные бригады строителей. Из всех, с кем мы
                общались, больше всего нам понравилась компания «Абоба». Свое название компания
                оправдывает полностью – ребята действительно мастера своего дела. Нам предложили
                экономные решения, без ущерба качеству ремонта. Дизайн мы выбрали типовой из
                каталога – там есть из чего выбрать. По процессу - все без проблем и нюансов. Ребята
                молодцы!
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="maps_inner">
        <div class="map_info__title">
          <h2>Озвучим примерную стомиость по телеофну</h2>
          <div class="map_info_list">
            <div class="map_info_wrap">
              <img src="img/inf_icon/Rectangle 15.png" alt="" />
              <p>Какова площадь помещения?</p>
            </div>
            <div class="map_info_wrap">
              <img src="img/inf_icon/Rectangle 15.png" alt="" />
              <p>Новострой или старое здание?</p>
            </div>
            <div class="map_info_wrap">
              <img src="img/inf_icon/Rectangle 15.png" alt="" />
              <p>Каков ценовой предел?</p>
            </div>
            <div class="map_info_wrap">
              <img src="img/inf_icon/Rectangle 15.png" alt="" />
              <p>Назначение помещения?</p>
            </div>
          </div>
        </div>
        <div class="map_block">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89729.74861037846!2d14.356774136183937!3d45.347709194487315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4764a12517aabe2d%3A0x373c6f383dcbb670!2z0KDRltGU0LrQsCwg0KXQvtGA0LLQsNGC0ZbRjw!5e0!3m2!1suk!2scz!4v1651512408413!5m2!1suk!2scz"
            width="100%"
            height="100%"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="cont__inner">
          <h1 class="contact_title">Вы можете так же связться с нами через</h1>
          <div class="cont_wrap">
            <a href="#" class="cont_link">
              <img src="img/footer_img/telegram-brands 1.png" alt="" />
            </a>
            <a href="#" class="cont_link">
              <img src="img/footer_img/viber-brands 1.png" alt="" />
            </a>
            <a href="#" class="cont_link"
              ><img src="img/footer_img/instagram-brands 1.png" alt="" />
            </a>
            <a href="#" class="cont_link"
              ><img src="img/footer_img/whatsapp-brands 1.png" alt="" />
            </a>
          </div>
        </div>
      </div>
    </footer>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript" src="js/slick/slick.min.js"></script>
    <script type="text/javascript" src="js/info_scripts.js"></script>
  </body>
</html>
