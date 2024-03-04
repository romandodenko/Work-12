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
      <!-- start hero -->
      <section class="hero rd-upload rd-background" data-rd-image="./img/hero.webp">
        <div class="hero__container container">
          <h1 class="hero__title tt-52-34">
            Sport Bar et machines à sous
          </h1>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title tt-42-30">
            À propos de nous
          </h2>
          <div class="about__texts">
            <p class="about__text tx-16-14">
              Le Long Hop & Machines à sous est un bar sportif situé au cœur de la France qui accueille ses clients dans
              une atmosphère chaleureuse et conviviale. Ce bar est l'endroit idéal pour les amateurs de sport et de bons
              moments, où vous pourrez profiter d'événements sportifs en direct, d'une cuisine délicieuse et d'une
              sélection variée de boissons.
            </p>
            <p class="about__text tx-16-14">
              L'intérieur du Long Hop allie une modernité élégante à une atmosphère chaleureuse. La salle spacieuse est
              décorée sur le thème du sport, avec des télévisions diffusant les événements sportifs les plus récents,
              des attributs d'équipe et des souvenirs sportifs sur les murs. Le mobilier confortable et le personnel
              amical créent un lieu agréable pour se détendre et se rencontrer.
            </p>
            <p class="about__text tx-16-14">
              L'un des avantages particuliers du Long Hop est son atmosphère. L'ambiance y est toujours conviviale et
              animée, et le personnel est heureux de créer un environnement agréable et accueillant pour chaque client.
              Le bar propose également une variété de divertissements tels que des quiz, de la musique live et des
              soirées à thème.
            </p>
            <p class="about__text tx-16-14">
              Le Long Hop se caractérise également par l'excellence de ses services et de ses installations pour les
              visiteurs. Le Wi-Fi gratuit, le parking pratique et les prix abordables en font un lieu attrayant pour les
              rencontres entre amis, les réunions de famille et les événements d'entreprise.
            </p>
            <p class="about__text tx-16-14">
              Dans l'ensemble, le Long Hop est l'endroit idéal pour ceux qui souhaitent profiter d'une ambiance de bar
              sportif, d'une cuisine et de boissons délicieuses, et d'un service de qualité. Que vous veniez pour
              regarder votre équipe préférée, passer du temps avec des amis ou simplement vous détendre après une
              journée de travail, vous trouverez toujours quelque chose pour vous ici.
            </p>
          </div>
          <ul class="about__images">
            <li class="about__image rd-upload">
              <img src="." data-rd-image="./img/about-1.webp" width="336" height="336" alt="À propos de nous">
            </li>
            <li class="about__image rd-upload">
              <img src="." data-rd-image="./img/about-2.webp" width="336" height="336" alt="À propos de nous">
            </li>
          </ul>
        </div>
      </section>
      <!-- end about -->

      <!-- start menu -->
      <section class="menu" id="menu">
        <div class="container">
          <h2 class="menu__title tt-42-30">
            Menu
          </h2>
          <div class="menu__item rd-upload rd-background" data-rd-image="./img/menu.webp">
            <div class="menu__texts">
              <p class="menu__text tx-24-18">
                Le menu du Long Hop plaira avec une variété de plats et de boissons. Vous pourrez y déguster des snacks
                classiques et des plats français, ainsi que différentes variantes de hamburgers, de sandwichs et de
                pizzas. La carte du bar comprend une large sélection de bières, de cocktails, de vins et d'autres
                boissons alcoolisées et non alcoolisées.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end menu -->

      <!-- start diff -->
      <section class="menu" id="diff">
        <div class="container">
          <h2 class="menu__title tt-42-30">
            Diffusions
          </h2>
          <div class="menu__item rd-upload rd-background" data-rd-image="./img/trans.webp">
            <div class="menu__texts">
              <p class="menu__text tx-24-18">
                Finale du championnat d'Europe de football. Une retransmission spéciale de la finale du championnat
                d'Europe de football a été organisée au Long Hop, où se sont rassemblés des supporters d'équipes de
                différents pays. Les spectateurs ont apprécié le match passionnant et l'atmosphère du bar tout en
                soutenant leurs footballeurs préférés.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end diff -->

      <!-- start slots -->
      <section class="about">
        <div class="container">
          <h2 class="about__title tt-42-30">
            Salle de jeux
          </h2>
          <div class="about__texts">
            <p class="about__text tx-16-14">
              Tournoi de machines à sous. Le Long Hop a accueilli un tournoi de machines à sous passionnant au cours
              duquel les participants se sont affrontés pour remporter des prix importants. Le bar avait été
              spécialement décoré pour l'occasion, créant une atmosphère d'excitation et de compétition. Les
              participants...
            </p>
          </div>
          <a class="about__link but" href="plays.php">
            Plus de détails
          </a>
          <ul class="about__images about__images_column">
            <li class="about__image rd-upload">
              <img src="." data-rd-image="./img/slot-1.webp" width="336" height="336" alt="Salle de jeux">
            </li>
          </ul>
        </div>
      </section>
      <!-- end slots -->

      <!-- start contacts -->
      <section class="contacts" id="contacts">
        <div class="container">
          <h2 class="contacts__title tt-42-30">
            Contacts
          </h2>
          <address class="contacts__address">
            <ul class="contacts__list">
              <li class="contacts__item tx-16-14">
                20 Rue du 8 Mai 1945, 18200 Saint-Amand-Montrond
              </li>
              <li class="contacts__item tx-16-14">
                <a href="tel:+33248605691">
                  +33248605691
                </a>
              </li>
            </ul>
          </address>
          <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
            <div class="form__inputs">
              <input class="form__input input" type="text" name="text" id="text" placeholder="Nom" required>
              <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail" required>
            </div>
            <button class="form__button but" type="submit">
              Envoyer
            </button>
          </form>
          <div class="contacts__map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d304.5348689905703!2d2.5009889796809466!3d46.73274509307192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fa7c6f7bd594cd%3A0x328714f770f00d30!2s20%20Rue%20du%208%20Mai%201945%2C%2018200%20Saint-Amand-Montrond%2C%20France!5e0!3m2!1sen!2sen!4v1709088829626!5m2!1sen!2sen"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
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