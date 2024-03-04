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
          <div class="hero__descr box-shadow">
            <h1 class="hero__title tt-64-36">
              Sportbar in Österreich
            </h1>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start match -->
      <section class="match" id="match">
        <div class="container">
          <div class="match__head">
            <h2 class="match__title tt-64-36">
              Bevorstehende Veranstaltungen
            </h2>
            <div class="match__texts">
              <p class="match__text tx-17">
                Willkommen in der Sportbar in Österreich, einer einzigartigen Einrichtung, die Sportbegeisterte aus der
                ganzen Stadt zusammenbringt! Wir glauben aufrichtig, dass Sport Menschen zusammenbringt, so dass Sie bei
                uns alles finden, was Sie brauchen, um Sportveranstaltungen in einer gemütlichen und freundlichen
                Atmosphäre zu genießen.
              </p>
            </div>
          </div>
          <ul class="match__items">
            <li class="match__item box-shadow">
              <div class="match__time tt-31">
                19:00, 24.02
              </div>
              <div class="match__text match__text_card tx-17">
                Rheindorf Altach - Hartberg
              </div>
            </li>
            <li class="match__item box-shadow">
              <div class="match__time tt-31">
                19:00, 03.03
              </div>
              <div class="match__text match__text_card tx-17">
                Red Bull Salzburg - Austria Klagenfurt
              </div>
            </li>
            <li class="match__item box-shadow">
              <div class="match__time tt-31">
                19:00, 10.03
              </div>
              <div class="match__text match__text_card tx-17">
                Wolfsberg AK - Rheindorf Altach
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end match -->

      <!-- start about -->
      <section class="match" id="about">
        <div class="container">
          <div class="match__head">
            <h2 class="match__title tt-64-36">
              Über uns
            </h2>
            <div class="match__texts">
              <p class="match__text tx-17">
                Unser Ziel ist es, eine komfortable Umgebung für alle Sportbegeisterten zu schaffen. Bei uns können Sie
                Live-Übertragungen der wichtigsten Spiele und Wettbewerbe auf großen Bildschirmen genießen. Dank
                moderner Ausrüstung und hochwertiger Technik stehen Sie im Mittelpunkt des Geschehens und verpassen
                keine Details des Spiels.
              </p>
            </div>
          </div>
          <ul class="about-images">
            <li class="about-images__image box-shadow rd-upload">
              <img src="." data-rd-image="./img/about-1.webp" width="336" height="336" alt="Über uns">
            </li>
            <li class="about-images__image box-shadow rd-upload">
              <img src="." data-rd-image="./img/about-2.webp" width="336" height="336" alt="Über uns">
            </li>
          </ul>
        </div>
      </section>
      <!-- end about -->

      <!-- start wetter -->
      <section class="match" id="wetter">
        <div class="container">
          <div class="match__head">
            <h2 class="match__title tt-64-36">
              Wettbewerbe
            </h2>
          </div>
          <ul class="wetter">
            <li class="wetter__item">
              <div class="wetter__texts">
                <p class="wetter__text tx-17">
                  In unserer Sportbar veranstalten wir regelmäßig Tischfußball- und Airhockey-Wettbewerbe. Wenn Sie Ihre
                  Fähigkeiten entwickeln und die Aufregung des Wettkampfspiels erleben möchten, freut sich unser Team,
                  Sie bei unseren Turnieren willkommen zu heißen. Vielleicht werden Sie hier die lang ersehnten
                  Emotionen spüren.
                </p>
              </div>
              <div class="wetter__image box-shadow rd-upload">
                <img src="." data-rd-image="./img/wetter-1.webp" width="336" height="336" alt="Wettbewerbe">
              </div>
            </li>
            <li class="wetter__item">
              <div class="wetter__texts">
                <p class="wetter__text tx-17">
                  Kommen Sie in die Sportbar in Österreich und spüren Sie den Geist der Aufregung in Gesellschaft
                  Gleichgesinnter! Wir freuen uns, Sie bei uns zu Gast zu sehen!
                </p>
              </div>
              <div class="wetter__image box-shadow rd-upload">
                <img src="." data-rd-image="./img/wetter-2.webp" width="336" height="336" alt="Wettbewerbe">
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end wetter -->

      <!-- start slots -->
      <section class="match">
        <div class="container">
          <div class="match__head">
            <h2 class="match__title tt-64-36">
              Unterhaltungen
            </h2>
            <div class="match__texts">
              <p class="match__text tx-17">
                Die Sportbar in Österreich freut sich, Ihren Gästen die Möglichkeit zu bieten, die Aufregung und
                Aufregung in unserem völlig legalen Spielzimmer zu erleben. Hier finden Sie alles, was die lang
                ersehnten Empfindungen liefern kann. Um jedoch die Sicherheit und den Komfort unserer Kunden zu
                gewährleisten, bieten wir keine Möglichkeit, echtes Geld zu gewinnen. Unser Team kümmert sich um jeden
                Gast und garantiert Schutz und Unterstützung. Wir ermutigen unsere Kunden, mit Bedacht und Mäßigung zu
                spielen, damit das Spiel ein angenehmer Zeitvertreib bleibt, ohne echtes Geld zu verlieren. Wir warten
                auf Sie bei uns zu Gast!
              </p>
            </div>
          </div>
          <div class="match__solo-image box-shadow rd-upload">
            <img src="." data-rd-image="./img/slot-1.webp" width="336" height="336" alt="">
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