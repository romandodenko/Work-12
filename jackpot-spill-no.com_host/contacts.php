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
  <meta property="og:title" content="Lysebu i Norge har med rette fått høy karakter for sin tjeneste">
  <meta property="og:site_name"
    content="Lysebu Hotel er et av de beste hotellene i Norge, hvor hver detalj er gjennomtenkt til minste detalj. Dette hotellet legemliggjør komforten og luksusen til en ny generasjon.">
  <meta property="og:url" content="https://jackpot-spill-no.com/">
  <meta property="og:image" content="https://jackpot-spill-no.com/main.png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Home">
  <meta property="og:image:type" content="image/png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Lysebu i Norge har med rette fått høy karakter for sin tjeneste">
  <meta name="twitter:description"
    content="Lysebu Hotel er et av de beste hotellene i Norge, hvor hver detalj er gjennomtenkt til minste detalj. Dette hotellet legemliggjør komforten og luksusen til en ny generasjon.">
  <meta name="twitter:site" content="https://jackpot-spill-no.com/">
  <meta name="twitter:image" content="https://jackpot-spill-no.com/main.png">
  <meta name="description"
    content="Lysebu Hotel er et av de beste hotellene i Norge, hvor hver detalj er gjennomtenkt til minste detalj. Dette hotellet legemliggjør komforten og luksusen til en ny generasjon.">
  <title>Lysebu i Norge har med rette fått høy karakter for sin tjeneste</title>
  <link rel="canonical" href="https://jackpot-spill-no.com/">
  <link rel="icon" href="favicon.png" type="image/png">
  <link rel="preload" href="./fonts/Merriweather-Black.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Poppins-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
      <!-- start hero -->
      <section class="hero hero_contacts">
        <div class="hero__container hero__container_slots hero__container_contacts container">
          <div class="hero__left hero__left_contacts">
            <h1 class="hero__title hero__title_slots tt-64-40">
              Kontakter
            </h1>
            <div class="hero__texts hero__texts_slots">
              <p class="hero__text tx-23">
                Fyll ut skjemaet og vi kontakter deg
              </p>
            </div>
            <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Navn..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="E-post..." required>
              </div>
              <button class="form__button but but_white" type="submit">
                Å styre
              </button>
            </form>
          </div>
          <div class="hero__image hero__image_contacts rd-upload">
            <img src="." data-rd-image="./img/contacts.webp" width="336" height="336" alt="Kontakter">
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start contacts -->
      <section class="contacts rd-upload">
        <h2 class="visually-hidden">
          Hidden title
        </h2>
        <div class="contacts__container container">
          <div class="contacts__map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1996.2486278844901!2d10.653287377460359!3d59.97778635894669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4641728ff741dff7%3A0xfe89e83438403ab9!2sLysebuveien%2014%2C%200790%20Oslo%2C%20Norway!5e0!3m2!1sen!2sen!4v1707739002788!5m2!1sen!2sen"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <address class="contacts__address">
            <ul class="contacts__info">
              <li class="contacts__info-item tx-23">
                <img src="." data-rd-image="./img/svg/phone.svg" width="24" height="24" alt="Icon phone">
                <a href="tel:+4721511000">+4721511000</a>
              </li>
              <li class="contacts__info-item tx-23">
                <img src="." data-rd-image="./img/svg/geo.svg" width="24" height="24" alt="Icon geo">
                Lysebuveien 14, 0790 Oslo, Norge
              </li>
            </ul>
          </address>
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