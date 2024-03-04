<!DOCTYPE html>
<?php
    include 'head.php';
    ?>

<body>
  <div class="page page_change">
    <!-- start header -->
    <?php
    include 'header.php';
    ?>
    <!-- end header -->
    <main>
      <!-- start play -->
      <section class="play">
        <div class="play__container container">
          <ul class="play__images">
            <li class="play__image box-shadow rd-upload">
              <img src="." data-rd-image="./img/game-1.webp" width="336" height="336" alt="Myth of Empires">
            </li>
            <li class="play__image box-shadow rd-upload">
              <img src="." data-rd-image="./img/game-1-1.webp" width="336" height="336" alt="Myth of Empires">
            </li>
            <li class="play__image box-shadow rd-upload">
              <img src="." data-rd-image="./img/game-1-2.webp" width="336" height="336" alt="Myth of Empires">
            </li>
          </ul>
          <div class="play__descr">
            <h1 class="play__title tt-53-border">
              Myth of Empires
            </h1>
            <div class="play__data tx-17">
              Çıkış tarihi: 21 Şub 2024
            </div>
            <div class="play__game game">
              PC
            </div>
            <div class="play__texts">
              <p class="play__text tx-17">
                Çeşitli manzaralar, ekoloji ve hava koşullarının yanı sıra gerçekçi gündüz-gece döngüleriyle geniş bir
                dünyayı keşfedin. Myth of Empires'ın 1.0 sürümünde ayrıca yeni bir harita var — Dongzhou Adası, sizi
                yeni maceralar ve zorluklar bekliyor. Myth of Empires, yüksek derecede özgürlüğe sahip bir sanal alan
                oyunudur; Oyunda 1300'den fazla farklı zanaat operasyonu mevcuttur ve tüm bir imparatorluğu inşa
                etmenizi sağlar. Sürüm 1.0, mekanik aletler ve savunmalar da dahil olmak üzere el sanatları için yeni
                nesneler ve tarifler ve yeni bir dikim sistemi ekledi. Oyunun olanakları gerçekten sonsuzdur.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end play -->

      <!-- start games -->
      <section class="games">
        <div class="container">
          <h2 class="visually-hidden">
            Hidden title
          </h2>
          <ul class="games__list">
            <li class="games__item rd-upload rd-background" data-rd-image="./img/oyv-1.webp">
              <div class="games__image rd-upload">
                <img src="." data-rd-image="./img/oyv-1-1.webp" width="336" height="336" alt="Myth of Empires">
              </div>
              <div class="games__descr">
                <div class="games__descr-top">
                  <a class="games__name tt-31-28" href="game-1.php">
                    Myth of Empires
                  </a>
                  <div class="games__data tx-17">
                    Çıkış tarihi: 21 Şub 2024
                  </div>
                </div>
                <div class="games__bottom">
                  <div class="games__game box-shadow game">
                    PC
                  </div>
                  <a class="games__link box-shadow but but_border" href="game-1.php">
                    Etraflıca
                  </a>
                </div>
              </div>
            </li>
            <li class="games__item rd-upload rd-background" data-rd-image="./img/oyv-2.webp">
              <div class="games__image rd-upload">
                <img src="." data-rd-image="./img/oyv-2-1.webp" width="336" height="336" alt="Last Epoch">
              </div>
              <div class="games__descr">
                <div class="games__descr-top">
                  <a class="games__name tt-31-28" href="game-2.php">
                    Last Epoch
                  </a>
                  <div class="games__data tx-17">
                    Çıkış tarihi: 21 Şub 2024
                  </div>
                </div>
                <div class="games__bottom">
                  <div class="games__game box-shadow game">
                    PC
                  </div>
                  <a class="games__link box-shadow but but_border" href="game-2.php">
                    Etraflıca
                  </a>
                </div>
              </div>
            </li>
            <li class="games__item rd-upload rd-background" data-rd-image="./img/oyv-3.webp">
              <div class="games__image rd-upload">
                <img src="." data-rd-image="./img/oyv-3-1.webp" width="336" height="336" alt="White Sands">
              </div>
              <div class="games__descr">
                <div class="games__descr-top">
                  <a class="games__name tt-31-28" href="game-3.php">
                    White Sands
                  </a>
                  <div class="games__data tx-17">
                    Çıkış tarihi: 14 Şub. 2024
                  </div>
                </div>
                <div class="games__bottom">
                  <div class="games__game box-shadow game">
                    PC
                  </div>
                  <a class="games__link box-shadow but but_border" href="game-3.php">
                    Etraflıca
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end games -->

      <!-- start contacts -->
      <section class="contacts rd-upload rd-background" data-rd-image="./img/contacts.webp">
        <div class="contacts__container container">
          <div class="contacts__descr">
            <h2 class="contacts__title tt-53-border">
              Oyunu satın almak için istek bırakın
            </h2>
            <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="email" name="email" id="email" placeholder="E-posta..." required>
                <input class="form__input input" type="text" name="text" id="text" placeholder="İle..." required>
              </div>
              <button class="form__button but" type="submit">
                Göndermek
              </button>
            </form>
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