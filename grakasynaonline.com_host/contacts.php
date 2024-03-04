<!DOCTYPE html>
<html lang="pl">

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
      <!-- start contacts -->
      <section class="contacts rd-upload">
        <div class="container">
          <div class="contacts__top">
            <div class="contacts__top-left">
              <h1 class="contacts__title tt-53-36">
                Łączność
              </h1>
              <p class="contacts__text tx-22">
                Wypełnij formularz, a my skontaktujemy się z Tobą
              </p>
            </div>
            <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Nazwa" required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail" required>
              </div>
              <button class="form__button but" type="submit">
                Wysłać
              </button>
            </form>
          </div>
          <div class="contacts__bottom">
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  <img src="." data-rd-image="./img/svg/geo.svg" width="24" height="24" alt="Geo icon">
                  Jana Jerzego Haffnera 569, 81-712 Sopot, Polska
                </li>
              </ul>
            </address>
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2319.6001713617543!2d18.55817197720087!3d54.45234399139799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46fd0a85da9eadcf%3A0x114966ae6a446a8d!2sJana%20Jerzego%20Haffnera%2C%2081-712%20Sopot%2C%20Poland!5e0!3m2!1sen!2sen!4v1708400415319!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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