require("bootstrap");

// ADD ARROW TO PARENT MENUS
const parentMenus = document.querySelectorAll(".menu-item-has-children");

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

// MOBILE SUB-MENU OPEN
// parentMenus.forEach((menu) => {
//   const link = menu.getElementsByTagName("a")[0];
//   let open = false;

//   link.addEventListener("click", () => {
//     parentMenus.forEach((m) => {
//       if (m.classList.contains("open") && m !== menu) {
//         m.classList.remove("open");
//       }
//     });

//     if (!open) {
//       menu.classList.add("open");
//       open = true;
//     } else {
//       menu.classList.remove("open");
//       open = false;
//     }
//   });
// });

// DESKTOP NAVBAR FULL WIDTH ON SCROLL
const navbar = document.querySelector("#desktop-nav");

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

// MOBILE MENU

const mobileMenuBtn = document.querySelector("#mobile-menu-btn");
const mobileMenu = document.querySelector("#mobile-nav");
const mobileMenuContainer = document.querySelector("#mobile-menu-container");
const hamburger = document.querySelector("#hamburger");

let mobileMenuOpen = false;

mobileMenuBtn.addEventListener("click", () => {
  if (mobileMenuOpen) {
    mobileMenu.classList.remove("open");
    mobileMenuContainer.classList.remove("open");
    hamburger.classList.remove("open");
    mobileMenuOpen = false;
  } else {
    mobileMenu.classList.add("open");
    mobileMenuContainer.classList.add("open");
    hamburger.classList.add("open");
    mobileMenuOpen = true;
  }
});
