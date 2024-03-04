<!DOCTYPE html>
<?php
    include 'head.php';
    ?>

<body>
  <div class="page page_change">
    <!-- start header -->
    <?php
    include 'header.php';
    ?>
    <!-- end header -->
    <main>
      <!-- start enter -->
      <section class="about">
        <div class="container">
          <h1 class="about__title tt-53-36">
            Casino slot machines
          </h1>
          <div class="about__texts">
            <p class="about__text tx-17">
              Welkom bij Corendon Amsterdam Schiphol Airport, A Tribute Portfolio Hotel. In ons hotel bieden wij
              speciale speelhallen met speelautomaten en casino ' s, die al uw favoriete speelautomaten bevatten. Onze
              ervaren medewerkers zullen ervoor zorgen dat alles soepel verloopt, zodat u kunt ontspannen en genieten
              van de sensatie van het spel zonder zorgen. Houd er rekening mee dat hoewel onze speelautomaten spannende
              en spannende functies bieden, we niet de mogelijkheid bieden om echt geld te winnen. Dit beleid is gericht
              op het waarborgen van de veiligheid en het welzijn van onze gasten, omdat we prioriteit geven aan
              verantwoorde en plezierige gameplay. Kom en ervaar de opwinding in onze gokhallen met een hotel casino,
              waar entertainment en ontspanning worden gecombineerd met veiligheid, want alles is absoluut legaal.
              Geniet van uw verblijf bij ons en profiteer van alle voorzieningen die we kunnen bieden. We kijken ernaar
              uit u snel weer te zien!
            </p>
          </div>
          <ul class="about__images">
            <li class="about__image about__image_enter rd-upload">
              <img src="." data-rd-image="./img/slot-1.webp" width="336" height="336" alt="Casino slot machines">
            </li>
            <li class="about__image about__image_enter rd-upload">
              <img src="." data-rd-image="./img/slot-2.webp" width="336" height="336" alt="Casino slot machines">
            </li>
          </ul>
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