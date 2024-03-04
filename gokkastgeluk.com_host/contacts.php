 <!DOCTYPE html>
 
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
             Contacten
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
           <address class="contacts__address">
             <ul class="contacts__list">
               <li class="contacts__item tx-16-14">
                 Eerste Jan Steenstraat 22, 1072 NK Amsterdam
               </li>
             </ul>
           </address>
           <div class="contacts__map box-shadow">
             <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d745.7361812985241!2d4.887678524869397!3d52.3533778628011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609f3b5a482dd%3A0xe0830858e39f39e6!2sEerste%20Jan%20Steenstraat%2022%2C%201072%20NK%20Amsterdam%2C%20Netherlands!5e0!3m2!1sen!2sen!4v1708572307347!5m2!1sen!2sen"
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