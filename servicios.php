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
        <section id="services_page">
            <div class="service_element">
                <h2>Estimulación temprana</h2>
                <div class="left_container">
                    <p>La estimulación temprana es importante ya que aprovecha la capacidad y plasticidad del cerebro en
                        su beneficio para el desarrollo óptimo de las distintas áreas. Todo esto se logra proporcionando
                        una serie de estímulos repetitivos (mediante actividades lúdicas), de manera que se potencien
                        aquellas funciones cerebrales que a la larga resultan de mayor interés.</p>
                    <figure>
                        <img src="img/estimulacion.jpg" alt="">
                    </figure>
                </div>
                <h4>Las áreas de desarrollo que abarca la estimulación temprana son:</h4>
                <ul>
                    <li>Motor grueso: que son movimientos generales del cuerpo, piernas y brazos.</li>
                    <li>Lenguaje: que es la capacidad de comunicarse y hablar.</li>
                    <li>Motor fino: que son los movimientos precisos y especializados de manos y dedos.</li>
                    <li>
                        Socioafectivo: que es la capacidad de relacionarse con los demás y expresar sentimientos y
                        emociones.</li>
                </ul>
            </div>
            <div class="service_element">
                <h2>Preescolar</h2>
                <div class="right_container">
                    <figure>
                        <img src="img/preescolar.jpg" alt="">
                    </figure>
                    <p>En Makochi promovemos los aprendizajes a través del juego en un ambiente seguro, impulsamos el
                        crecimiento y el desarrollo de los pequeños en los niveles emocional, social y personal.</p>

                </div>
                <div class="text">
                    <p>Esta etapa es muy importante para su desarrollo, ya que no solo adquieren conocimientos básicos
                        (como las letras y los números), sino que además comienzan a desarrollarse social y
                        emocionalmente.</p>
                    <p>Tener una educación preescolar de calidad es de suma importancia, ya que esta tiene un impacto
                        directo en su desarrollo integral presente y futuro.</p>
                </div>
            </div>
        </section>
        <section id="inscriptions">
            <div>
                <h2>Inscripciones abiertas con material incluido</h2>
                <a href="" class="button green">Agenda tu cita</a>
            </div>
            <div>
                <div class="dialog">
                    <h3>¡Ven a conocer a Makochi!</h3>
                </div>
                <figure class="animation">
                    <img src="img/makochi_saliendo.gif" alt="Makochi apareciendo">
                </figure>
            </div>
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