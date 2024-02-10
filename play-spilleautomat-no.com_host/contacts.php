<!DOCTYPE html>
<html lang="no">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta name="language" content="Norwegian">
  <meta name="robots" content="index, follow">
  <meta property="og:locale" content="no_NO">
  <meta property="og:title" content="Hotel Continental er et elegant hotell med høyeste rangering.">
  <meta property="og:site_name"
    content="Den kombinerer klassisk sjarm med moderne bekvemmeligheter for å skape det perfekte tilfluktsstedet. Hotellet skiller seg ut for sin oppmerksomhet på detaljer og det høyeste servicenivået.">
  <meta property="og:url" content="https://play-spilleautomat-no.com/">
  <meta property="og:image" content="https://play-spilleautomat-no.com/main.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Home">
  <meta property="og:image:type" content="image/png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Hotel Continental er et elegant hotell med høyeste rangering.">
  <meta name="twitter:description"
    content="Den kombinerer klassisk sjarm med moderne bekvemmeligheter for å skape det perfekte tilfluktsstedet. Hotellet skiller seg ut for sin oppmerksomhet på detaljer og det høyeste servicenivået.">
  <meta name="twitter:site" content="https://play-spilleautomat-no.com/">
  <meta name="twitter:image" content="https://play-spilleautomat-no.com/main.png">
  <meta name="description"
    content="Den kombinerer klassisk sjarm med moderne bekvemmeligheter for å skape det perfekte tilfluktsstedet. Hotellet skiller seg ut for sin oppmerksomhet på detaljer og det høyeste servicenivået.">
  <title>Hotel Continental er et elegant hotell med høyeste rangering.</title>
  <link rel="canonical" href="https://play-spilleautomat-no.com/">
  <link rel="icon" href="favicon.png" type="image/png">
  <link rel="preload" href="./fonts/FrankRuhlLibre-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
</head>

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
          <div class="contacts__top">
            <h1 class="contacts__title tt-53-36">
              Kontakter
            </h1>
            <div class="contacts__text tx-23">
              Fyll ut skjemaet for å finne ut all detaljert informasjon om din reservasjon
            </div>
            <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Navn..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="E-post..." required>
              </div>
              <button class="form__button but" type="submit">
                Sende
              </button>
            </form>
          </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2000.0906673546356!2d10.729020096663124!3d59.91404259937389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46416e7dfacb4729%3A0x11db7eea0a3a83a3!2sHotel%20Continental%2C%20Oslo!5e0!3m2!1sen!2sen!4v1706845440006!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  <span>
                    Adresse
                  </span>
                  Stortingsgata 24/26, 0117 Oslo, Norge
                </li>
                <li class="contacts__info-item tx-17">
                  <span>
                    Telefon
                  </span>
                  <a href="tel:+4722824000">
                    +4722824000
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