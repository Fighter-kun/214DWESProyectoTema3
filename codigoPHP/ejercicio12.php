<!DOCTYPE html>
<!--
	Descripción: CodigoEjercicio12
	Autor: Carlos García Cachón
	Fecha de creación/modificación: 17/10/2023
-->
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Carlos García Cachón">
  <meta name="description" content="CodigoEjercicio12">
  <meta name="keywords" content="CodigoEjercicio, 12">
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
        <h1>12. Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()):</h1>
    </header>
    <main>
        <div class="container mt-3">
            <div class="row">
                <div class="col justify-content-start">
                    <h2>PRINT_R:</h2>
                    <?php
                    /**
                     * @author Carlos García Cachón
                     * @version 1.0 
                     * @since 11/10/2023
                     */
                    //Mostramos las variables con print_r()
                    echo("<p>Contenido de <span>".'$GLOBALS'."</span> es de tipo <span>".gettype($GLOBALS)."</span> y tiene el valor ".print_r($GLOBALS)."</p>");
                    echo("<p>Contenido de <span>".'$_SERVER'."</span> es de tipo <span>".gettype($_SERVER)."</span> y tiene el valor ".print_r($_SERVER)."</p>");
                    echo("<p>Contenido de <span>".'$_GET'."</span> es de tipo <span>".gettype($_GET)."</span> y tiene el valor ".print_r($_GET)."</p>");
                    echo("<p>Contenido de <span>".'$_POST'."</span> es de tipo <span>".gettype($_POST)."</span> y tiene el valor ".print_r($_POST)."</p>");
                    echo("<p>Contenido de <span>".'$_FILES'."</span> es de tipo <span>".gettype($_FILES)."</span> y tiene el valor ".print_r($_FILES)."</p>");
                    echo("<p>Contenido de <span>".'$_COOKIE'."</span> es de tipo <span>".gettype($_COOKIE)."</span> y tiene el valor ".print_r($_COOKIE)."</p>");
                    if(isset($_SESSION)) {
                        echo("<p>Contenido de <span>".'$_SESSION'."</span> es de tipo <span>".gettype($_SESSION)."</span> y tiene el valor ");
                        print_r($_SESSION);
                    } else {
                        echo("<p>Contenido de <span>".'$_SESSION'."</span> esta vacia.</p>");
                    }
                    echo("<p>Contenido de <span>".'$_REQUEST'."</span> es de tipo <span>".gettype($_REQUEST)."</span> y tiene el valor ".print_r($_REQUEST)."</p>");
                    echo("<p>Contenido de <span>".'$_ENV'."</span> es de tipo <span>".gettype($_ENV)."</span> y tiene el valor ".print_r($_ENV)."</p>");
                    ?>
                    <h2>FOREACH()</h2>
                    <?php
                    $key = "";
                    $value = "";
                    echo("La variable <span>".'$GLOBALS'."</span> no se puede mostrar con foreach().");
                    echo("<p>Contenido de <span>".'$_SERVER'."</span> es de tipo <span>".gettype($_SERVER)."</span> y tiene el valor <br>");
                    foreach ($_SERVER as $key => $value) {
                        echo "{$key} => {$value}<br>";
                    }
                    echo("</p>");
                    echo("<p>Contenido de <span>".'$_GET'."</span> es de tipo <span>".gettype($_GET)."</span> y tiene el valor <br>");
                    foreach ($_GET as $key => $value) {
                        echo "{$key} => {$value}<br>";
                    }
                    echo("</p>");
                    echo("<p>Contenido de <span>".'$_POST'."</span> es de tipo <span>".gettype($_POST)."</span> y tiene el valor <br>");
                    foreach ($_POST as $key => $value) {
                        echo "{$key} => {$value}<br>";
                    }
                    echo("</p>");
                    echo("<p>Contenido de <span>".'$_FILES'."</span> es de tipo <span>".gettype($_FILES)."</span> y tiene el valor <br>");
                    foreach ($_FILES as $key => $value) {
                        echo "{$key} => {$value}<br>";
                    }
                    echo("</p>");
                    echo("<p>Contenido de <span>".'$_COOKIE'."</span> es de tipo <span>".gettype($_COOKIE)."</span> y tiene el valor <br>");
                    foreach ($_COOKIE as $key => $value) {
                        echo "{$key} => {$value}<br>";
                    }
                    echo("</p>");
                    if(isset($_SESSION)) {
                        echo("<p>Contenido de <span>".'$_SESSION'."</span> es de tipo <span>".gettype($_SESSION)."</span> y tiene el valor <br>");
                        foreach ($_SESSION as $key => $value) {
                            echo "{$key} => {$value}<br>";
                        }
                    }else {
                        echo("<p>Contenido de <span>".'$_SESSION'."</span> esta vacia.");
                    }
                    echo("</p>");
                    echo("<p>Contenido de <span>".'$_REQUEST'."</span> es de tipo <span>".gettype($_REQUEST)."</span> y tiene el valor <br>");
                    foreach ($_REQUEST as $key => $value) {
                        echo "{$key} => {$value}<br>";
                    }
                    echo("</p>");
                    echo("<p>Contenido de <span>".'$_ENV'."</span> es de tipo <span>".gettype($_ENV)."</span> y tiene el valor <br>");
                    foreach ($_ENV as $key => $value) {
                        echo "{$key} => {$value}<br>";
                    }
                    echo("</p>");
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

