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

      <!-- start footer -->
      <section class="footer">
        <div class="footer__container container">
          <div class="footer__left">
            <h1 class="footer__title tt-53-36">
              Contact
            </h1>
            <address class="footer__address">
              <ul class="footer__info">
                <li class="footer__info-item tx-17 rd-upload">
                  <img src="." data-rd-image="./img/svg/mail.svg" width="24" height="24" alt="Icon mail">
                  <a href="mailto:jackpotjungle.nl@gmail.com">
                    jackpotjungle.nl@gmail.com
                  </a>
                </li>
                <li class="footer__info-item tx-17 rd-upload">
                  <img src="." data-rd-image="./img/svg/phone.svg" width="24" height="24" alt="Icon phone">
                  <a href="tel:+3120308498">
                    +3120308498
                  </a>
                </li>
                <li class="footer__info-item tx-17 rd-upload">
                  <img src="." data-rd-image="./img/svg/geo.svg" width="24" height="24" alt="Icon geo">
                  Schipholweg 275, 117 PK Badhoevedorp, Netherlands
                </li>
              </ul>
            </address>
            <div class="footer__bottom">
              <ul class="icons">
                <li class="icons__icon rd-upload">
                  <a href="#!">
                    <img src="." data-rd-image="./img/svg/inst.svg" width="52" height="52" alt="Icon instagramm">
                  </a>
                </li>
                <li class="icons__icon rd-upload">
                  <a href="#!">
                    <img src="." data-rd-image="./img/svg/tg.svg" width="52" height="52" alt="Icon telegram">
                  </a>
                </li>
              </ul>
              <div class="cookie">
                <p class="cookie__text tx-17">
                  "jackpotjungle-nl.com" - gebruikt cookies om de beste kwaliteit te garanderen. Als u op de website
                  blijft, gaat u akkoord met het gebruik van uw cookies door ons.
                </p>
                <div class="cookie__bottom">
                  <nav class="nav">
                    <ul class="nav__list nav__list_footer">
                      <li class="nav__item">
                        <a class="nav__link tx-17 tx-17_700" href="cookie.php">
                          Meer details
                        </a>
                      </li>
                      <li class="nav__item">
                        <a class="nav__link tx-17 tx-17_700" href="policy.php">
                          Privacybeleid
                        </a>
                      </li>
                    </ul>
                  </nav>
                  <div class="cookie__war rd-upload">
                    <img src="." data-rd-image="./img/svg/21+.svg" width="52" height="52" alt="Icon 21+">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer__map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2438.28110569183!2d4.780945894201732!3d52.32904627819033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e16b2f5909d3%3A0x6fdda18bcbd59798!2sSchipholweg%20275%2C%20117%2C%201171%20PK%20Badhoevedorp%2C%20Netherlands!5e0!3m2!1sen!2sen!4v1709173851311!5m2!1sen!2sen"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </section>
      <!-- end footer -->
    </main>
  </div>
</body>

</html>