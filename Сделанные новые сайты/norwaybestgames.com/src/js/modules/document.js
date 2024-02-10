document.documentElement.classList.add("loaded"); // когда страница загрузилась

window.addEventListener("DOMContentLoaded", windowLoad); // для анимации для первых экранов, чтобы ничего не дергалось

function windowLoad() {}; // для анимации для первых экранов, чтобы ничего не дергалось


// Открытие и закрытие бургера

const menu = document.querySelector(".header__menu");

document.addEventListener("click", function (e) {

  const elementInteractive = e.target;

  if (elementInteractive.closest(".burger")) { // Открытие и закрытие бургера
    menu.classList.add("active")
    document.body.style.overflow = "hidden";
  }
  if (elementInteractive.closest(".header__exit-menu")) { // Открытие и закрытие бургера 
    menu.classList.remove("active")
    document.body.style.overflow = "";
  }
  if (elementInteractive.closest(".nav__link")) { // Открытие и закрытие бургера
    menu.classList.remove("active")
    document.body.style.overflow = "";
  }
})

// Плагин webp. Скрипт для проверки , поддерживает ли браузер webp 

function testWebP(callback) {
  var webP = new Image();

  webP.onload = webP.onerror = function () {
    callback(webP.height == 2);
  };

  webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

testWebP(function (support) {
  if (support == true) {
    document.querySelector('body').classList.add('webp');
  } else {
    document.querySelector('body').classList.add('no-webp');
  }
});

// Плагин загрузки изображений и видео

const rdUpload = document.querySelectorAll(".rd-upload");

const body = document.body;

if (rdUpload) {
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0,
  }

  const callback = function (entries, observer) {

    entries.forEach(entry => {
      const elementEntry = entry.target;
      if (entry.isIntersecting) {

        if (!elementEntry.classList.contains("rd-load")) {
          elementEntry.classList.add("rd-load");

          let rdUploadBackgroundImage = elementEntry.querySelectorAll(".rd-background")

          let rdUploadImage = elementEntry.querySelectorAll("img")

          let rdUploadVideo = elementEntry.querySelectorAll("video")

          if (elementEntry.classList.contains("rd-background")) {

            let elementEntryBackgroundImageDataImage = elementEntry.dataset.rdImage;
            let elementEntryBackgroundImageDataWebp = elementEntry.dataset.rdImageWebp;

            if (body.classList.contains("webp")) {
              elementEntry.style.backgroundImage = `url(${elementEntryBackgroundImageDataWebp})`;
            } else {
              elementEntry.style.backgroundImage = `url(${elementEntryBackgroundImageDataImage})`;
            }

          }

          if (rdUploadBackgroundImage) {
            rdUploadBackgroundImage.forEach(function (rdUploadBackgroundImage) {

              let rdUploadBackgroundImageDataImage = rdUploadBackgroundImage.dataset.rdImage;
              let rdUploadBackgroundImageDataWebp = rdUploadBackgroundImage.dataset.rdImageWebp;


              if (body.classList.contains("webp")) {
                rdUploadBackgroundImage.style.backgroundImage = `url(${rdUploadBackgroundImageDataWebp})`;
              } else {
                rdUploadBackgroundImage.style.backgroundImage = `url(${rdUploadBackgroundImageDataImage})`;
              }

            })
          }

          if (rdUploadImage) {
            rdUploadImage.forEach(function (rdUploadImage) {

              let rdUploadImageDataImage = rdUploadImage.dataset.rdImage;
              let rdUploadImageDataWebp = rdUploadImage.dataset.rdImageWebp;


              if (body.classList.contains("webp")) {
                rdUploadImage.setAttribute("src", `${rdUploadImageDataWebp}`);
              } else {
                rdUploadImage.setAttribute("src", `${rdUploadImageDataImage}`);
              }

            })
          }

          if (rdUploadVideo) {
            rdUploadVideo.forEach(function (rdUploadVideo) {

              let rdUploadVideoDataVideo = rdUploadVideo.dataset.rdVideo;
              let rdUploadVideoDataImage = rdUploadVideo.dataset.rdImage;
              let rdUploadVideoDataWebp = rdUploadVideo.dataset.rdImageWebp;

              rdUploadVideo.setAttribute("src", `${rdUploadVideoDataVideo}`);

              if (body.classList.contains("webp")) {
                rdUploadVideo.setAttribute("poster", `${rdUploadVideoDataWebp}`);
              } else {
                rdUploadVideo.setAttribute("poster", `${rdUploadVideoDataImage}`);
              }

            })
          }
        }

      }

    })

  }

  const observer = new IntersectionObserver(callback, options);

  rdUpload.forEach(i => {
    observer.observe(i);
  })
}

// Примечание:
// Если используется фоновая картинка у элемента внутри rd-upload, то добавляем элементу класс rd-background и аттрибуты data-rd-image="картинка" data-rd-image-webp="картинка", должно получиться вот так:
// <div class="rd-background" data-rd-image="./img/image-1.jpg" data-rd-image-webp="./img/image-1.webp"></div>
// Если используется фоновая картинка у элемента rd-upload, то элементу rd-upload добавляем класс rd-background и аттрибуты data-rd-image="картинка" data-rd-image-webp="картинка", должно получиться вот так:
// <section class="hero rd-upload rd-background" data-rd-image="./img/image-1.jpg" data-rd-image-webp="./img/image-1.webp"></section>

const popup = document.querySelector(".popup");

if (popup) {
  function setCookie(name, value, days) {
    let expires = "";
    if (days) {
      let date = new Date();
      date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
      expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
  }

  function getCookie(name) {
    let matches = document.cookie.match(
      new RegExp(
        "(?:^|; )" +
        name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") +
        "=([^;]*)"
      )
    );
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }

  function checkCookies() {
    let cookieNote = document.querySelector(".popup-active"); // элемент
    let cookieBtnAccept = cookieNote.querySelector(".popup__button"); // кнопка

    // Если куки cookies_policy нет или она просрочена, то показываем уведомление
    if (!getCookie("cookies_policy")) {
      cookieNote.classList.add("show");
    }

    // При клике на кнопку устанавливаем куку cookies_policy на один год
    cookieBtnAccept.addEventListener("click", function () {
      setCookie("cookies_policy", "true", 365);
      cookieNote.classList.remove("show");
    });
  }

  checkCookies();
}

const mangfoldSlider = document.querySelector(".mangfold-slider");

if (mangfoldSlider) {
  const mangfoldSwiper = new Swiper(mangfoldSlider, {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: 1,
    spaceBetween: 32,
    direction: 'horizontal',
    pagination: {
      el: '.mangfold-slider-pagination',
      clickable: true,
    },
  });
}