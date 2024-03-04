<!DOCTYPE html>
<?php
  include 'head.php';
  ?>

<body>
  <div class="page">
    <!-- start header -->
    <?php
    include 'header.php';
    ?>
    <!-- end header -->
    <main>
      <!-- start hero -->
      <section class="hero rd-upload rd-background" data-rd-image="./img/hero.webp">
        <div class="hero__container container">
          <div class="hero__descr">
            <h1 class="hero__title tt-53-36">
              Kneipe in Köln
            </h1>
            <p class="hero__text tx-17">
              Sehen Sie Sportübertragungen in bester Atmosphäre zusammen bei uns
            </p>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title tt-53-36">
            Über uns
          </h2>
          <div class="about__texts">
            <p class="about__text tx-17">
              Willkommen in der Kneipe in Köln! Ein idealer Ort für alle Sportfans und diejenigen, die nach einem
              großartigen Ort suchen, um Freunde zu treffen. Wir haben alles, was wir für eine echte Sportatmosphäre
              brauchen!
            </p>
            <p class="about__text tx-17">
              Darüber hinaus können Sie in unserer Bar Säle für verschiedene Veranstaltungen mieten. Es ist die perfekte
              Lösung für diejenigen, die Geburtstage, Firmenfeiern oder einfach nur ein Spiel in einer großen Firma
              organisieren möchten. Bei uns finden Sie geräumige Säle, bequeme Sitzgelegenheiten und alle notwendigen
              Geräte. "Kneipe in Köln" ist ein Ort, an dem Sport und Unterhaltung perfekt miteinander verbunden sind.
              Wir tun unser Bestes, um Ihren Besuch bei uns zu einem unvergesslichen und angenehmen Erlebnis zu machen.
              Kommen Sie zu uns, probieren Sie lokale Getränke und tauchen Sie ein in die Atmosphäre eines echten
              Sportfestes!
            </p>
          </div>
          <div class="wrapper-about-slider">
            <div class="about-slider swiper">
              <div class="swiper-wrapper">
                <div class="about-slider__slide swiper-slide">
                  <img src="./img/about-1.webp" width="336" height="336" alt="Über uns">
                </div>
                <div class="about-slider__slide swiper-slide">
                  <img src="./img/about-2.webp" width="336" height="336" alt="Über uns">
                </div>
                <div class="about-slider__slide swiper-slide">
                  <img src="./img/about-3.webp" width="336" height="336" alt="Über uns">
                </div>
                <div class="about-slider__slide swiper-slide">
                  <img src="./img/about-4.webp" width="336" height="336" alt="Über uns">
                </div>
                <div class="about-slider__slide swiper-slide">
                  <img src="./img/about-5.webp" width="336" height="336" alt="Über uns">
                </div>
              </div>
              <div class="wrapper-about-slider__pagination about-slider-pagination"></div>
              <button class="wrapper-about-slider__button about-slider-prev rd-upload">
                <img src="." data-rd-image="./img/svg/arrow.svg" width="24" height="24" alt="Arrow icon">
              </button>
              <button class="wrapper-about-slider__button about-slider-next rd-upload">
                <img src="." data-rd-image="./img/svg/arrow.svg" width="24" height="24" alt="Arrow icon">
              </button>
            </div>
          </div>
        </div>
      </section>
      <!-- end about -->

      <!-- start wett -->
      <section class="about" id="wett">
        <div class="container">
          <h2 class="about__title tt-53-36">
            Wettkämpfe
          </h2>
          <div class="about__texts">
            <p class="about__text tx-17">
              Wenn Sie ein echter Liebhaber sind, um einen riskanten Abend zu verbringen, bietet Ihnen unsere
              Einrichtung spezielle Säle, in denen die Leute Aufregung erleben können. Hier können Sie verschiedene
              Spiele genießen. Aber es ist wichtig zu beachten, dass es unmöglich ist, echtes Geld in unserer Bar zu
              gewinnen. Wir kümmern uns um Sie und bieten nur Unterhaltung ohne finanzielles Risiko an.
            </p>
          </div>
          <div class="wett">
            <ul class="wett__images">
              <li class="wett__image rd-upload">
                <img src="." data-rd-image="./img/wett-1.webp" width="336" height="336" alt="Wettkämpfe">
              </li>
              <li class="wett__image rd-upload">
                <img src="." data-rd-image="./img/wett-2.webp" width="336" height="336" alt="Wettkämpfe">
              </li>
            </ul>
            <a class="wett__button but but_change" href="games.php">
              Genauer
            </a>
          </div>
        </div>
      </section>
      <!-- end wett -->

      <!-- start live -->
      <section class="about" id="live">
        <div class="container">
          <h2 class="about__title tt-53-36">
            Live-Sendung
          </h2>
          <div class="about__texts">
            <p class="about__text tx-17">
              In unserer Bar können Sie die Spiele Ihrer Lieblingsmannschaft auf dem großen Bildschirm sehen. Egal ob
              Fußball, Eishockey oder ein anderer Sport, wir haben immer die Möglichkeit, die Übertragung in einer
              komfortablen und sicheren Umgebung zu genießen ! Wir versuchen, die Besten zu sein und arbeiten hart
              daran, dass Sie sich mit allen aktuellen Ereignissen auf dem Laufenden halten können. Wir erwarten Sie in
              der Kneipe in Köln!
            </p>
          </div>
          <ul class="live-list">
            <li class="live-list__item">
              <div class="live-list__data tt-53-36">
                21. Februar
              </div>
              <div class="live-list__text tx-17">
                19.30 Uhr - Eishockey. AK Bars ist eine Lokomotive.
              </div>
              <div class="live-list__text tx-17">
                23.00 Uhr - Fußball. Champions League. Napoli-Barcelona.
              </div>
            </li>
            <li class="live-list__item">
              <div class="live-list__data tt-53-36">
                22. Februar
              </div>
              <div class="live-list__text tx-17">
                19.30 Uhr - Eishockey. ZSKA Moskau-Sibirien.
              </div>
              <div class="live-list__text tx-17">
                20.45 - ️Fußball. Rennes-Mailand.
              </div>
            </li>
            <li class="live-list__item">
              <div class="live-list__data tt-53-36">
                23. Februar
              </div>
              <div class="live-list__text tx-17">
                19.10 Uhr - Eishockey. Dynamo-Ska.
              </div>
              <div class="live-list__text tx-17">
                23.00 -️ Fußball. Chelsea-Tottenham.
              </div>
            </li>
            <li class="live-list__item">
              <div class="live-list__data tt-53-36">
                23. Februar
              </div>
              <div class="live-list__text tx-17">
                14.00 - ️ Fußball. Dynamo-ZSKA MOSKAU.
              </div>
              <div class="live-list__text tx-17">
                18.10 - ️ Fußball. Barcelona-Getafe.
              </div>
              <div class="live-list__text tx-17">
                23.00 - ️ Fußball. Arsenal-Newcastle.
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end live -->

      <!-- start contacts -->
      <section class="contacts rd-upload rd-background" id="contacts" data-rd-image="./img/tish.webp">
        <div class="contacts__container container">
          <div class="contacts__descr">
            <h2 class="contacts__title tt-53-36">
              Tischreservierungen an der Bar oder Firmenveranstaltungen -
            </h2>
            <a class="contacts__link but" href="mailto:rollendereichtumer-de@gmail.com">
              <img src="." data-rd-image="./img/svg/mail.svg" width="24" height="24"
                alt="Icon mail">
              rollendereichtumer-de@gmail.com
            </a>
          </div>
        </div>
      </section>
      <!-- end contacts -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>