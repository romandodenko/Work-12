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
            <img src="." data-rd-image="./img/game-2.webp" width="336" height="336" alt="Grand Theft Auto V">
          </div>
          <h1 class="play__title tt-52-34">
            Grand Theft Auto V
          </h1>
          <div class="play__texts">
            <p class="play__text tx-16-14">
              Grand Theft Auto V, dünya çapında reytinglerde üst sıralarda yer alan en iyi oyunlardan biridir.
              Rockstar Games'in bu çarpıcı aksiyon gerilim filmi, oyuncuları hareket özgürlüğünün ve neredeyse her
              şeyi yapma yeteneğinin olduğu canlı ve tamamen açık bir dünyaya taşıyor.
            </p>
            <p class="play__text tx-16-14">
              Sıcak araba kovalamacaları, heyecan verici atışlar ve ilgi çekici bir olay örgüsü, Grand Theft Auto
              V'i sizi Los Santos'un suç dünyasının atmosferine sürükleyecek heyecan verici bir oyun haline
              getiriyor. Oyunda her birinin kendine özgü hikayesi ve becerileri olan üç ana karakter bulunuyor.
            </p>
            <p class="play__text tx-16-14">
              Çeşitli görevler, karakter özelleştirmeleri ve devasa oyun dünyası ile Grand Theft Auto V,
              oyunculara sonsuz eğlence sunuyor. İster suç yolunu seçin ister imparatorluğunuzu yükseltmeye
              çalışın, bu oyun uzun süre ilginizi çekebilecek.
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