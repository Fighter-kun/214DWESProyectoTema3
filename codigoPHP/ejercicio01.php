<!DOCTYPE html>
<!--
	Descripción: CodigoEjercicio01
	Autor: Carlos García Cachón
	Fecha de creación/modificación: 17/10/2023
-->
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Carlos García Cachón">
  <meta name="description" content="CodigoEjercicio01">
  <meta name="keywords" content="CodigoEjercicio, 01">
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
        <h1>1. Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla (echo, print, printf, print_r, var_dump):</h1>
    </header>
    <main>
        <div class="container mt-3">
            <div class="row">
                <div class="col text-center">
                    <h2>ECHO:</h2>
                    <?php
                    /**
                     * @author Carlos García Cachón
                     * @version 1.0 
                     * @since 11/10/2023
                     */
                    //Declaración de las variables
                    $cadena1 = 'Cadena1';
                    $cadena2 = "Cadena2";
                    $entero = 1;
                    $real = 3.14;
                    $bul1 = true;
                    $bul2 = false;

                    //Mostras los datos con echo
                    echo("<p>La variable <span>".'$cadena1'."</span> es de tipo <span>".gettype($cadena1)."</span> y tiene el valor <span>".$cadena1."</span></p>");
                    echo("<p>La variable <span>".'$cadena2'."</span> es de tipo <span>".gettype($cadena2)."</span> y tiene el valor <span>".$cadena2."</span></p>");
                    echo("<p>La variable <span>".'$entero'."</span> es de tipo <span>".gettype($entero)."</span> y tiene el valor <span>".$entero."</span></p>");
                    echo("<p>La variable <span>".'$real'."</span> es de tipo <span>".gettype($real)."</span> y tiene el valor <span>".$real."</span></p>");
                    echo("<p>La variable <span>".'$bul1'."</span> es de tipo <span>".gettype($bul1)."</span> y tiene el valor <span>".$bul1."</span></p>");
                    echo("<p>La variable <span>".'$bul2'."</span> es de tipo <span>".gettype($bul2)."</span> y tiene el valor <span>".$bul2."</span></p>");
                    ?>
                    <br>
                    <h2>PRINT:</h2>
                    <?php
                    //Mostras los datos con print
                    echo("<p>La variable <span>".'$cadena1'."</span> es de tipo <span>".gettype($cadena1)."</span> y tiene el valor <span>".print($cadena1)."</span></p>");
                    echo("<p>La variable <span>".'$cadena2'."</span> es de tipo <span>".gettype($cadena2)."</span> y tiene el valor <span>".print($cadena2)."</span></p>");
                    echo("<p>La variable <span>".'$entero'."</span> es de tipo <span>".gettype($entero)."</span> y tiene el valor <span>".print($entero)."</span></p>");
                    echo("<p>La variable <span>".'$real'."</span> es de tipo <span>".gettype($real)."</span> y tiene el valor <span>".print($real)."</span></p>");
                    echo("<p>La variable <span>".'$bul1'."</span> es de tipo <span>".gettype($bul1)."</span> y tiene el valor <span>".print($bul1)."</span></p>");
                    echo("<p>La variable <span>".'$bul2'."</span> es de tipo <span>".gettype($bul2)."</span> y tiene el valor <span>".print($bul2)."</span></p>");
                    ?>
                    <br>
                    <h2>PRINTF:</h2>
                    <?php
                    //Mostras los datos con printf
                    echo("<p>La variable <span>".'$cadena1'."</span> es de tipo <span>".gettype($cadena1)."</span> y tiene el valor <span>".printf("%s",$cadena1)."</span></p>");
                    echo("<p>La variable <span>".'$cadena2'."</span> es de tipo <span>".gettype($cadena2)."</span> y tiene el valor <span>".printf("%s",$cadena2)."</span></p>");
                    echo("<p>La variable <span>".'$entero'."</span> es de tipo <span>".gettype($entero)."</span> y tiene el valor <span>".printf("%d",$entero)."</span></p>");
                    echo("<p>La variable <span>".'$real'."</span> es de tipo <span>".gettype($real)."</span> y tiene el valor <span>".printf("%f",$real)."</span></p>");
                    echo("<p>La variable <span>".'$bul1'."</span> es de tipo <span>".gettype($bul1)."</span> y tiene el valor <span>".printf("%b",$bul1)."</span></p>");
                    echo("<p>La variable <span>".'$bul2'."</span> es de tipo <span>".gettype($bul2)."</span> y tiene el valor <span>".printf("%b",$bul2)."</span></p>");
                    ?>
                    <br>
                    <h2>PRINT_R:</h2>
                    <?php
                    //Mostras los datos con print_r
                    echo("<p>La variable <span>".'$cadena1'."</span> es de tipo <span>".gettype($cadena1)."</span> y tiene el valor <span>".print_r($cadena1)."</span></p>");
                    echo("<p>La variable <span>".'$cadena2'."</span> es de tipo <span>".gettype($cadena2)."</span> y tiene el valor <span>".print_r($cadena2)."</span></p>");
                    echo("<p>La variable <span>".'$entero'."</span> es de tipo <span>".gettype($entero)."</span> y tiene el valor <span>".print_r($entero)."</span></p>");
                    echo("<p>La variable <span>".'$real'."</span> es de tipo <span>".gettype($real)."</span> y tiene el valor <span>".print_r($real)."</span></p>");
                    echo("<p>La variable <span>".'$bul1'."</span> es de tipo <span>".gettype($bul1)."</span> y tiene el valor <span>".print_r($bul1)."</span></p>");
                    echo("<p>La variable <span>".'$bul2'."</span> es de tipo <span>".gettype($bul2)."</span> y tiene el valor <span>".print_r($bul2)."</span></p>");
                    ?>
                    <br>
                    <h2>VAR_DUMP:</h2>
                    <?php
                    //Mostras los datos con var_dump
                    echo("<p>La variable <span>".'$cadena1'."</span> es de tipo <span>".gettype($cadena1)."</span> y tiene el valor <span>".var_dump($cadena1)."</span></p>");
                    echo("<p>La variable <span>".'$cadena2'."</span> es de tipo <span>".gettype($cadena2)."</span> y tiene el valor <span>".var_dump($cadena2)."</span></p>");
                    echo("<p>La variable <span>".'$entero'."</span> es de tipo <span>".gettype($entero)."</span> y tiene el valor <span>".var_dump($entero)."</span></p>");
                    echo("<p>La variable <span>".'$real'."</span> es de tipo <span>".gettype($real)."</span> y tiene el valor <span>".var_dump($real)."</span></p>");
                    echo("<p>La variable <span>".'$bul1'."</span> es de tipo <span>".gettype($bul1)."</span> y tiene el valor <span>".var_dump($bul1)."</span></p>");
                    echo("<p>La variable <span>".'$bul2'."</span> es de tipo <span>".gettype($bul2)."</span> y tiene el valor <span>".var_dump($bul2)."</span></p>");
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