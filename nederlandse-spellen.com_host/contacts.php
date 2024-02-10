<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta name="language" content="Dutch">
  <meta name="robots" content="index, follow">
  <meta property="og:locale" content="nl_NL">
  <meta property="og:title" content="Kimpton De Witt Amsterdam: Uitnodigende sfeer en comfort">
  <meta property="og:site_name"
    content="Kimpton De Witt Amsterdam Hotel ligt in het centrum van de stad. Wij bieden aangename kamers en uitstekend entertainment.">
  <meta property="og:url" content="https://nederlandse-spellen.com/">
  <meta property="og:image" content="https://nederlandse-spellen.com/main.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Home">
  <meta property="og:image:type" content="image/png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Kimpton De Witt Amsterdam: Uitnodigende sfeer en comfort">
  <meta name="twitter:description"
    content="Kimpton De Witt Amsterdam Hotel ligt in het centrum van de stad. Wij bieden aangename kamers en uitstekend entertainment.">
  <meta name="twitter:site" content="https://nederlandse-spellen.com/">
  <meta name="twitter:image" content="https://nederlandse-spellen.com/main.png">
  <meta name="description"
    content="Kimpton De Witt Amsterdam Hotel ligt in het centrum van de stad. Wij bieden aangename kamers en uitstekend entertainment.">
  <title>Kimpton De Witt Amsterdam: Uitnodigende sfeer en comfort</title>
  <link rel="canonical" href="https://nederlandse-spellen.com/">
  <link rel="icon" href="favicon.png" type="image/png">
  <link rel="preload" href="./fonts/RacingSansOne-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/RadioCanada-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./resources/swiper/swiper.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <script src="./resources/swiper/swiper.js"></script>
  <script defer src="./js/main.js"></script>
</head>

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
          <h1 class="contacts__title tt-64-36">
            Contact
          </h1>
          <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
            <div class="form__inputs">
              <input class="form__input input" type="text" name="text" id="text" placeholder="Naam..." required>
              <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail..." required>
            </div>
            <button class="form__button but" type="submit">
              Versturen
            </button>
          </form>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.6261110265305!2d4.892969077108533!3d52.377199246791726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c807dd5b19%3A0x85760f98c0c4eb03!2sKimpton%20De%20Witt!5e0!3m2!1sen!2sen!4v1707385441540!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__list">
                <li class="contacts__item tx-17">
                  Nieuwezijds Voorburgwal 5, 1012 RC Amsterdam
                </li>
                <li class="contacts__item tx-17">
                  <a href="tel:+31206200500">
                    +31206200500
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