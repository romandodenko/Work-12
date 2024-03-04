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
             Contacts
           </h1>
           <div class="contacts__content">
             <div class="contacts__left">
               <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Nom..." required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail..."
                     required>
                 </div>
                 <button class="form__button but" type="submit">
                   Envoyer
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item tx-16-14">
                     28 Rue du Moulin de la Pointe, 75013 Paris
                   </li>
                 </ul>
               </address>
             </div>
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d552.2210429959357!2d2.356382055062934!3d48.82348099558319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67185ad6d7a29%3A0x40e0ed71b018ea3b!2s28%20Rue%20du%20Moulin%20de%20la%20Pointe%2C%2075013%20Paris%2C%20France!5e0!3m2!1sen!2sen!4v1709091535804!5m2!1sen!2sen"
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