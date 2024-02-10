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
  <meta property="og:title" content="Luxe spa hotel in het hart van de stad - Hotel Royal & Spa">
  <meta property="og:site_name"
    content="Geniet van luxe en ontspanning in het Royal Hotel & Spa. Geniet van de voorzieningen, het heerlijke eten en de sfeer van de Spelen. Perfect voor een onvergetelijke vakantie.">
  <meta property="og:url" content="https://nederlandse-spellenlijst.com/">
  <meta property="og:image" content="https://nederlandse-spellenlijst.com/main.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Home">
  <meta property="og:image:type" content="image/png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Luxe spa hotel in het hart van de stad - Hotel Royal & Spa">
  <meta name="twitter:description"
    content="Geniet van luxe en ontspanning in het Royal Hotel & Spa. Geniet van de voorzieningen, het heerlijke eten en de sfeer van de Spelen. Perfect voor een onvergetelijke vakantie.">
  <meta name="twitter:site" content="https://nederlandse-spellenlijst.com/">
  <meta name="twitter:image" content="https://nederlandse-spellenlijst.com/main.png">
  <meta name="description"
    content="Geniet van luxe en ontspanning in het Royal Hotel & Spa. Geniet van de voorzieningen, het heerlijke eten en de sfeer van de Spelen. Perfect voor een onvergetelijke vakantie.">
  <title>Luxe spa hotel in het hart van de stad - Hotel Royal & Spa</title>
  <link rel="canonical" href="https://nederlandse-spellenlijst.com/">
  <link rel="icon" href="favicon.png" type="image/png">
  <link rel="preload" href="./fonts/Jost-SemiBold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Play-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Play-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
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
              <input class="form__input input" type="email" name="email" id="email" placeholder="Mail..." required>
            </div>
            <button class="form__button but" type="submit">
              Versturen
            </button>
          </form>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39298.39658963132!2d4.360495945503751!3d52.00414845251453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5ca128ecb54df%3A0x933c02f02e6e8a02!2sDelfgauw%2C%20Netherlands!5e0!3m2!1sen!2sen!4v1707471850579!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <p class="contacts__text tx-17">
                Poortweg 6, 2612 PA Delft
              </p>
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