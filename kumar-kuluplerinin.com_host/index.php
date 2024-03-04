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
          <div class="hero__descr">
            <h1 class="hero__title tt-52-34">
              Oyun satışı için çevrimiçi mağaza
            </h1>
            <div class="hero__texts">
              <p class="hero__text tx-16-14">
                Piyasadaki en iyi, yüksek puan alan oyunlardan bazılarını sunmaktan gurur duyuyoruz. Seçimimizde tutku
                uyandıran ve oyuncuların aklını başından alan en yeni oyunları bulacaksınız.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title tt-52-34">
            Hakkımızda
          </h2>
          <div class="about__texts">
            <p class="about__text tx-16-14">
              Mağazamız oyun deneyiminizi önemsiyor; bu nedenle türünün en iyilerinden biri olarak kabul edilen oyunları
              dikkatle seçiyoruz. En güncel ve heyecan verici tasarımların keyfini çıkarabilmeniz için ekibimiz sürekli
              olarak trendleri takip ediyor ve koleksiyonumuzu güncelliyor.
            </p>
            <p class="about__text tx-16-14">
              Oyun derecelendirmelerinin seçim yaparken önemli bir unsur olduğunu biliyoruz, bu nedenle mağazamızdaki
              her oyunun yüksek puan almasını ve oyun topluluğunda olumlu değerlendirmeler almasını sağlıyoruz. Bu,
              gerçek kaliteye ve unutulmaz bir oyun deneyimine sahip olmanızı sağlar.
            </p>
            <p class="about__text tx-16-14">
              İster aksiyon oyunlarının, rol yapma oyunlarının, strateji oyunlarının, ister spor simülasyonlarının
              hayranı olun, her oyuncu için bir şeylerimiz var. En seçkin zevkleri tatmin etmeye çalışıyoruz ve çeşitli
              oyun türleri ve tarzları sunuyoruz.
            </p>
          </div>
          <div class="about__image rd-upload">
            <img src="." data-rd-image="./img/about.webp" width="336" height="336" alt="Hakkımızda">
          </div>
        </div>
      </section>
      <!-- end about -->

      <!-- start hero -->
      <section class="hero hero_tek rd-upload rd-background" data-rd-image="./img/tek.webp" id="tek">
        <div class="hero__container container">
          <div class="hero__descr">
            <h2 class="hero__title tt-52-34">
              Teklifler
            </h2>
            <div class="hero__texts">
              <p class="hero__text tx-16-14">
                Ayrıca oyun dünyasına yolculuğunuzu konforlu ve keyifli kılmak için kullanıcı dostu bir arayüz ve
                güvenilir hizmet sunuyoruz. Ekibimiz oyun seçmenize, sorularınızı yanıtlamanıza ve size en iyi desteği
                sağlamaya her zaman hazırdır.
              </p>
              <p class="hero__text tx-16-14">
                Bu nedenle, sunduğumuz heyecan verici oyun dünyalarına kendinizi kaptırma ve oyun topluluğunun bir
                parçası olma fırsatını kaçırmayın. Mağazamızı ziyaret edin ve bugün en iyi, en sıcak, en yüksek puan
                alan oyunların tadını çıkarın!
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start games -->
      <section class="games" id="games">
        <div class="container">
          <h2 class="games__title tt-52-34">
            Oyunlar
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

      <!-- start contacts -->
      <section class="contacts" id="contacts">
        <div class="container">
          <h2 class="contacts__title tt-52-34">
            Kişiler
          </h2>
          <p class="contacts__text tx-24-18">
            Oyunu satın almak için bir istek bırakın
          </p>
          <form class="form" method="POST" action="mail.php" name="form" autocomplete="off">
            <div class="form__inputs">
              <input class="form__input input" type="text" name="text" id="text" placeholder="İsim..." required>
              <input class="form__input input" type="email" name="email" id="email" placeholder="Posta..." required>
            </div>
            <button class="form__button but" type="submit">
              Göndermek
            </button>
          </form>
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