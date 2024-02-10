 <!DOCTYPE html>
 <html lang="pl">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta name="description"
     content="InterContinental Warszawa, usytuowany w samym sercu dynamicznej stolicy Polski, stanowi ikoniczny symbol luksusu i wyrafinowania. Jako wyróżniający się członek grupy hotelowej IHG, to pięciogwiazdkowe miejsce doskonale łączy w sobie nowoczesną elegancję z tradycyjnym polskim urokiem, oferując niezapomniane doświadczenie zarówno dla podróżnych biznesowych, jak i turystów.">
   <title>InterContinental Warszawa - wspaniałe wakacje w bezpiecznym i ocenionym hotelu</title>
   <link rel="icon" href="favicon.png" type="image/png">
   <link rel="preload" href="./fonts/RobotoBold.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/RobotoRegular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="stylesheet" href="./css/main-min.css">
   <script defer src="./js/main.js"></script>
 </head>

 <body>
   <div class="page">
    <?php
    include 'header.php';
    ?>
     <main>
       <section class="contacts">
         <div class="container">
           <h1 class="contacts__title tt-38-28">
             Łączność
           </h1>
           <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
             <div class="form__inputs">
               <input class="form__input input" type="text" name="text" id="text" placeholder="Nazwa..." required>
               <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail..." required>
             </div>
             <button class="form__button but" type="submit">
               Wysłać
             </button>
           </form>
           <div class="contacts__map">
             <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.6057260549483!2d20.999997877102214!3d52.23238065748363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ecc8c15884f1d%3A0xd3f60b36b18c923!2sEmilii%20Plater%2049%2C%2000-125%20Warszawa%2C%20Poland!5e0!3m2!1sen!2sen!4v1707137042234!5m2!1sen!2sen"
               width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
               referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
           <address class="contacts__address">
             <ul class="contacts__list">
               <li class="contacts__item tx-17-14">
                 Emilii Plater 49, 00-125 Warszawa
               </li>
               <li class="contacts__item tx-17-14">
                 <a href="tel:+48223288888">
                   +48 22 328 8888
                 </a>
               </li>
               <li class="contacts__item tx-17-14">
                 <a href="mailto:polskiekasyna-pl@gmail.com">
                  polskiekasyna-pl@gmail.com
                 </a>
               </li>
             </ul>
           </address>
         </div>
       </section>
     </main>
     <?php
     include 'footer.php';
     ?>
   </div>
 </body>

 </html>