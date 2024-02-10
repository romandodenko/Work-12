 <!DOCTYPE html>
 <html lang="pl">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta name="language" content="Polish">
   <meta name="robots" content="index, follow">
   <meta property="og:locale" content="pl_PL">
   <meta property="og:title" content="Airport Hotel Okęcie wspaniałe wakacje i oceniane gry dla każdego">
   <meta property="og:site_name"
     content="Airport Hotel Okęcie w Polsce to jedno z najlepszych miejsc na pobyt. Jest wyposażony we wszystkie udogodnienia, które sprawią, że Twój pobyt będzie jak najbardziej komfortowy.">
   <meta property="og:url" content="https://najlepszy-jackpotklub.com/">
   <meta property="og:image" content="https://najlepszy-jackpotklub.com/main.png">
   <meta property="og:image:width" content="1200">
   <meta property="og:image:height" content="630">
   <meta property="og:image:alt" content="Home">
   <meta property="og:image:type" content="image/png">
   <meta name="twitter:card" content="summary_large_image">
   <meta name="twitter:title" content="Airport Hotel Okęcie wspaniałe wakacje i oceniane gry dla każdego">
   <meta name="twitter:description"
     content="Airport Hotel Okęcie w Polsce to jedno z najlepszych miejsc na pobyt. Jest wyposażony we wszystkie udogodnienia, które sprawią, że Twój pobyt będzie jak najbardziej komfortowy.">
   <meta name="twitter:site" content="https://najlepszy-jackpotklub.com/">
   <meta name="twitter:image" content="https://najlepszy-jackpotklub.com/main.png">
   <meta name="description"
     content="Airport Hotel Okęcie w Polsce to jedno z najlepszych miejsc na pobyt. Jest wyposażony we wszystkie udogodnienia, które sprawią, że Twój pobyt będzie jak najbardziej komfortowy.">
   <title>Airport Hotel Okęcie wspaniałe wakacje i oceniane gry dla każdego</title>
   <link rel="canonical" href="https://najlepszy-jackpotklub.com/">
   <link rel="icon" href="favicon.png" type="image/png">
   <link rel="preload" href="./fonts/MavenPro-Bold.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/MavenPro-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
       <section class="contacts">
         <div class="container">
           <h1 class="contacts__title tt-42-30">
             Łączność
           </h1>
           <div class="contacts__content">
             <div class="contacts__left">
               <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Nazwa" required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail" required>
                 </div>
                 <button class="form__button but" type="submit">
                   Wysłać
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item tx-16-14">
                     Komitetu Obrony Robotników 24, 02-148 Warszawa
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="tel:+48224568012">
                       + 48 22 456 80 12
                     </a>
                   </li>
                 </ul>
               </address>
             </div>
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2446.584775954219!2d20.980133377099843!3d52.17824246147541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4719333d1ecbd5d9%3A0x616be0ba6971ca8e!2sKomitetu%20Obrony%20Robotnik%C3%B3w%2024%2C%2002-148%20Warszawa%2C%20Poland!5e0!3m2!1sen!2sen!4v1707463924582!5m2!1sen!2sen"
                 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                 referrerpolicy="no-referrer-when-downgrade"></iframe>
             </div>
           </div>
         </div>
       </section>
     </main>
     <!-- start footer -->
     <?php
     include 'footer.php';
     ?>
     <!-- end footer -->
   </div>
 </body>

 </html>