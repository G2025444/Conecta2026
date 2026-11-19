
<?php

// VERIFICAR QUE EL FORMULARIO SE ENVIE POR POST

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // RECIBIR LOS DATOS DEL FORMULARIO

    $nombre = trim($_POST["nombre"] ?? "");
    $correo = trim($_POST["correo"] ?? "");
    $telefono = trim($_POST["telefono"] ?? "");
    $categoria = trim($_POST["categoria"] ?? "");


    // VALIDAR QUE LOS CAMPOS NO ESTEN VACIOS

    if (
        empty($nombre) ||
        empty($correo) ||
        empty($telefono) ||
        empty($categoria)
    ) {

        echo "Todos los campos son obligatorios.";

        exit();

    }


    // VALIDAR EL CORREO ELECTRONICO

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {

        echo "El correo electrónico no es válido.";

        exit();

    }


    // VALIDAR LA CATEGORIA

    $categoriasPermitidas = [
        "Estudiante",
        "Profesional",
        "Publico general"
    ];

    if (!in_array($categoria, $categoriasPermitidas, true)) {

        echo "La categoría seleccionada no es válida.";

        exit();

    }


    // GUARDAR LOS DATOS PARA LA PAGINA DE CONFIRMACION

    session_start();

    $_SESSION["nombre"] = $nombre;
    $_SESSION["correo"] = $correo;
    $_SESSION["telefono"] = $telefono;
    $_SESSION["categoria"] = $categoria;


    // REDIRIGIR A GRACIAS.PHP

    header("Location: gracias.php");

    exit();

} else {

    // EVITAR EL ACCESO DIRECTO AL ARCHIVO

    header("Location: contacto.php");

    exit();

}

?>
