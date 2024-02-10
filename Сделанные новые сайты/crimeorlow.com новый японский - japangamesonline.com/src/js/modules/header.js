"use strict"

export function header() {
  document.addEventListener("DOMContentLoaded", function () {
    const burger = document.querySelector(".header__burger");
    const nav = document.querySelector(".header__menu");
    const exitBurger = document.querySelector(".header__exit-menu");
    const body = document.querySelector("body");
    const navLink = document.querySelectorAll(".nav__link");

    navLink.forEach(function (navLink) {
      navLink.addEventListener("click", function () {
        nav.classList.remove("menu-active")
        body.style.overflow = ""
      })
    })

    burger.addEventListener("click", function () {
      nav.classList.add("menu-active")
      body.style.overflow = "hidden"
    })

    exitBurger.addEventListener("click", function () {
      nav.classList.remove("menu-active")
      body.style.overflow = ""
    })


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
  })

  
}