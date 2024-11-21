document.addEventListener("DOMContentLoaded", function () {
    // Fonction pour vérifier si un élément est visible à l'écran
    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Fonction pour activer l'animation lorsque l'élément est visible
    function checkElementsVisibility() {
        var elements = document.querySelectorAll('.slide-in');
        elements.forEach(function(element) {
            if (isElementInViewport(element)) {
                element.classList.add('active');
            } else {
                element.classList.remove('active');
            }
        });
    }

    // Écoutez l'événement de défilement pour vérifier la visibilité des éléments
    window.addEventListener('scroll', checkElementsVisibility);
    window.addEventListener('resize', checkElementsVisibility);

    // Vérifiez la visibilité des éléments lors du chargement initial
    checkElementsVisibility();

    const LogoMenu = document.getElementById("logo_menu");
    const SousMenu = document.querySelector("#ul_global_menu");
    const navBar = document.getElementById("menu"); 
    const introOverlay = document.getElementById("introOverlay");

    LogoMenu.addEventListener("click", () => {
        SousMenu.classList.toggle("menu_mobile");
        LogoMenu.classList.toggle("logo-open");
        setTimeout(function () {
            introOverlay.style.display = "none";                
            document.body.classList.add("scrollable");
        }, 4000);
    });

    window.addEventListener("scroll", function () {
        if (window.scrollY > 0) {
            navBar.classList.add("scrolled");
        } else {
            navBar.classList.remove("scrolled");
        }
    });

    // Fonction pour vérifier la visibilité des éléments à chaque fois que la page est chargée
    checkElementsVisibility();
});
