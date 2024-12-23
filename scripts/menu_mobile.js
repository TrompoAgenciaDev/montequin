(
    function (){
        document.addEventListener("DOMContentLoaded", () => {
            const openMenu = document.getElementById("open-menu");
            const closeMenu = document.getElementById("close-menu");
            const menuMobile = document.getElementById("menu-mobile");

            const closeMobileMenu = () => {
                openMenu.classList.add("active-menu");                
                closeMenu.classList.remove("active-menu");
                menuMobile.classList.remove("show");
            };

            openMenu.addEventListener("click", (e) => {
                e.stopPropagation();
                openMenu.classList.remove("active-menu");                
                closeMenu.classList.add("active-menu");
                menuMobile.classList.add("show");
            });

            closeMenu.addEventListener("click", (e) => {
                e.stopPropagation();
                closeMobileMenu();
            });

            document.addEventListener("click", (e) => {
                if (!menuMobile.contains(e.target)) {
                    closeMobileMenu();
                }
            });
            
        });
    }
)();
