require("bootstrap");

const parentMenus = document.querySelectorAll(".menu-item-has-children");
const navbar = document.querySelector("#desktop-nav");
const mobileMenuBtn = document.querySelector("#mobile-menu-btn");
const mobileMenu = document.querySelector("#mobile-nav");
const mobileMenuContainer = document.querySelector("#mobile-menu-container");
const hamburger = document.querySelector("#hamburger");
const wpBlockGroup = document.querySelectorAll(".wp-block-group");
const imageContainer = document.querySelectorAll(".wp-block-image");

// ADD CLASS NAMES IN GUTENBERG TO IMAGES
imageContainer.forEach((container) => {
  if (container.classList.contains("img-fluid")) {
    const img = container.getElementsByTagName("img")[0];
    img.classList.add("img-fluid");
  }
});

// ADD CLASS NAMES IN GUTENBERG TO INNER CONTAINERS
wpBlockGroup.forEach((group) => {
  if (group.classList.contains("row")) {
    const innerContainer = group.getElementsByClassName(
      "wp-block-group__inner-container"
    )[0];
    innerContainer.classList.add("row");
  }
  if (group.classList.contains("justify-content-center")) {
    const innerContainer = group.getElementsByClassName(
      "wp-block-group__inner-container"
    )[0];
    innerContainer.classList.add("justify-content-center");
  }
  if (group.classList.contains("align-items-center")) {
    const innerContainer = group.getElementsByClassName(
      "wp-block-group__inner-container"
    )[0];
    innerContainer.classList.add("align-items-center");
  }
});

let mobileMenuOpen = false;

// SUB MENUS
parentMenus.forEach((menu) => {
  const link = menu.getElementsByTagName("a")[0];

  // remove page link for parent-menu functionality
  link.removeAttribute("href");

  // add arrow
  const arrow = document.createElement("i");
  arrow.classList.add("fas");
  arrow.classList.add("fa-chevron-down");
  link.appendChild(arrow);

  // sub-menu functionality on mobile
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
