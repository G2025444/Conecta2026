
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


// =================================
// PROGRAMA DE ACTIVIDADES
// =================================

// ARREGLO CON LAS ACTIVIDADES

const actividades = [

    {
        titulo: "Inteligencia Artificial",
        descripcion: "Descubre cómo la inteligencia artificial está transformando diferentes áreas de nuestra vida."
    },

    {
        titulo: "Robótica y Automatización",
        descripcion: "Conoce los avances de la robótica y su aplicación en diferentes procesos."
    },

    {
        titulo: "Ciberseguridad",
        descripcion: "Aprende sobre la importancia de proteger la información y los datos en el mundo digital."
    },

    {
        titulo: "Desarrollo Web",
        descripcion: "Explora cómo se crean los sitios web y las tecnologías utilizadas en su desarrollo."
    },

    {
        titulo: "Realidad Virtual",
        descripcion: "Descubre experiencias digitales mediante entornos virtuales e interactivos."
    },

    {
        titulo: "Innovación Tecnológica",
        descripcion: "Conoce nuevas ideas y herramientas que están impulsando el futuro de la tecnología."
    }

];


// CONTENEDOR DE LAS ACTIVIDADES

const programContainer = document.getElementById("programContainer");


// GENERAR LAS TARJETAS

if (programContainer) {

    actividades.forEach(function(actividad) {

        programContainer.innerHTML += `

            <article class="program-card">

                <h3>${actividad.titulo}</h3>

                <p>${actividad.descripcion}</p>

            </article>

        `;

    });

}


// =================================
// CARRUSEL DE IMAGENES
// =================================

// OBTENER LOS ELEMENTOS DEL HTML

const imagenes = document.querySelectorAll("#carouselImages img");

const indicadores = document.getElementById("carouselIndicators");


// IMAGEN QUE SE ESTA MOSTRANDO

let imagenActual = 0;


// CREAR LOS INDICADORES

if (imagenes.length > 0 && indicadores) {

    imagenes.forEach(function(imagen, indice) {

        const indicador = document.createElement("button");

        indicador.addEventListener("click", function() {

            mostrarImagen(indice);

        });

        indicadores.appendChild(indicador);

    });


    // FUNCION PARA MOSTRAR UNA IMAGEN

    function mostrarImagen(indice) {

        imagenes[imagenActual].classList.remove("active");

        indicadores.children[imagenActual].classList.remove("active");

        imagenActual = indice;

        imagenes[imagenActual].classList.add("active");

        indicadores.children[imagenActual].classList.add("active");

    }


    // MOSTRAR LA PRIMERA IMAGEN

    mostrarImagen(0);


    // CAMBIAR IMAGEN AUTOMATICAMENTE

    setInterval(function() {

        let siguiente = imagenActual + 1;

        if (siguiente >= imagenes.length) {

            siguiente = 0;

        }

        mostrarImagen(siguiente);

    }, 5000);

}

