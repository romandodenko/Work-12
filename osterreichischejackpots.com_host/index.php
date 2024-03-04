<!DOCTYPE html>
<html lang="de">

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
              Salzburg Place to Stay
            </h1>
            <p class="hero__text tx-17">
              Ein Hotel in einer malerischen Gegend Österreichs!
            </p>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start komfort -->
      <section class="komfort" id="komfort">
        <div class="container">
          <div class="komfort__content">
            <div class="wrapper-slider">
              <div class="slider slider-komfort swiper">
                <div class="swiper-wrapper">
                  <div class="slider__slide swiper-slide rd-upload">
                    <img src="." data-rd-image="./img/zimmer-1.webp" width="336" height="336" alt="Zimmer und Komfort">
                  </div>
                  <div class="slider__slide swiper-slide rd-upload">
                    <img src="." data-rd-image="./img/zimmer-2.webp" width="336" height="336" alt="Zimmer und Komfort">
                  </div>
                  <div class="slider__slide swiper-slide rd-upload">
                    <img src="." data-rd-image="./img/zimmer-3.webp" width="336" height="336" alt="Zimmer und Komfort">
                  </div>
                  <div class="slider__slide swiper-slide rd-upload">
                    <img src="." data-rd-image="./img/zimmer-4.webp" width="336" height="336" alt="Zimmer und Komfort">
                  </div>
                </div>
              </div>
              <button class="wrapper-slider__button wrapper-slider__button_prev slider-komfort-prev rd-upload">
                <img src="." data-rd-image="./img/svg/button.svg" width="42" height="42" alt="Icon button">
              </button>
              <button class="wrapper-slider__button slider-komfort-next rd-upload">
                <img src="." data-rd-image="./img/svg/button.svg" width="42" height="42" alt="Icon button">
              </button>
              <div class="wrapper-slider__pagination slider-komfort-pagination"></div>
            </div>
            <div class="komfort__descr">
              <h2 class="komfort__title tt-53-36">
                Zimmer und Komfort
              </h2>
              <div class="komfort__texts">
                <p class="komfort__text tx-17">
                  Die Zimmer im Hotel Salzburg Place to Stay sind ideal für einen angenehmen Aufenthalt. Hier finden Sie
                  eine Vielzahl von Unterkünften, von gemütlichen Einzelzimmern bis hin zu geräumigen Familienzimmer.
                  Alle
                  Zimmer sind elegant eingerichtet und mit modernen Annehmlichkeiten ausgestattet, damit sich jeder Gast
                  wie zu Hause fühlt.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end komfort -->

      <!-- start essen -->
      <section class="komfort" id="essen">
        <div class="container">
          <div class="komfort__content komfort__content_essen">
            <div class="komfort__descr">
              <h2 class="komfort__title komfort__title_essen tt-53-36">
                Essen für Sie
              </h2>
              <div class="komfort__texts">
                <p class="komfort__text komfort__text_essen tx-17">
                  Das Hotelrestaurant bietet eine abwechslungsreiche Speisekarte, in der jeder Gast etwas nach seinem
                  Geschmack finden kann. Hier werden Gerichte der österreichischen und internationalen Küche mit
                  frischen und natürlichen Zutaten serviert. Das Restaurant bietet auch eine große Auswahl an Weinen, so
                  dass jeder Gast ein perfekt auf sein Gericht abgestimmtes Getränk genießen kann. Das Hotel verfügt
                  auch über ein Café, in dem Sie eine Tasse aromatischen Kaffee genießen und frisch gebackene Desserts
                  genießen können.
                </p>
              </div>
            </div>
            <div class="wrapper-slider">
              <div class="slider slider-essen swiper">
                <div class="swiper-wrapper">
                  <div class="slider__slide swiper-slide rd-upload">
                    <img src="." data-rd-image="./img/essen-1.webp" width="336" height="336" alt="Zimmer und Komfort">
                  </div>
                  <div class="slider__slide swiper-slide rd-upload">
                    <img src="." data-rd-image="./img/essen-2.webp" width="336" height="336" alt="Zimmer und Komfort">
                  </div>
                  <div class="slider__slide swiper-slide rd-upload">
                    <img src="." data-rd-image="./img/essen-3.webp" width="336" height="336" alt="Zimmer und Komfort">
                  </div>
                </div>
              </div>
              <button class="wrapper-slider__button wrapper-slider__button_prev slider-essen-prev rd-upload">
                <img src="." data-rd-image="./img/svg/button.svg" width="42" height="42" alt="Icon button">
              </button>
              <button class="wrapper-slider__button slider-essen-next rd-upload">
                <img src="." data-rd-image="./img/svg/button.svg" width="42" height="42" alt="Icon button">
              </button>
              <div class="wrapper-slider__pagination slider-essen-pagination"></div>
            </div>
          </div>
        </div>
      </section>
      <!-- end essen -->

      <!-- start natur -->
      <section class="komfort" id="natur">
        <div class="container">
          <div class="komfort__content">
            <div class="natur-image rd-upload">
              <img src="." data-rd-image="./img/natur.webp" width="336" height="336" alt="Natur und Ruhe">
            </div>
            <div class="komfort__descr">
              <h2 class="komfort__title tt-53-36">
                Natur und Ruhe
              </h2>
              <div class="komfort__texts">
                <p class="komfort__text tx-17">
                  Das Hotel Salzburg Place to Stay ist von der herrlichen Natur der österreichischen Alpen umgeben und
                  ermöglicht es den Gästen, die wunderschöne Landschaft zu genießen und aktiv an der frischen Luft zu
                  entspannen. Schöne Bergwege, ideal zum Wandern oder Radfahren, befinden sich in der Nähe des Hotels.
                  Zu jeder Jahreszeit können Sie hier Wintersportarten wie Skifahren oder Snowboarden unternehmen oder
                  in der warmen Jahreszeit durch die Berge und Seen wandern.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end natur -->

      <!-- start slots -->
      <section class="slots">
        <div class="container">
          <div class="slots__content">
            <h2 class="slots__title tt-53-36">
              Freizeit und Unterhaltung
            </h2>
            <div class="slots__texts">
              <p class="slots__text tx-17">
                Das Salzburg Place to Stay bietet viele Möglichkeiten für einen aktiven und erholsamen Aufenthalt Nutzen
                Sie das Fitnesscenter, um während Ihres Urlaubs fit zu bleiben. Zu Ihrer Verfügung steht auch ein
                Außenpool, in dem Sie morgens und abends schwimmen können. Für Liebhaber von Spa-Behandlungen gibt es
                einen Schönheitssalon und Massagezentren. Um die wahre Atmosphäre zu spüren, bieten wir spezielle
                Spielhallen an, die Ihnen ein lang ersehntes Gefühl der Aufregung geben.
              </p>
            </div>
            <ul class="slots__items">
              <li class="slots__item">
                <div class="slots__image rd-upload">
                  <img src="." data-rd-image="./img/slot-1.webp" width="336" height="336"
                    alt="Freizeit und Unterhaltung">
                </div>
                <p class="slots__text tx-17">
                  Wir garantieren eine sichere Atmosphäre, in der Sie Ihre Routine vergessen können.
                </p>
              </li>
              <li class="slots__item">
                <div class="slots__image rd-upload">
                  <img src="." data-rd-image="./img/slot-2.webp" width="336" height="336"
                    alt="Freizeit und Unterhaltung">
                </div>
                <p class="slots__text tx-17">
                  Hier wird jeder etwas für sich finden!
                </p>
              </li>
            </ul>
            <a class="slots__link but but_borger" href="games.php">
              Genauer
            </a>
          </div>
        </div>
      </section>
      <!-- end slots -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>