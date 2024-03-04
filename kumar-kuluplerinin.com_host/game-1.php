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
            <img src="." data-rd-image="./img/game-1.webp" width="336" height="336" alt="The Witcher 3: Wild Hunt">
          </div>
          <h1 class="play__title tt-52-34">
            The Witcher 3: Wild Hunt
          </h1>
          <div class="play__texts">
            <p class="play__text tx-16-14">
              The Witcher 3: Wild Hunt, tüm zamanların en iyi dereceli oyunlarından biridir. Bu, oyuncuyu tehlikeler ve
              gizemlerle dolu muhteşem bir fantastik dünyaya sürükleyen heyecan verici bir maceradır.
            </p>
            <p class="play__text tx-16-14">
              Canavarlarla hararetli savaşlar, zor seçimler ve ahlaki ikilemler, oyunu heyecanlı ve öngörülemez hale
              getiriyor. Oyuncular devasa bir açık dünyayı keşfedebilir, ilginç karakterlerle tanışabilir ve heyecan
              verici görevlere katılabilirler.
            </p>
            <p class="play__text tx-16-14">
              İnanılmaz derecede ayrıntılı grafikler, sürükleyici bir hikaye ve bağımlılık yaratan oynanış, The Witcher
              3: Wild Hunt'ı bitirdikten sonra unutamayacağınız oyunlardan biri haline getiriyor.
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