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
          <h1 class="hero__title tt-52-34">
            Fairmont Hotel Vier Jahreszeiten
          </h1>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="about__container container">
          <div class="about__left">
            <h2 class="about__title tt-42-30">
              Über uns
            </h2>
            <div class="about__texts">
              <p class="about__text tx-16-14">
                Das Fairmont Hotel Vier Jahreszeiten in Deutschland ist ein luxuriöses Ziel für Freizeit- und
                Geschäftsveranstaltungen. Es wird für seinen außergewöhnlichen Service hoch geschätzt und bietet
                schnelle Auszahlungen und moderne Unterkünfte.
              </p>
              <p class="about__text tx-16-14">
                Insgesamt bietet das Fairmont Hotel Vier Jahreszeiten seinen Gästen eine hohe Bewertung, einen schnellen
                Checkout und moderne Unterkünfte. Hier finden Sie alles, was Sie für einen komfortablen Aufenthalt und
                die erfolgreiche Organisation von Geschäftsveranstaltungen benötigen. Ob Sie dieses Hotel privat oder
                geschäftlich besuchen, Sie werden den hohen Servicestandard und die modernen Annehmlichkeiten zu
                schätzen wissen.
              </p>
            </div>
          </div>
          <ul class="about__images">
            <li class="about__image rd-upload">
              <img src="." data-rd-image="./img/about-1.webp" width="336" height="336" alt="Über uns">
            </li>
            <li class="about__image rd-upload">
              <img src="." data-rd-image="./img/about-2.webp" width="336" height="336" alt="Über uns">
            </li>
            <li class="about__image rd-upload">
              <img src="." data-rd-image="./img/about-3.webp" width="336" height="336" alt="Über uns">
            </li>
            <li class="about__image rd-upload">
              <img src="." data-rd-image="./img/about-4.webp" width="336" height="336" alt="Über uns">
            </li>
          </ul>
        </div>
      </section>
      <!-- end about -->

      <!-- start konf -->
      <section class="konf rd-upload rd-background" id="konf" data-rd-image="./img/mer.webp">
        <div class="konf__container container">
          <div class="konf__descr">
            <h2 class="konf__title tt-42-30">
              Konferenzräume
            </h2>
            <p class="konf__text tx-16-14">
              Das Fairmont Hotel Vier Jahreszeiten verfügt über großzügige und komfortable Tagungsräume, die mit
              modernster Technik ausgestattet sind. Hier können Sie jede Geschäftsveranstaltung erfolgreich durchführen,
              sei es eine Konferenz, ein Seminar oder ein Firmenmeeting. Das professionelle Personal des Hotels ist
              jederzeit bereit, Ihnen die nötige Unterstützung zu bieten, damit Ihre Veranstaltung erfolgreich und
              reibungslos verläuft.
            </p>
          </div>
        </div>
      </section>
      <!-- end konf -->

      <!-- start rest -->
      <section class="about" id="rest">
        <div class="container">
          <div class="about__left about__left_rest">
            <h2 class="about__title about__title_rest tt-42-30">
              Restaurants
            </h2>
            <div class="about__texts about__texts_rest">
              <p class="about__text tx-16-14">
                Die Restaurants und Bars des Fairmont Hotel Vier Jahreszeiten bieten Ihnen eine große Auswahl an
                Gourmetspeisen und -getränken, zubereitet von sorgfältigen Köchen. Hier können Sie ein gehobenes
                gastronomisches Erlebnis genießen, ein Geschäftsessen einnehmen oder einfach in gemütlicher Atmosphäre
                nach einem langen Tag entspannen. Jede Einrichtung wird für Sie eine einzigartige Atmosphäre schaffen,
                in der Sie tolle Gesellschaft und Entspannung genießen können.
              </p>
            </div>
          </div>
          <ul class="about__images">
            <li class="about__image about__image_rest rd-upload">
              <img src="." data-rd-image="./img/rest-1.webp" width="336" height="336" alt="Restaurants">
            </li>
            <li class="about__image about__image_rest rd-upload">
              <img src="." data-rd-image="./img/rest-2.webp" width="336" height="336" alt="Restaurants">
            </li>
          </ul>
        </div>
      </section>
      <!-- end rest -->

      <!-- start slots -->
      <section class="slots">
        <div class="container">
          <h2 class="slots__title tt-42-30">
            Spielzimmer
          </h2>
          <div class="slots__texts">
            <p class="slots__text tx-16-14">
              Hotelspiele in Deutschland sind moderne Spielgeräte, die bei Besuchern einen hohen Anklang finden. Dieses
              Hotel garantiert eine schnelle Gewinnauszahlung, was das Spielerlebnis für Gäste noch attraktiver macht.
            </p>
            <p class="slots__text tx-16-14">
              Die Gaming-Einrichtungen des Hotels sind mit der neuesten Gaming-Technologie ausgestattet, um ein
              fesselndes Gameplay und hochwertige Unterhaltung zu gewährleisten.
            </p>
            <p class="slots__text tx-16-14">
              Das Hotel sorgt für eine zeitnahe Bearbeitung der Gewinne und deren Auszahlung, was den Spielvorgang für
              die Gäste komfortabler und attraktiver macht.
            </p>
            <p class="slots__text tx-16-14">
              Den Gästen wird eine große Auswahl an Spielen mit unterschiedlichen Spielen, Themen und Einsätzen geboten,
              sodass jeder eine passende Option für sich finden kann.
            </p>
            <p class="slots__text tx-16-14">
              Die Spiele in diesem Hotel in Deutschland sind so konzipiert, dass sie selbst die anspruchsvollsten
              Besucher zufriedenstellen, ihnen unterhaltsame und aufregende Spielmomente bieten und eine schnelle und
              bequeme Auszahlung der Gewinne garantieren.
            </p>
          </div>
          <a class="slots__link but" href="plays.php">
            Mehr Details
          </a>
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