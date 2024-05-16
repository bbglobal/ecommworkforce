const date = new Date();
var year = date.getFullYear();
const copyRight = document.getElementById("copy-right");
copyRight.textContent = year;
 

var services = document.getElementById("service");
var help = document.getElementById("we-help");
var price = document.getElementById("priceMenu");
var more = document.getElementById("moreMenu");
var menu = document.getElementById("menu-drop");
var helpMenu = document.getElementById("help-menu");
var priceMenu = document.getElementById("price-menu");
var moreMenu = document.getElementById("more-drop");
var servicesIcon = document.getElementById("services-icon");
menu.style.display = "none";
helpMenu.style.display = "none";
priceMenu.style.display = "none";
moreMenu.style.display = "none";

services.addEventListener("click", () => {
    console.log("working");
  if (menu.style.display === "none") {
    menu.style.display = "block";
  } else {
    menu.style.display = "none";
  }
});

help.addEventListener("click", () => {
    console.log("working");
  if (helpMenu.style.display === "none") {
    helpMenu.style.display = "block";
  } else {
    helpMenu.style.display = "none";
  }
});

price.addEventListener("click", () => {
    console.log("working");
  if (priceMenu.style.display === "none") {
    priceMenu.style.display = "block";
  } else {
    priceMenu.style.display = "none";
  }
});

more.addEventListener("click", () => {
    console.log("working");
  if (moreMenu.style.display === "none") {
    moreMenu.style.display = "block";
  } else {
    moreMenu.style.display = "none";
  }
});
