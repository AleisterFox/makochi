<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Makochi</title>
</head>

<body>
    <header>
            <nav>
                <ul class="menu">
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="facilities.php">Instalaciones</a></li>
                </ul>
                <figure>
                    <a href="index.php"><img src="img/logo.png" alt="Logotipo Makochi"></a>
                </figure>
                <ul class="menu m2">
                    <li><a href="talleres.php">Talleres</a></li>
                    <li><a href="index.php#inscriptions">Inscripciones</a></li>
                    <li><a href="contact.php" class="button blue">Contacto</a></li>
                </ul>
                <i class="fa-solid fa-bars menu__button"></i>
            </nav>
    </header>
    <main>
        <section id="contact">
            <h2>Resolvemos tus dudas, visita el nuevo espacio de tu pequeño</h2>
            <form>
                <div class="name">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" required><br><br>
                </div>

                <div class="lastname">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" required><br><br>
                </div>

                <div class="phone">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" required><br><br>
                </div>

                <div class="mail">
                    <label for="correo">Correo</label>
                    <input type="email" id="correo" name="correo" required><br><br>
                </div>

                <div class="schedule">
                    <label for="horario">Horario de cita</label>
                    <input type="time" id="horario" name="horario" required><br><br>
                </div>

                <div class="date">
                    <label for="fecha">Fecha</label>
                    <input type="date" id="fecha" name="fecha" required><br><br>
                </div>

                <div class="service">
                    <label for="servicio">¿Qué informes necesitas?</label><br>
                    <div class="services">
                        <div>
                            <input type="radio" id="guarderia" name="servicio" value="Guardería">
                            <label for="guarderia">Guardería</label><br>
                        </div>
                        <div>
                            <input type="radio" id="preescolar" name="servicio" value="Preescolar">
                            <label for="preescolar">Preescolar</label><br>
                        </div>
                        <div>
                            <input type="radio" id="taller" name="servicio" value="Talleres">
                            <label for="taller">Talleres</label><br>
                        </div>
                        <div>
                            <input type="radio" id="inscripciones" name="servicio" value="Inscripciones">
                            <label for="inscripciones">Inscripciones</label><br><br>
                        </div>
                    </div>
                </div>

                <div class="message">
                    <label for="mensaje">Dudas/Preguntas</label><br>
                    <textarea id="mensaje" name="mensaje"></textarea><br><br>
                </div>
                <!-- <input type="submit" value="Enviar" class="yellow"> -->
            </form>
        </section>

        <section id="location">
            <h2>Ven y conócenos</h2>
            <div>
                <p>Nogal 800, Col. Arboledas, C.P. 76140, Querétaro, Qro.</p>
                <a href="" class="button green">Cómo llegar <i class="fa-solid arrow-right"></i></a>
            </div>
            <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Nogal%20800,%20Col.%20Arboledas,%20C.P.%2076140,%20Quer%C3%A9taro,%20Qro.+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </section>
    </main>
    <footer>
        <div>
            <figure>
                <img src="img/logo2.png" alt="Logo de Makochi">
            </figure>

            <div class="footer_address">
                <i class="fa-solid fa-location-dot"></i>
                <p>Nogal 800, Col. Arboledas C.P. 76140, Querétaro, Qro.</p>
            </div>

            <div class="ig">
                <img src="icons/ig.png" alt="icono de instagram">
                <p>@kinder.makochi</p>
            </div>

            <div class="phone_number">
                <i class="fa-solid fa-phone"></i>
                <p>442 141 5947</p>
            </div>

        </div>
        <div>
            <div class="rights">
                <p>2023 © todos los derechos reservados</p>
                <img src="icons/Icono_molcajete.png" alt="icono molcajete diseño">
            </div>
            <div class="policies">
                <a href="">Privacidad</a>
                <a href="">Términos y condiciones</a>
            </div>
        </div>
    </footer>

    <script src="js/particles.js"></script>
    <script src="js/script.js"></script>
</body>

</html>