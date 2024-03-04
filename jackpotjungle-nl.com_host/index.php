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
          <h1 class="hero__title tt-64-36">
            Corendon Amsterdam Schiphol Airport, a Tribute Portfolio Hotel
          </h1>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title tt-53-36">
            Over ons
          </h2>
          <div class="about__texts">
            <p class="about__text tx-17">
              Welkom bij Corendon Amsterdam Schiphol Airport, A Tribute Portfolio Hotel! Wij zijn een uitstekende keuze
              voor wie op zoek is naar een comfortabel verblijf in de buurt van de Internationale luchthaven Schiphol.
              Ons hotel biedt de perfecte combinatie van modern design, service van hoge kwaliteit en gunstige ligging.
              We zullen u graag een onvergetelijk verblijf aanbieden en we zijn er zeker van dat uw tijd bij ons
              onvergetelijk zal zijn.
            </p>
          </div>
          <ul class="about__images">
            <li class="about__image rd-upload">
              <img src="." data-rd-image="./img/about-1.webp" width="336" height="336" alt="Over ons">
            </li>
            <li class="about__image rd-upload">
              <img src="." data-rd-image="./img/about-2.webp" width="336" height="336" alt="Over ons">
            </li>
          </ul>
        </div>
      </section>
      <!-- end about -->

      <!-- start gemak -->
      <section class="about" id="gemak">
        <div class="container">
          <h2 class="about__title tt-53-36">
            Gemak
          </h2>
          <div class="about__texts">
            <p class="about__text tx-17">
              We besteden speciale aandacht aan het comfort en gemak van onze gasten. Onze ruime en modern ingerichte
              kamers zullen u voorzien van een comfortabel verblijf tijdens uw verblijf. Elke kamer is uitgerust met
              alles wat nodig is voor een comfortabel verblijf, waaronder een comfortabel bed, een moderne badkamer,
              evenals toegang tot Wi-Fi en een TV. Wij bieden ook wasserij en wisselkantoor diensten om uw verblijf nog
              comfortabeler te maken.
            </p>
          </div>
          <ul class="about__images about__images_gemak">
            <li class="about__image about__image_gemak rd-upload">
              <img src="." data-rd-image="./img/gemak-1.webp" width="336" height="336" alt="Gemak">
            </li>
            <li class="about__image about__image_gemak rd-upload">
              <img src="." data-rd-image="./img/gemak-2.webp" width="336" height="336" alt="Gemak">
            </li>
            <li class="about__image about__image_gemak rd-upload">
              <img src="." data-rd-image="./img/gemak-3.webp" width="336" height="336" alt="Gemak">
            </li>
          </ul>
        </div>
      </section>
      <!-- end gemak -->

      <!-- start enter -->
      <section class="about">
        <div class="container">
          <h2 class="about__title tt-53-36">
            Entertainment
          </h2>
          <div class="about__texts">
            <p class="about__text tx-17">
              Wij streven ernaar om uw verblijf in het Corendon Amsterdam Schiphol Airport Hotel onvergetelijk en
              interessant te maken. Wij bieden diverse animatieprogramma ' s voor alle gasten. U kunt ons ultramoderne
              fitnesscentrum bezoeken en u kunt ook ontspannen in de spa en genieten van lichaams-en
              gezichtsbehandelingen. Als u de voorkeur geeft aan actieve recreatie, bieden wij u graag de mogelijkheid
              om op ons grondgebied te tafeltennissen of te bowlen. We hebben ook een gezellige bar waar u kunt genieten
              van aromatische koffie of proeven van een verscheidenheid aan cocktails begeleid door live muziek. In het
              hotel bieden wij speciaal ingerichte kamers voor het krijgen van echte opwinding, waar u kunt ontspannen
              van uw dagelijkse routine. Wij geloven dat ons hotel u een veilig en comfortabel verblijf zal bieden. Wij
              staan klaar om uw verblijf in Amsterdam onvergetelijk te maken en aan al uw verwachtingen te voldoen.
            </p>
          </div>
          <ul class="about__images">
            <li class="about__image about__image_enter rd-upload">
              <img src="." data-rd-image="./img/enter-1.webp" width="336" height="336" alt="Entertainment">
            </li>
            <li class="about__image about__image_enter rd-upload">
              <img src="." data-rd-image="./img/enter-2.webp" width="336" height="336" alt="Entertainment">
            </li>
          </ul>
          <a class="about__link but" href="games.php">
            Meer gedetailleerd
          </a>
        </div>
      </section>
      <!-- end enter -->

      <!-- start disk -->
      <section class="disk">
        <div class="disk__container container">
          <div class="disk__left">
            <h2 class="disk__title tt-53-36">
              15% korting op Boeking
            </h2>
            <div class="disk__texts">
              <p class="disk__text tx-20">
                Door nu een kamer te boeken, ontvangt u korting op hotelaccommodatie!
              </p>
            </div>
          </div>
          <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
            <div class="form__inputs">
              <input class="form__input input" type="text" name="text" id="text" placeholder="Naam..." required>
              <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail..." required>
            </div>
            <button class="form__button but" type="submit">
              Verzenden
            </button>
          </form>
        </div>
      </section>
      <!-- end disk -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>