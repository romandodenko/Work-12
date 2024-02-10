<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta name="language" content="Spanish">
  <meta name="robots" content="index, follow">
  <meta property="og:locale" content="es_ES">
  <meta property="og:title" content="El hotel Relais & Châteaux Heritage en España es el epítome del lujo.">
  <meta property="og:site_name"
    content="Apartamentos nuevos, diseño exquisito, la personificación de la elegancia. Nuestro hotel ha ganado numerosos premios y está altamente calificado, lo que demuestra una calidad inigualable.">
  <meta property="og:url" content="https://apuestamaquinas.com/">
  <meta property="og:image" content="https://apuestamaquinas.com/main.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Home">
  <meta property="og:image:type" content="image/png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="El hotel Relais & Châteaux Heritage en España es el epítome del lujo.">
  <meta name="twitter:description"
    content="Apartamentos nuevos, diseño exquisito, la personificación de la elegancia. Nuestro hotel ha ganado numerosos premios y está altamente calificado, lo que demuestra una calidad inigualable.">
  <meta name="twitter:site" content="https://apuestamaquinas.com/">
  <meta name="twitter:image" content="https://apuestamaquinas.com/main.png">
  <meta name="description"
    content="Apartamentos nuevos, diseño exquisito, la personificación de la elegancia. Nuestro hotel ha ganado numerosos premios y está altamente calificado, lo que demuestra una calidad inigualable.">
  <title>El hotel Relais & Châteaux Heritage en España es el epítome del lujo.</title>
  <link rel="canonical" href="https://apuestamaquinas.com/">
  <link rel="icon" href="favicon.png" type="image/png">
  <link rel="preload" href="./fonts/HelveticaNeue-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Montserrat-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./resources/swiper/swiper.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <script src="./resources/swiper/swiper.js"></script>
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
            <h1 class="contacts__title tt-53-28">
              Contactos
            </h1>
            <div class="contacts__texts">
              <p class="contacts__text tx-17">
                Completa el formulario. Contacta con nosotros y te contaremos todo sobre nuestro hotel.
              </p>
            </div>
          </div>
          <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
            <div class="form__inputs">
              <label class="form__label" for="text">
                <span class="tx-17">
                  Introduzca su nombre
                </span>
                <input class="form__input input" type="text" name="text" id="text" required>
              </label>
              <label class="form__label" for="email">
                <span class="tx-17">
                  Introduce tu correo electrónico
                </span>
                <input class="form__input input" type="email" name="email" id="email" required>
              </label>
            </div>
            <button class="form__button but" type="submit">
              Enviar
            </button>
          </form>
          <div class="contacts__bottom">
            <h2 class="contacts__subtitle tt-53-28">
              Mapa
            </h2>
            <div class="contacts__bottom-item">
              <div class="contacts__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.8219799580183!2d-3.68155732336268!3d40.434940654529925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228c0eb115e13%3A0x9dd54173384de7cd!2sCalle%20de%20Diego%20de%20Le%C3%B3n%2C%2043%2C%20Salamanca%2C%2028006%20Madrid%2C%20Spain!5e0!3m2!1sen!2en!4v1707193477124!5m2!1sen!2en" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <address class="contacts__address">
                <ul class="contacts__info">
                  <li class="contacts__info-item tx-17">
                    <span class="tx-22">DIRECCIÓN</span>
                    Calle de Diego de León, 43, Salamanca, 28006 Madrid, España
                  </li>
                </ul>
              </address>
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