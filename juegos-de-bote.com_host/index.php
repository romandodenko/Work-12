<!DOCTYPE html>
<html lang="es">

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
      <!-- start hero -->
      <section class="hero rd-upload rd-background" data-rd-image="./img/hero.webp">
        <div class="hero__container container">
          <div class="hero__descr">
            <h1 class="hero__title tt-64-36">
              Hotel Casa Fuster G.L Monumento
            </h1>
            <p class="hero__text tx-20">
              Aquí cada detalle es creado para su descanso ideal
            </p>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title tt-53-36">
            Sobre nosotros
          </h2>
          <div class="about__texts">
            <p class="about__text tx-20">
              El hotel Casa Fuster G. l Monumento de Barcelona es un establecimiento nuevo y moderno que ofrece a sus
              huéspedes una estancia confortable. Ubicado en un entorno pintoresco, el hotel se esfuerza por ser el
              mejor en su campo, ofreciendo a los huéspedes servicios e instalaciones de primera clase. Nos
              enorgullecemos de nuestras lujosas habitaciones, un excelente Servicio y un estilo arquitectónico único
              que encarna el espíritu del modernismo Catalán. En nuestro hotel podrá disfrutar del lujo, la comodidad y
              una hospitalidad inolvidable. Bienvenido al hotel Casa Fuster G. l Monumento!
            </p>
          </div>
          <ul class="about__images">
            <li class="about__image rd-upload">
              <img src="." data-rd-image="./img/about-1.webp" width="336" height="336" alt="Sobre nosotros">
            </li>
            <li class="about__image rd-upload">
              <img src="." data-rd-image="./img/about-2.webp" width="336" height="336" alt="Sobre nosotros">
            </li>
            <li class="about__image rd-upload">
              <img src="." data-rd-image="./img/about-3.webp" width="336" height="336" alt="Sobre nosotros">
            </li>
            <li class="about__image rd-upload">
              <img src="." data-rd-image="./img/about-4.webp" width="336" height="336" alt="Sobre nosotros">
            </li>
          </ul>
        </div>
      </section>
      <!-- end about -->

      <!-- start rest -->
      <section class="rest rd-upload" id="rest">
        <div class="rest__container container">
          <div class="rest__left">
            <h2 class="rest__title tt-53-36">
              Restaurantes
            </h2>
            <div class="rest__texts">
              <p class="rest__text tx-17">
                El hotel Casa Fuster G. l Monumento se complace en ofrecer a sus huéspedes una selección única de
                restaurantes y bares, donde podrán disfrutar de una excelente comida y relajarse en un ambiente
                acogedor.
              </p>
              <p class="rest__text tx-17">
                Aquí encontrará una amplia selección de platos catalanes e internacionales elaborados con ingredientes
                frescos y de alta calidad. Nuestro personal profesional hará todo lo posible para que cada comida sea un
                verdadero viaje gastronómico.
              </p>
            </div>
          </div>
          <div class="rest__image">
            <img src="." data-rd-image="./img/rest.webp" width="336" height="336" alt="Restaurantes">
          </div>
        </div>
      </section>
      <!-- end rest -->

      <!-- start desc -->
      <section class="about">
        <div class="container">
          <h2 class="about__title tt-53-36">
            Descanso
          </h2>
          <div class="about__texts">
            <p class="about__text tx-20">
              Entendemos la importancia de una variedad de actividades y ofrecemos el lugar perfecto para experimentar
              la emoción y disfrutar de sus vacaciones en el hotel. Nuestras Salas ofrecen una oportunidad única para
              disfrutar de una rica selección de juegos y entretenimiento. Además, también ofrecemos otras actividades
              en el hotel para ayudarlo a relajarse y pasar un buen rato. Tenemos un Spa donde puede relajarse y un
              gimnasio para mantenerse en forma. Nos esforzamos todo el tiempo para ofrecer a nuestros huéspedes una
              oportunidad personalizada de salida y alojamiento en el Hotel Casa Fuster G. l Monumento.
            </p>
          </div>
          <ul class="about__images about__images_desc">
            <li class="about__image about__image_1 rd-upload">
              <img src="." data-rd-image="./img/desc-1.webp" width="336" height="336" alt="Descanso">
            </li>
            <li class="about__image about__image_2 rd-upload">
              <img src="." data-rd-image="./img/desc-2.webp" width="336" height="336" alt="Descanso">
            </li>
          </ul>
        </div>
      </section>
      <!-- end desc -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>