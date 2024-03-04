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
            <img src="." data-rd-image="./img/game-3.webp" width="336" height="336" alt="Fortnite">
          </div>
          <h1 class="play__title tt-52-34">
            Fortnite
          </h1>
          <div class="play__texts">
            <p class="play__text tx-16-14">
              Fortnite, her yaştan oyuncu arasında popüler olan sıcak oyunlardan biridir. Epic Games'in bu
              çok oyunculu nişancı oyunu, oyuncuların ayakta kalan son kişi olmak için birbirleriyle
              yarıştığı renkli bir dünyada heyecan verici bir hayatta kalma mücadelesi sunuyor.
            </p>
            <p class="play__text tx-16-14">
              Eşsiz bina mekaniği sayesinde oyuncular, diğer oyunculara karşı mücadelede hayatta kalmak için
              siper, tuzak ve engeller yaratabilirler. Hızlı ve dinamik savaşlar, Fortnite'ı sıkılmanıza
              izin vermeyecek heyecan verici oyunlardan biri haline getiriyor.
            </p>
            <p class="play__text tx-16-14">
              Fortnite sadece çok popüler değil, aynı zamanda oyuncular ve eleştirmenler arasında da yüksek
              puanlara sahip. Düzenli güncellemeler, yeni sezonlar ve etkinlikler, oyunu gerçekten heyecan
              verici ve izleyicileri için alakalı hale getiriyor.
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
                <img src="." data-rd-image="./img/game-4.webp" width="336" height="336" alt="League of Legends">
              </div>
              <div class="games__descr">
                <a class="games__name tx-24-18" href="game-4.php">
                  League of Legends
                </a>
                <a class="games__button but" href="game-4.php">
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