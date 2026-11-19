
<?php

// INICIAR LA SESION

session_start();


// VERIFICAR QUE EXISTAN LOS DATOS

if (!isset($_SESSION["nombre"])) {

    header("Location: contacto.php");

    exit();

}


// RECUPERAR LOS DATOS DEL PARTICIPANTE

$nombre = htmlspecialchars($_SESSION["nombre"]);
$correo = htmlspecialchars($_SESSION["correo"]);
$telefono = htmlspecialchars($_SESSION["telefono"]);
$categoria = htmlspecialchars($_SESSION["categoria"]);

?>

<?php include "header.php"; ?>

<main>

    <!-- CONFIRMACION DE INSCRIPCION -->

    <section class="thank-you-section">

        <div class="thank-you-card">

            <div class="thank-you-icon">
                &#10003;
            </div>

            <p class="section-tag">
                CONECTA 2026
            </p>

            <h1>¡Gracias por inscribirte!</h1>

            <p class="thank-you-message">
                Tu información ha sido recibida correctamente.
                Nos alegra que quieras formar parte de nuestra
                feria de tecnología e innovación.
            </p>


            <!-- DATOS DEL PARTICIPANTE -->

            <div class="participant-details">

                <h2>Datos de tu inscripción</h2>

                <p>
                    <strong>Nombre:</strong>
                    <?php echo $nombre; ?>
                </p>

                <p>
                    <strong>Correo:</strong>
                    <?php echo $correo; ?>
                </p>

                <p>
                    <strong>Teléfono:</strong>
                    <?php echo $telefono; ?>
                </p>

                <p>
                    <strong>Categoría:</strong>
                    <?php echo $categoria; ?>
                </p>

            </div>


            <a href="index.php" class="boton">
                Volver al inicio
            </a>

        </div>

    </section>

</main>

<?php include "footer.php"; ?>

<?php

// LIMPIAR LOS DATOS DE LA SESION

$_SESSION = [];

session_destroy();

?>
