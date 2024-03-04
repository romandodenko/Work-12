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
              <img src="." data-rd-image="./img/game-3.webp" width="336" height="336" alt="White Sands">
            </li>
            <li class="play__image box-shadow rd-upload">
              <img src="." data-rd-image="./img/game-3-1.webp" width="336" height="336" alt="White Sands">
            </li>
            <li class="play__image box-shadow rd-upload">
              <img src="." data-rd-image="./img/game-3-2.webp" width="336" height="336" alt="White Sands">
            </li>
          </ul>
          <div class="play__descr">
            <h1 class="play__title tt-53-border">
              White Sands
            </h1>
            <div class="play__data tx-17">
              Çıkış tarihi: 14 Şub. 2024
            </div>
            <div class="play__game game">
              PC
            </div>
            <div class="play__texts">
              <p class="play__text tx-17">
                Oyun sizi, Dünya'nın koronal kütle atımı olarak bilinen bir Güneş süper fırtınası tarafından harap
                edildiği çok uzak olmayan bir geleceğe götürüyor. Fırtına, Dünya'nın manyetik alanını gezegen çevresinin
                ötesine itti ve büyük miktarda güneş radyasyonunun yer seviyesine nüfuz etmesine izin verdi. Sıcaklık ve
                radyasyon artışı yüzeydeki yaşamın çoğunu öldürdü ve virüsler kadar küçük yaşam formlarının DNA
                mutasyonlarına neden oldu.
              </p>
              <p class="play__text tx-17">
                CME sona erdiğinde, dünya'nın manyetik alanı koruyucu işlevine yeniden şekillenmişti, ancak o zamana
                kadar dünya'daki tüm yaşam hayatta kalmaya zar zor tutunuyordu. Yıllar geçti ve yüzey hala yaşamak için
                çok tehlikeli bir yer. İnsanlar ya yeraltında ya da yukarısında yerleşimler kurdular. Mutantlar ve
                çeteler yiyecek, içecek ve yağma aramak için çorak arazide dolaşırlar.
              </p>
              <p class="play__text tx-17">
                Askeri ve araştırma potansiyeli olan yarı devletli bir örgüt olan Birliğin komutanı olarak amacınız
                insanlığın yeniden inşasına yardımcı olmaktır. Modern askeri teknoloji size haydutlar üzerinde bir
                avantaj sağlayacak, ancak görev kolay olmaktan uzak olacak.
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