(
    function (){
        document.addEventListener("DOMContentLoaded", () => {
            const openMenu = document.getElementById("open-menu");
            const closeMenu = document.getElementById("close-menu");
            const menuMobile = document.getElementById("menu-mobile")

            openMenu.addEventListener("click", () => {
                openMenu.classList.remove("active-menu");                
                closeMenu.classList.add("active-menu");
                menuMobile.classList.add("show");

            });

            closeMenu.addEventListener("click", () => {
                openMenu.classList.add("active-menu");                
                closeMenu.classList.remove("active-menu");
                menuMobile.classList.remove("show");

            });
        })
    }
)();