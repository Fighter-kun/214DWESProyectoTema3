<!DOCTYPE html>
<!--
	Descripción: CodigoEjercicio06
	Autor: Carlos García Cachón
	Fecha de creación/modificación: 17/10/2023
-->
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Carlos García Cachón">
  <meta name="description" content="CodigoEjercicio06">
  <meta name="keywords" content="CodigoEjercicio, 06">
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
        <h1>6. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días:</h1>
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
                    
                    /* Para calcular la fecha y el día de la semana de dentro de 60 días, usamos el codigo anterior
                     * y le añadimos 60dias en segundos, que en este caso son '5184000'
                     */
                    $horaStamp = time();
                    $segundos60Dias = 5184000;
                    //Los sumamos
                    $nuevaHoraStamp = $horaStamp + $segundos60Dias;
                    
                    //Formateamos la nueva fecha
                    $fechaFutura = date('d/m/Y', $nuevaHoraStamp);
                    
                    //Para hacer la fecha legible tendremos que formatearla con el siguiente código
                    $nDiaSemana = date ('w', $nuevaHoraStamp);

                    // Definimos un array con los nombres de los días de la semana en Castellano
                    $diasSemana = [
                        'Lunes', 
                        'Martes', 
                        'Miércoles', 
                        'Jueves', 
                        'Viernes', 
                        'Sábado',
                        'Domingo'];

                    // Obtener el nombre del día de la semana para la fecha futura
                    $nombreDiaSemana = $diasSemana[$nDiaSemana];

                    // Mostrar la fecha y el día de la semana futuros
                    echo "Dentro de 60 días será $nombreDiaSemana, $fechaFutura";
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


