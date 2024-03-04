 <!DOCTYPE html>
 <html lang="de">

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
             Kontakte
           </h1>
           <div class="contacts__content">
             <div class="contacts__left">
               <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Name" required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="Email" required>
                 </div>
                 <button class="form__button but" type="submit">
                   Schicken
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item tx-16-14">
                     Dorfstraße 18, 8942 Wörschach
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="tel:+43368222222">
                       +43368222222
                     </a>
                   </li>
                 </ul>
               </address>
             </div>
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d388.90640332640305!2d14.144652476234548!3d47.55024250290405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47716d6d41504e2f%3A0xf86e328556212a0a!2sDorfstra%C3%9Fe%2018%2C%208942%20W%C3%B6rschach%2C%20Austria!5e0!3m2!1sen!2sen!4v1708051437614!5m2!1sen!2sen"
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