 <!DOCTYPE html>
 <html lang="cs">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta name="language" content="Czech">
   <meta name="robots" content="index, follow">
   <meta property="og:locale" content="cs_CS">
   <meta property="og:title" content="Czech Inn Relaxujte a bavte se s hodnocenými hrami">
   <meta property="og:site_name"
     content="Happy hours každý večer od 18 do 20 hodin 25 Kč piva, pondělí filmový/kvízový večer, úterý Open Mic Night od 20 do 22 hodin, středa Ochutnávka piva od 20 do 21:30.">
   <meta property="og:url" content="https://nejlepsi-herniavtmoaty.com/">
   <meta property="og:image" content="https://nejlepsi-herniavtmoaty.com/main.png">
   <meta property="og:image:width" content="1200">
   <meta property="og:image:height" content="630">
   <meta property="og:image:alt" content="Home">
   <meta property="og:image:type" content="image/png">
   <meta name="twitter:card" content="summary_large_image">
   <meta name="twitter:title" content="Czech Inn Relaxujte a bavte se s hodnocenými hrami">
   <meta name="twitter:description"
     content="Happy hours každý večer od 18 do 20 hodin 25 Kč piva, pondělí filmový/kvízový večer, úterý Open Mic Night od 20 do 22 hodin, středa Ochutnávka piva od 20 do 21:30.">
   <meta name="twitter:site" content="https://nejlepsi-herniavtmoaty.com/">
   <meta name="twitter:image" content="https://nejlepsi-herniavtmoaty.com/main.png">
   <meta name="description"
     content="Happy hours každý večer od 18 do 20 hodin 25 Kč piva, pondělí filmový/kvízový večer, úterý Open Mic Night od 20 do 22 hodin, středa Ochutnávka piva od 20 do 21:30.">
   <title>Czech Inn Relaxujte a bavte se s hodnocenými hrami</title>
   <link rel="canonical" href="https://nejlepsi-herniavtmoaty.com/">
   <link rel="icon" href="favicon.png" type="image/png">
   <link rel="preload" href="./fonts/Poppins-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/ProtestStrike-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
             Kontakty
           </h1>
           <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
             <div class="form__inputs">
               <input class="form__input input" type="text" name="text" id="text" placeholder="Název:" required>
               <input class="form__input input" type="email" name="email" id="email" placeholder="E-mailem:" required>
             </div>
             <button class="form__button but" type="submit">
               Poslat
             </button>
           </form>
           <address class="contacts__address">
             <ul class="contacts__list">
               <li class="contacts__item tx-16-14">
                 Francouzská 240/76, 101 00 Praha 10-Vršovice, Czechia
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="tel:+420210011100">
                   +420210011100
                 </a>
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="mailto:nejlepsi-herniavtmoaty@gmail.com">
                   nejlepsi-herniavtmoaty@gmail.com
                 </a>
               </li>
             </ul>
           </address>
           <div class="contacts__map">
             <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.7715851789944!2d14.443859877009348!3d50.071839214551815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b948167d26feb%3A0x5859cad6621f172c!2sCzech%20Inn%2C%20Prague!5e0!3m2!1sen!2sen!4v1707125406858!5m2!1sen!2sen"
               width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
               referrerpolicy="no-referrer-when-downgrade"></iframe>
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