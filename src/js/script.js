function toggleMenu() {
    var menu = document.getElementById("mobileMenu");
    if (menu) {
        menu.classList.toggle("active");
    } else {
        console.error("L'élément mobileMenu n'a pas été trouvé");
    }
}