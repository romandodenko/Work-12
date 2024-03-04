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
      <!-- start play -->
      <section class="play">
        <div class="container">
          <div class="play__image rd-upload">
            <img src="." data-rd-image="./img/game-4.webp" width="336" height="336" alt="League of Legends">
          </div>
          <h1 class="play__title tt-52-34">
            League of Legends
          </h1>
          <div class="play__texts">
            <p class="play__text tx-16-14">
              League of Legends, birçok oyun platformunun sıralamasında üst sıralarda yer alan, popüler ve popüler
              çevrimiçi oyunlardan biridir. Bu çok oyunculu MOBA (Çok Oyunculu Çevrimiçi Savaş Arenası) oyunu,
              oyuncuların takıma karşı takım olarak savaştığı hızlı tempolu ve taktiksel bir savaş sunuyor.
            </p>
            <p class="play__text tx-16-14">
              League of Legends, her biri kendine özgü yeteneklere ve oyun tarzına sahip, şampiyon adı verilen zengin
              bir karakter yelpazesi sunuyor. Sürekli güncellemeler ve dengelemeler sayesinde oyun, türünün en iyi ve en
              ilgi çekici oyunlarından biri olmaya devam ediyor.
            </p>
            <p class="play__text tx-16-14">
              Rekabetçi ruh, takım oyunu ve stratejik becerileri sergileme fırsatı, League of Legends'ı dünyanın en
              popüler çevrimiçi oyunlarından biri haline getiriyor. İster yeni başlayan ister deneyimli bir oyuncu olun,
              bu oyunda sizin için bir şeyler var ve kendinizi savaşlar ve maceralarla dolu heyecan verici bir dünyaya
              kaptırabileceksiniz.
            </p>
          </div>
        </div>
      </section>
      <!-- end play -->

      <!-- start games -->
      <section class="games">
        <div class="container">
          <h2 class="games__title tt-52-34">
            Hoşuna gidecek
          </h2>
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image rd-upload">
                <img src="." data-rd-image="./img/game-1.webp" width="336" height="336" alt="The Witcher 3: Wild Hunt">
              </div>
              <div class="games__descr">
                <a class="games__name tx-24-18" href="game-1.php">
                  The Witcher 3: Wild Hunt
                </a>
                <a class="games__button but" href="game-1.php">
                  Daha fazla detay
                </a>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image rd-upload">
                <img src="." data-rd-image="./img/game-2.webp" width="336" height="336" alt="Grand Theft Auto V">
              </div>
              <div class="games__descr">
                <a class="games__name tx-24-18" href="game-2.php">
                  Grand Theft Auto V
                </a>
                <a class="games__button but" href="game-2.php">
                  Daha fazla detay
                </a>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image rd-upload">
                <img src="." data-rd-image="./img/game-3.webp" width="336" height="336" alt="Fortnite">
              </div>
              <div class="games__descr">
                <a class="games__name tx-24-18" href="game-3.php">
                  Fortnite
                </a>
                <a class="games__button but" href="game-3.php">
                  Daha fazla detay
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- ene games -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>