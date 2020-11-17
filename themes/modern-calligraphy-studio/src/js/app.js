require("bootstrap");

// ADD ARROW TO PARENT MENUS
const menuItems = document.querySelectorAll(".menu-item");

menuItems.forEach((item) => {
  if (item.classList.contains("menu-item-has-children")) {
    const arrow = document.createElement("i");
    arrow.classList.add("fas");
    arrow.classList.add("fa-chevron-down");
    item.appendChild(arrow);
  }
});

// NAVBAR
const navbar = document.querySelector("#main-nav");

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
