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
      <!-- start slots -->
      <section class="comp">
        <div class="container">
          <h1 class="comp__title tt-53-36">
            Gokautomaten
          </h1>
          <div class="comp__texts comp__texts_slots">
            <p class="comp__text tx-17">
              Welkom bij één van de beste sportcafés van Nederland! We zijn er trots op dat we enkele van de beste
              speelautomaten van het land aanbieden. De sportbar bezet een van de eerste plaatsen in de ranglijst van
              speelhallen vanwege het ruime aanbod aan spellen, uitstekende service en opwindende sfeer.
            </p>
            <p class="comp__text tx-17">
              Onze sportbar biedt gasten de kans om zich te verdiepen in de wereld van retro en moderne games en te
              genieten van de sfeer van arcadespellen uit het verleden en het heden. Hier vind je de populairste spellen
              die je een spannende tijd en onvergetelijke momenten van entertainment zullen bezorgen.
            </p>
          </div>
          <ul class="comp__images comp__images_column">
            <li class="comp__image comp__image_index-slots rd-upload">
              <img src="." data-rd-image="./img/slot-1.webp" width="336" height="336" alt="Gokautomaten">
            </li>
          </ul>
          <div class="comp__texts comp__texts_slots-width comp__texts_slots">
            <p class="comp__text tx-17">
              Welkom bij één van de beste sportcafés van Nederland! Wij zijn er trots op dat onze collectie
              speelautomaten tot de beste uit de regio behoort. De sportbar bezet zelfverzekerd een van de eerste
              plaatsen in de ranglijst van speelhallen dankzij een ruime keuze aan spellen, innovatieve machines en een
              vriendelijke sfeer.
            </p>
            <p class="comp__text tx-17">
              Onze speelautomaten in de sportbar zijn ontworpen om u onder te dompelen in een spannende wereld van
              entertainment. Met de nieuwste games en klassieke hits uit de arcadewereld hebben we voor iedereen iets om
              van te genieten en te genieten van een unieke game-ervaring.
            </p>
            <p class="comp__text tx-17">
              Een sportbar is niet zomaar een speelkamer, het is een plek waar iedereen zich een spelmeester kan voelen.
              Dompel jezelf onder in een wereld vol adrenaline, competitie en plezier met onze spannende speelautomaten.
              Welkom bij GameMaster's Den, jouw gaming-arena voor eindeloze entertainmentmogelijkheden!
            </p>
          </div>
          <ul class="comp__images">
            <li class="comp__image comp__image_slots rd-upload">
              <img src="." data-rd-image="./img/slot-2.webp" width="336" height="336" alt="Gokautomaten">
            </li>
            <li class="comp__image comp__image_slots rd-upload">
              <img src="." data-rd-image="./img/slot-3.webp" width="336" height="336" alt="Gokautomaten">
            </li>
          </ul>
        </div>
      </section>
      <!-- end slots -->

      <!-- start contacts -->
      <section class="contacts" id="contacts">
        <div class="container">
          <h2 class="contacts__title tt-53-36">
            Contacten
          </h2>
          <p class="contacts__text tx-23">
            Vul het formulier in en wij nemen contact met u op om al uw vragen te beantwoorden
          </p>
          <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
            <div class="form__inputs">
              <input class="form__input input" type="text" name="text" id="text" placeholder="Naam..." required>
              <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail..." required>
            </div>
            <button class="form__button but" type="submit">
              Versturen
            </button>
          </form>
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