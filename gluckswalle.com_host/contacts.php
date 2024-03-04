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
      <!-- start contacts -->
      <section class="contacts">
        <div class="container">
          <h1 class="contacts__title tt-53-36">
            Kontakte
          </h1>
          <p class="contacts__text tx-23">
            Füllen Sie das Formular aus und wir werden uns mit Ihnen in Verbindung setzen
          </p>
          <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
            <div class="form__inputs">
              <input class="form__input input" type="text" name="text" id="text" placeholder="Name..." required>
              <input class="form__input input" type="email" name="email" id="email" placeholder="Email..." required>
            </div>
            <button class="form__button but" type="submit">
              Schicken
            </button>
          </form>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2702.1831882836364!2d8.530907276897885!3d47.369343004330446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47900a02489589d1%3A0x151f431fd403ae01!2sStockerstrasse%2061%2C%208001%20Z%C3%BCrich%2C%20Switzerland!5e0!3m2!1sen!2sen!4v1708316146900!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-18 rd-upload">
                  <img src="." data-rd-image="./img/svg/phone.svg" width="24" height="24" alt="Icon phone">
                  <a href="tel:+4317997968">
                    +4317997968
                  </a>
                </li>
                <li class="contacts__info-item tx-18 rd-upload">
                  <img src="." data-rd-image="./img/svg/geo.svg" width="24" height="24" alt="Icon geo">
                  Stockerstrasse 61, 8002 Zürich, Schweiz
                </li>
              </ul>
            </address>
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