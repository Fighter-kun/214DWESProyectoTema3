<!DOCTYPE html>
<!--
	Descripción: CodigoEjercicio18
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
            height: 5%;
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
        <h1>18. Recorrer el array anterior utilizando funciones para obtener el mismo resultado:</h1>
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
                    
                    /*
                     * Para recorrer el array usando funciones, primero tenemos que pasar el array bidimensional (matriz)
                     * a una dimensión (vector)
                     */
                    //En esta línea estamos llamando a una función para fusionar los contenidos del array '$aButacasTeatro'
                    $aVectorButacasTeatro = call_user_func_array('array_merge', $aButacasTeatro);  

                    /*
                     * Aqui creamos una instancia de la clase ArrayIterator y volcamos el array '$aVectorButacasTeatro' dentro del constructor
                     * para poder recorrerlo utilizando los metodos de la clase ArrayIterator
                     */
                    $iterador = new ArrayIterator($aVectorButacasTeatro);

                    //Usando un bucle recorremos el array
                    while ($iterador->valid()) { //En esta línea le indicamos al while que se seguira ejecutando mientras '$iterador' tenga elementos validos
                        $estado = $iterador->current() ? $iterador->current() : "vacio"; //Con esta variable preguntamos el estado de la butaca 
                        /*
                         * En la siguiente linea se calcula la fila del asiento dividiendo (el índice actual) por 15 y luego agregando 1 para 
                         * convertirlo en un número de fila basado en 1 y con la función 'intval()' me quedo con la parte entera del resultado
                         */
                        $fila = intval($iterador->key() / 15) + 1; 
                        /*
                         * En esta se calcula el número de asiento en la fila actual usando el resto de 15 y luego sumando 1 para convertirlo 
                         * en un número de asiento basado en 1 y de nuevo usamos la función 'intval()'
                         */
                        $asiento = intval($iterador->key() % 15) + 1; 
                        //Dependiendo del estado modificará la clase del div y con ello su color de fondo
                        echo("<div class='butacas " . $estado . "'> [$fila][$asiento]: " . $estado . "</div>");

                        $iterador->next(); //Con la función 'next()' avanzariamos al siguiente valor del array
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

