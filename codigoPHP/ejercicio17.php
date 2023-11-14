<!DOCTYPE html>
<!--
	Descripción: CodigoEjercicio17
	Autor: Carlos García Cachón
	Fecha de creación/modificación: 18/10/2023
-->
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Carlos García Cachón">
  <meta name="description" content="CodigoEjercicio17">
  <meta name="keywords" content="CodigoEjercicio, 17">
  <meta name="generator" content="Apache NetBeans IDE 19">
  <meta name="generator" content="60">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Carlos García Cachón</title>
  <link rel="icon" type="image/jpg" href="../webroot/media/images/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../webroot/css/style.css">
    <style>
        .butacas {
            display: inline-block;
            width: 6.30%;
            height: 1.5%;
            border: 1px solid black;
            color: white;
            background-color: red;
        }
        .vacio {
            background-color: green;
        }
    </style>
</head>

<body>
    <header class="text-center">
        <h1>17. Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el asiento 
            en un teatro de 20 filas y 15 asientos por fila. (Inicializamos el array ocupando únicamente 5 asientos). 
            Recorrer el array con distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan:</h1>
    </header>
    <main>
        <div class="container mt-3 text-center">
            <div class="row">
                <div class="col mb-5">
                    <?php
                    /**
                     * @author Carlos García Cachón
                     * @version 1.0 
                     * @since 18/10/2023
                     */
                    //Declaramos el array
                    $aButacasTeatro;
                    
                    //Ahora lo recorremos el array con 2 bucles for
                    for ($fila = 1; $fila < 21; $fila++) { //La variable '$fila' la utilizo para contar las 20 filas
                        for ($asiento = 1; $asiento < 16; $asiento++) { //La variable '$asiento' la utilizo para contar los asientos 15 en las 20 filas
                            //Iniciamos cada asiento a NULL
                            $aButacasTeatro[$fila][$asiento] = null;
                        }
                    }                
                    //Reservo los asientos
                    $aButacasTeatro[1][1] = "Carlos";
                    $aButacasTeatro[3][6] = "Alvaro";
                    $aButacasTeatro[7][7] = "Oscar";
                    $aButacasTeatro[8][12] = "Ismael";
                    $aButacasTeatro[15][5] = "Borja";
                    
                    echo("<h2>FOR()</h2>");
                    //Ahora imprimo la disposición de los asientos con un bucle for
                    for ($fila = 1; $fila < 21; $fila++) {
                        for ($asiento = 1; $asiento < 16; $asiento++) {
                            //Con esta variable preguntamos el estado de la butaca 
                            $estado = $aButacasTeatro[$fila][$asiento] ? $aButacasTeatro[$fila][$asiento] : "vacio";
                            //Dependiendo del estado modificará la clase del div y con ello su color de fondo
                            echo("<div class='butacas " . $estado . "'> [$fila][$asiento]: ". $estado ."</div>");
                        }
                    }
                    
                    echo("<h2>FOREACH()</h2>");
                    //Ahora imprimo la disposición de los asientos con un bucle foreach
                    foreach ($aButacasTeatro as $fila => $asientosFila) {
                        foreach ($asientosFila as $asiento => $estado) {
                            $estado = $estado ? $estado : "vacio";
                            echo("<div class='butacas " . $estado . "'> [$fila][$asiento]: " . $estado . "</div>");
                        }
                    }
                    
                    echo("<h2>WHILE()</h2>");
                    //Ahora imprimo la disposición de los asientos con un bucle while
                    $fila = 1;
                    while ($fila < 21) {
                        $asiento = 1;
                        while ($asiento < 16) {
                            $estado = $aButacasTeatro[$fila][$asiento] ? $aButacasTeatro[$fila][$asiento] : "vacio";
                            echo("<div class='butacas " . $estado . "'> [$fila][$asiento]: " . $estado . "</div>");
                            $asiento++;
                        }
                        $fila++;
                    }
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

