
<?php include "header.php"; ?>

<main>

    <!-- PRESENTACION DE INSCRIPCION -->

    <section class="page-banner">

        <div class="container">

            <p class="section-tag">
                FORMA PARTE DE CONECTA 2026
            </p>

            <h1>Inscripción al evento</h1>

            <p>
                Completa el formulario y reserva tu participación
                en nuestra feria de tecnología e innovación.
            </p>

        </div>

    </section>


    <!-- FORMULARIO DE INSCRIPCION -->

    <section class="registration-section">

        <div class="container">

            <div class="registration-content">

                <div class="section-heading">

                    <p class="section-tag">
                        REGISTRO DE PARTICIPANTES
                    </p>

                    <h2>¡Inscríbete ahora!</h2>

                    <p>
                        Ingresa tus datos para participar
                        en las actividades de Conecta 2026.
                    </p>

                </div>


                <form class="registration-form"
                      id="registrationForm"
                      action="enviar.php"
                      method="POST">

                    <label for="nombre">
                        Nombre completo
                    </label>

                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        placeholder="Escribe tu nombre completo"
                        required
                    >


                    <label for="correo">
                        Correo electrónico
                    </label>

                    <input
                        type="email"
                        id="correo"
                        name="correo"
                        placeholder="ejemplo@correo.com"
                        required
                    >


                    <label for="telefono">
                        Número de teléfono
                    </label>

                    <input
                        type="tel"
                        id="telefono"
                        name="telefono"
                        placeholder="Ejemplo: 8888-8888"
                        required
                    >


                    <label for="categoria">
                        Categoría de inscripción
                    </label>

                    <select
                        id="categoria"
                        name="categoria"
                        required
                    >

                        <option value="">
                            Selecciona una categoría
                        </option>

                        <option value="Estudiante">
                            Estudiante
                        </option>

                        <option value="Profesional">
                            Profesional
                        </option>

                        <option value="Publico general">
                            Público general
                        </option>

                    </select>


                    <button type="submit" class="boton">
                        Enviar inscripción
                    </button>

                </form>

            </div>

        </div>

    </section>

</main>

<?php include "footer.php"; ?>
