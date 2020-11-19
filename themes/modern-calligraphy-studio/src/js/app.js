require("bootstrap");

const parentMenus = document.querySelectorAll(".menu-item-has-children");
const navbar = document.querySelector("#desktop-nav");
const mobileMenuBtn = document.querySelector("#mobile-menu-btn");
const mobileMenu = document.querySelector("#mobile-nav");
const mobileMenuContainer = document.querySelector("#mobile-menu-container");
const hamburger = document.querySelector("#hamburger");

let mobileMenuOpen = false;

// SUB MENU ARROWS & FUNCTIONALITY ON MOBILE
parentMenus.forEach((menu) => {
  const link = menu.getElementsByTagName("a")[0];
  const arrow = document.createElement("i");
  arrow.classList.add("fas");
  arrow.classList.add("fa-chevron-down");
  link.appendChild(arrow);

  link.addEventListener("click", () => {
    parentMenus.forEach((m) => {
      if (m.classList.contains("open") && m !== menu) {
        m.classList.remove("open");
      }
    });

    if (!menu.classList.contains("open")) {
      menu.classList.add("open");
      open = true;
    } else {
      menu.classList.remove("open");
      open = false;
    }
  });
});

// DESKTOP NAVBAR FULL WIDTH ON SCROLL
window.onscroll = () => {
  "use strict";
  if (
    document.body.scrollTop >= 215 ||
    document.documentElement.scrollTop >= 215
  ) {
    navbar.classList.add("full-width");
  } else {
    navbar.classList.remove("full-width");
  }
};

// SHOW/HIDE MOBILE MENU
mobileMenuBtn.addEventListener("click", () => {
  if (mobileMenuOpen) {
    // close menu
    mobileMenu.classList.remove("open");
    mobileMenuContainer.classList.remove("open");
    hamburger.classList.remove("open");
    mobileMenuOpen = false;

    setTimeout(() => {
      parentMenus.forEach((menu) => menu.classList.remove("open"));
      mobileMenuContainer.classList.remove("display");
    }, 1000);
  } else {
    // open menu
    mobileMenu.classList.add("open");
    mobileMenuContainer.classList.add("display");
    hamburger.classList.add("open");
    setTimeout(() => {
      mobileMenuContainer.classList.add("open");
    }, 250);
    mobileMenuOpen = true;
  }
});
