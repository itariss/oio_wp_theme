const menuPrincipalMobile = document.querySelector(
  ".menu-mobile > div.menu-menu-principal-container"
);
const menuMobile = document.querySelector(".menu-mobile");
const menuButton = document.querySelector(".menu-icon");
const closeButton = document.querySelector(".close-icon");

menuButton.addEventListener("click", toogleVisibility);
closeButton.addEventListener("click", toogleVisibility);

menuPrincipalMobile.classList.add("menu-principal--mobile");

function toogleVisibility() {
  menuMobile.classList.toggle("show-menu");
  menuButton.classList.toggle("hide-button");
  closeButton.classList.toggle("hide-button");
}
