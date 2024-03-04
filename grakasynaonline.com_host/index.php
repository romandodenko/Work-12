<!DOCTYPE html>
<html lang="pl">

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
            <h1 class="hero__title tt-64-40">
              Haffner Hotel SPA Sopot
            </h1>
            <a class="hero__link but" href="#rooms">
              Pokoje
            </a>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start oferta -->
      <section class="oferta" id="oferta">
        <div class="container">
          <div class="head">
            <div class="head__icon rd-upload">
              <img src="." data-rd-image="./img/svg/decor.svg" width="68" height="68" alt="Icon decor">
            </div>
            <h2 class="head__title tt-53-36">
              Oferta
            </h2>
          </div>
          <ul class="oferta__items">
            <li class="oferta__item">
              <div class="oferta__top rd-upload rd-background" data-rd-image="./img/oferta-1.webp">
                <div class="oferta__top-item tx-17">
                  from 564 zł/pers./night
                </div>
              </div>
              <div class="oferta__name tx-17">
                Rodzinne ferie zimowe nad morzem
              </div>
            </li>
            <li class="oferta__item">
              <div class="oferta__top rd-upload rd-background" data-rd-image="./img/oferta-2.webp">
                <div class="oferta__top-item tx-17">
                  from 1 072 zł/pers./night
                </div>
              </div>
              <div class="oferta__name tx-17">
                Zostań na 3 noce - zapłać za 2!
              </div>
            </li>
            <li class="oferta__item">
              <div class="oferta__top rd-upload rd-background" data-rd-image="./img/oferta-3.webp">
                <div class="oferta__top-item tx-17">
                  from 321 zł/pers./night
                </div>
              </div>
              <div class="oferta__name tx-17">
                Weekend nad morzem
              </div>
            </li>
            <li class="oferta__item">
              <div class="oferta__top rd-upload rd-background" data-rd-image="./img/oferta-4.webp">
                <div class="oferta__top-item tx-17">
                  from 423 zł/pers./night
                </div>
              </div>
              <div class="oferta__name tx-17">
                Haffnera i Miłość
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end oferta -->

      <!-- start spa -->
      <section class="spa" id="spa">
        <div class="container">
          <div class="head">
            <div class="head__icon rd-upload">
              <img src="." data-rd-image="./img/svg/decor.svg" width="68" height="68" alt="Icon decor">
            </div>
            <h2 class="head__title tt-53-36">
              Spa
            </h2>
          </div>
          <div class="spa__content">
            <div class="spa__image spa__image_1 rd-upload">
              <img src="." data-rd-image="./img/spa-1.webp" width="336" height="336" alt="Spa">
            </div>
            <div class="spa__descr">
              <div class="spa__texts">
                <p class="spa__text tx-17">
                  Spa w Haffner Hotel & SPA w Sopocie to prawdziwa perełka oferty hotelu, łącząca w sobie najlepsze
                  usługi, najwyższe oceny i najnowocześniejszą technologię, aby zapewnić gościom niezapomniane wrażenia
                  i pełen relaks.
                </p>
                <p class="spa__text tx-17">
                  Haffner Hotel & SPA oferuje szeroką gamę zabiegów zdrowotnych i upiększających, w tym masaże, okłady,
                  zabiegi na twarz i ciało, a także specjalistyczne programy zapewniające maksymalny relaks i odnowę
                  biologiczną. Profesjonalni specjaliści i personel SPA gwarantują indywidualne podejście i wysoką
                  jakość usług.
                </p>
              </div>
              <ul class="spa__images">
                <li class="spa__image rd-upload">
                  <img src="." data-rd-image="./img/spa-2.webp" width="336" height="336" alt="Spa">
                </li>
                <li class="spa__image rd-upload">
                  <img src="." data-rd-image="./img/spa-3.webp" width="336" height="336" alt="Spa">
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- end spa -->

      <!-- start rooms -->
      <section class="rooms" id="rooms">
        <div class="container">
          <div class="head">
            <div class="head__icon rd-upload">
              <img src="." data-rd-image="./img/svg/decor.svg" width="68" height="68" alt="Icon decor">
            </div>
            <h2 class="head__title tt-53-36">
              Pokoje
            </h2>
          </div>
          <ul class="rooms__items">
            <li class="rooms__item">
              <div class="rooms__image rd-upload">
                <img src="." data-rd-image="./img/rooms-1.webp" width="336" height="336"
                  alt="Standardowy pokój jednoosobowy">
              </div>
              <div class="rooms__descr">
                <div class="rooms__top">
                  <div class="rooms__num tx-17">
                    01
                  </div>
                  <div class="rooms__name tt-31-24">
                    Standardowy pokój jednoosobowy
                  </div>
                </div>
                <div class="rooms__texts">
                  <p class="rooms__text tx-17">
                    from 264 zł/pers./night
                  </p>
                </div>
              </div>
            </li>
            <li class="rooms__item">
              <div class="rooms__image rd-upload">
                <img src="." data-rd-image="./img/rooms-2.webp" width="336" height="336"
                  alt="Pokój dwuosobowy typu Superior">
              </div>
              <div class="rooms__descr">
                <div class="rooms__top">
                  <div class="rooms__num tx-17">
                    02
                  </div>
                  <div class="rooms__name tt-31-24">
                    Pokój dwuosobowy typu Superior
                  </div>
                </div>
                <div class="rooms__texts">
                  <p class="rooms__text tx-17">
                    from 306 zł/pers./night
                  </p>
                </div>
              </div>
            </li>
            <li class="rooms__item">
              <div class="rooms__image rd-upload">
                <img src="." data-rd-image="./img/rooms-3.webp" width="336" height="336"
                  alt="Pokój dwuosobowy typu Premium">
              </div>
              <div class="rooms__descr">
                <div class="rooms__top">
                  <div class="rooms__num tx-17">
                    03
                  </div>
                  <div class="rooms__name tt-31-24">
                    Pokój dwuosobowy typu Premium
                  </div>
                </div>
                <div class="rooms__texts">
                  <p class="rooms__text tx-17">
                    from 391 zł/pers./night
                  </p>
                </div>
              </div>
            </li>
            <li class="rooms__item">
              <div class="rooms__image rd-upload">
                <img src="." data-rd-image="./img/rooms-4.webp" width="336" height="336" alt="Pokój rodzinny Premium">
              </div>
              <div class="rooms__descr">
                <div class="rooms__top">
                  <div class="rooms__num tx-17">
                    04
                  </div>
                  <div class="rooms__name tt-31-24">
                    Pokój rodzinny Premium
                  </div>
                </div>
                <div class="rooms__texts">
                  <p class="rooms__text tx-17">
                    from 493 zł/pers./night
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end rooms -->

      <!-- start slots -->
      <section class="slots">
        <div class="container">
          <h2 class="slots__title slots__title_white tt-53-36">
            Jednoręki bandyta
          </h2>
          <div class="slots__top">
            <ul class="slots__images">
              <li class="slots__image rd-upload">
                <img src="." data-rd-image="./img/slot-1.webp" width="336" height="336" alt="Jednoręki bandyta">
              </li>
              <li class="slots__image rd-upload">
                <img src="." data-rd-image="./img/slot-2.webp" width="336" height="336" alt="Jednoręki bandyta">
              </li>
            </ul>
            <div class="slots__descr">
              <div class="slots__texts">
                <p class="slots__text slots__text_white tx-17">
                  W Haffner Hotel & SPA w Sopocie gry realizowane są w ramach programu rozrywkowego dla gości i
                  spełniają najwyższe standardy jakości i bezpieczeństwa, oferując najlepszą listę gier, wysoko
                  ocenianych wśród odwiedzających oraz najnowsze modele maszyn
                </p>
                <p class="slots__text slots__text_white tx-17">
                  Automaty do gry w Haffner Hotel & SPA oferują imponującą różnorodność wyborów, od tradycyjnych
                  klasycznych gier po nowoczesne gry wideo z ekscytującymi historiami i wysokimi wygranymi. Goście mogą
                  cieszyć się emocjami w przytulnym i stylowym otoczeniu hotelu, czując atmosferę wzruszenia i
                  ekscytacji.
                </p>
              </div>
              <a class="slots__link but" href="games.php">
                Więcej szczegółów
              </a>
            </div>
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