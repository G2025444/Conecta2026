// =================================
// MENU DE NAVEGACION
// =================================

const btnMenu = document.querySelector("#btnMenu");

const menu = document.querySelector(".nav-links");

if (btnMenu && menu) {

    btnMenu.addEventListener("click", () => {

        menu.classList.toggle("abierto");

        btnMenu.classList.toggle("activo");

        const menuAbierto = menu.classList.contains("abierto");

        btnMenu.setAttribute("aria-expanded", menuAbierto);

        if (menuAbierto) {
            btnMenu.setAttribute("aria-label", "Cerrar menú");
        } else {
            btnMenu.setAttribute("aria-label", "Abrir menú");
        }

    });

}
