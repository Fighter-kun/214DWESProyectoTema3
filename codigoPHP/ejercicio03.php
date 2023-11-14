<!DOCTYPE html>
<!--
	Descripción: CodigoEjercicio03
	Autor: Carlos García Cachón
	Fecha de creación/modificación: 17/10/2023
-->
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Carlos García Cachón">
  <meta name="description" content="CodigoEjercicio03">
  <meta name="keywords" content="CodigoEjercicio, 03">
  <meta name="generator" content="Apache NetBeans IDE 19">
  <meta name="generator" content="60">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Carlos García Cachón</title>
  <link rel="icon" type="image/jpg" href="../webroot/media/images/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../webroot/css/style.css">
    <style>
            * {
                font-family: monospace;
            }
            span {
                color: red;
            }
        </style>
</head>

<body>
    <header class="text-center">
        <h1>3. Mostrar en tu página index la fecha y hora actual formateada en castellano. (Utilizar cuando sea posible la clase DateTime):</h1>
    </header>
    <main>
        <div class="container mt-3">
            <div class="row">
                <div class="col text-center">
                     <?php
                    /**
                     * @author Carlos García Cachón
                     * @version 1.0 
                     * @since 17/10/2023
                     */
                    //Esta función sirve para obtener el mes en Castellano en función del número del mes.
                    function obtenerNombreMes($nMes) {
                    $aMeses = [
                        1 => "Enero", 
                        2 => "Febrero", 
                        3 => "Marzo", 
                        4 => "Abril",
                        5 => "Mayo", 
                        6 => "Junio", 
                        7 => "Julio", 
                        8 => "Agosto",
                        9 => "Septiembre", 
                        10 => "Octubre", 
                        11 => "Noviembre", 
                        12 => "Diciembre"
                    ];
                    return $aMeses[$nMes];
                }
                    // Creamos un objeto DateTime con la fecha y hora actual
                    $OfechaHoraActual = new DateTime('now',new  DateTimeZone('Europe/Madrid'));

                    // Usamos el numero del mes y con la función obtenemos el nombre del mes en Castellano.
                    $nMes = $OfechaHoraActual->format('n');
                    $nombreMes = obtenerNombreMes($nMes);
                    
                    //Ahora formateamos la salida de fecha y hora: Ejemplo -> (1 de Enero de 2023 12:30:50)
                    $fechaHoraFormateada = $OfechaHoraActual->format('d') . ' de ' . $nombreMes . ' de ' . $OfechaHoraActual->format(' Y, H:i:s');

                    // Y mostramos la fecha y hora formateada
                    echo("<p>La fecha y hora actual en Castellano es: ".$fechaHoraFormateada."</p>");
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
