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
           <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
             <div class="form__inputs">
               <input class="form__input input" type="text" name="text" id="text" placeholder="Name" required>
               <input class="form__input input" type="email" name="email" id="email" placeholder="Email" required>
             </div>
             <button class="form__button but" type="submit">
               Send
             </button>
           </form>
           <address class="contacts__address">
             <ul class="contacts__list">
               <li class="contacts__item tx-16-14">
                160 Flinders Parade, Sandgate QLD 4017, Australia
               </li>
             </ul>
           </address>
           <div class="contacts__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2980.913529740672!2d153.0685043566299!3d-27.315580201511125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b93e39bc1e52b15%3A0x88e351a408ca6453!2s160%20Flinders%20Parade%2C%20Sandgate%20QLD%204017%2C%20Australia!5e0!3m2!1sen!2sen!4v1709006142360!5m2!1sen!2sen" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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