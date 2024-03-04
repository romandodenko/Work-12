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
      <section class="contacts rd-upload">
        <div class="container">
          <h1 class="contacts__title tt-53-34">
            Kontakte
          </h1>
          <p class="contacts__text tx-22">
            Füllen Sie das Formular aus und wir rufen Sie zurück, um mit Ihnen Kontakt aufzunehmen
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
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2770.558267026007!2d7.748828476844223!3d46.02000849618226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478f35de306adabb%3A0x31d05f5a33ae1bde!2sRiedweg%2016%2C%203920%20Zermatt%2C%20Switzerland!5e0!3m2!1sen!2sen!4v1707968237384!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  <span>
                    Telefon
                  </span>
                  <a href="tel:+41279656212">
                    +41279656212
                  </a>
                </li>
                <li class="contacts__info-item tx-17">
                  <span>
                    Adresse
                  </span>
                  Riedweg 16, 3920 Zermatt, Schweiz
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