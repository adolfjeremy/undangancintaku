const hamburgerButton = document.querySelector("#hamburgerButton");
const navbar = document.querySelector("nav");
const mainContent = document.querySelector("main");
const mobileNav = document.querySelector(".navbar-collapse");

hamburgerButton.addEventListener("click", function () {
    navbar.classList.toggle("nav_open");
    document.body.classList.toggle("disable-scroll");
    this.classList.toggle("rotate");
});

mainContent.addEventListener("click", () => {
    navbar.classList.remove("nav_open");
    document.body.classList.remove("disable-scroll");
    hamburgerButton.classList.remove("rotate");
    mobileNav.classList.remove("show");
});
