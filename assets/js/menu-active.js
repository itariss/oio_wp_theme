const pageLocation = window.location
  .toString()
  .split("/")
  .filter((x) => x != "")
  .slice(-1)
  .toString();

const menuItems = document.querySelectorAll("ul.menu > li > a");

menuItems.forEach((item) => {
  if (item.textContent.toLowerCase() == pageLocation) {
    item.classList.add("menu-nav--active");
  }
});
