(
    function (){
        document.addEventListener("DOMContentLoaded", () => {
            const openMenu = document.getElementById("open-menu");
            const closeMenu = document.getElementById("close-menu");
            const menuMobile = document.getElementById("menu-mobile");

            const closeMobileMenu = () => {
                openMenu.classList.toggle("active-menu");                
                closeMenu.classList.toggle("active-menu");
                menuMobile.classList.toggle("show");
            };

            openMenu.addEventListener("click", (e) => {
                console.log("clickeado");
                e.stopPropagation();
                openMenu.classList.toggle("active-menu");                
                closeMenu.classList.toggle("active-menu");
                menuMobile.classList.toggle("show");
            });

            closeMenu.addEventListener("click", (e) => {
                e.stopPropagation();
                closeMobileMenu();
            });

            document.addEventListener("click", (e) => {
                if (!menuMobile.contains(e.target)) {
                    menuMobile.classList.remove("show");
                }
            });            
        });
    }
)();