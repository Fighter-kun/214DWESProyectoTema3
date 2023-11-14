<!DOCTYPE html>
<!--
	Descripción: CodigoEjercicio05
	Autor: Carlos García Cachón
	Fecha de creación/modificación: 17/10/2023
-->
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Carlos García Cachón">
  <meta name="description" content="CodigoEjercicio05">
  <meta name="keywords" content="CodigoEjercicio, 05">
  <meta name="generator" content="Apache NetBeans IDE 19">
  <meta name="generator" content="60">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Carlos García Cachón</title>
  <link rel="icon" type="image/jpg" href="../webroot/media/images/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../webroot/css/style.css">
</head>

<body>
    <header class="text-center">
        <h1>5. Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp):</h1>
    </header>
    <main>
        <div class="container mt-3">
            <div class="row">
                <div class="col text-center">
                    <?php
                    /**
                     * @author Carlos García Cachón
                     * @version 1.0 
                     * @since 11/10/2023
                     */
                    // Para obtener el tiempo actual en formato Unix timestamp
                    $horastamp = time();
                    // Muestro la hora en formato timestamp
                    echo("<p>El timestamp actual es: $horastamp.</p>");
                    //Para hacer la hora legible tendremos que formatearla con el siguiente código
                    $fechaHoraLegible = date('d/m/Y H:i:s', $horastamp);
                    
                    // Y mostramos la fecha y hora legible
                    echo("<p>La fecha y hora legible es: ".$fechaHoraLegible."</p>");
                    ?>
                    <h2>DATETIME():</h2>
                    <?php
                    // Para obtener el tiempo actual en formato Unix timestamp
                    $oFechaHoraActual = new DateTime();
         
                    //Aqui mostramos la segunda manera de obtener el timestamp
                    echo("<p>TimeStamp: ".$oFechaHoraActual->getTimestamp()."</p>");
                    
                    //Para hacer la hora legible la mostramos formateada 
                    echo("<p>La fecha y hora legible es: ".$oFechaHoraActual->format('d/m/Y H:i:s')."</p>");
                    ?>
                    <h2>5.1 Obtener timestap del 2 de marzo de 2024</h2>
                    <?php
                    /**
                     * @author Carlos García Cachón
                     * @version 1.0 
                     * @since 11/10/2023
                     */
                    //5.1 Obtener timestap del 2 de marzo de 2024
                    $fechaFutura = mktime(0, 0, 0, date(3), date(2), date(2024));
                    //Mostramos en formato timestamp
                    echo("<p>TimeStamp: ".$fechaFutura."</p>");
                    //Y ahora le damos formato y lo mostramos de manera legible
                    $fechaLegible = date('Y-m-d H:i:s', $fechaFutura);
                    echo("<p>Fecha futura en formato legible: ".$fechaLegible."</p>");
                    ?>
                </div>
            </div>
        </div>
    </main>
    <footer class="position-fixed bottom-0 end-0">
        <div class="row text-center">
            <div class="footer-item">
                <address>© <a href="../../index.html" style="color: white; text-decoration: none; background-color: #666">Carlos García Cachón</a>
                    IES LOS SAUCES 2023-24 </address>
            </div>
            <div class="footer-item">
                <a href="../indexProyectoTema3.html" style="color: white; text-decoration: none; background-color: #666">Inicio</a>
            </div>
            <div class="footer-item">
                <a href="https://github.com/Fighter-kun?tab=repositories" target="_blank"><img
                        src="../webroot/media/images/github.png" alt="LogoGitHub" class="pe-5"/></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>


