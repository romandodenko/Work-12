 <!DOCTYPE html>
 <html lang="pl">

 <?php
  include 'head.php';
?>

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
                     Przemysłowa 1, 09-400 Płock
                   </li>
                 </ul>
               </address>
             </div>
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1361.45588046024!2d19.692370328602358!3d52.55444407867772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471c7a785675e1ff%3A0x3980d85bb79b2891!2sPrzemys%C5%82owa%201%2C%2009-400%20P%C5%82ock%2C%20Poland!5e0!3m2!1sen!2sen!4v1708403173370!5m2!1sen!2sen"
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