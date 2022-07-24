window.addEventListener("scroll", () => {
    const navbar = document.querySelector(".navbar-expand-lg");
    if (window.scrollY > 100) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});
