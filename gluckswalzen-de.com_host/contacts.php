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
      <section class="contacts contacts_padding">
        <div class="container">
          <h1 class="contacts__title tt-53-28">
            Kontakte
          </h1>
          <p class="contacts__text tx-22">
            Bewerten Sie Ihren Namen und Ihre Meinung
          </p>
          <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
            <div class="form__inputs">
              <input class="form__input input" type="text" name="text" id="text" placeholder="Imia..." required>
              <input class="form__input input" type="email" name="email" id="email" placeholder="Email..." required>
            </div>
            <button class="form__button but" type="submit">
              Schicken
            </button>
          </form>
        </div>
      </section>
      <!-- end contacts -->

      <!-- start contacts -->
      <section class="contacts contacts_background">
        <div class="container">
          <h2 class="visually-hidden">
            Hidden title
          </h2>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2369.5662035889495!2d9.995273877161116!3d53.56551085830177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b18f269da6d075%3A0x4dce17e8fd74a9a9!2sFontenay%2010%2C%2020354%20Hamburg%2C%20Germany!5e0!3m2!1sen!2sen!4v1708488808037!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  <span>
                    Adresse
                  </span>
                  Fontenay 10, 20354 Hamburg, Deutschland
                </li>
                <li class="contacts__info-item tx-17">
                  <span>
                    Telefon
                  </span>
                  <a href="tel:+494060566050">
                    +494060566050
                  </a>
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