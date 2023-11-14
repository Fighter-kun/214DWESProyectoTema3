<!DOCTYPE html>
<!--
	Descripción: CodigoEjercicio23
	Autor: Carlos García Cachón
	Fecha de creación/modificación: 23/10/2023
-->
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Carlos García Cachón">
  <meta name="description" content="CodigoEjercicio23">
  <meta name="keywords" content="CodigoEjercicio, 23">
  <meta name="generator" content="Apache NetBeans IDE 19">
  <meta name="generator" content="60">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Carlos García Cachón</title>
  <link rel="icon" type="image/jpg" href="../webroot/media/images/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../webroot/css/style.css">
    <style>
        table , tr , td {
            width: 10px;
        }
        table {
            margin-left: 40%;
        }
        input[name="nombre"] , input[name="fecha"] {
            background-color: yellow;
        }
    </style>
</head>

<body>
    <header class="text-center">
        <h1>23. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; 
            en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente:</h1>
    </header>
    <main>
        <div class="container mt-3 text-center">
            <div class="row">
                <div class="col">
                    <?php
                    /**
                    * @author Carlos García Cachón
                    * @version 1.0 
                    * @since 24/10/2023
                    */
                    //Incluyo las librerias de validación para comprobar los campos
                    require_once '../core/231018libreriaValidacion.php';
                    //Inicializo las variables
                    $fechaActualFormateada = date('d-m-Y');
                    $entradaOK = true;
                    $aRespuestas = ['nombre'=> "",'fechaNac'=> "",'hora'=> ""];
                    $aErrores = ['nombre'=> "",'fechaNac'=> "",'hora'=> ""];
                    //En el siguiente if pregunto si el '$_REQUEST' recupero el valor 'enviar' que enviamos al pulsar el boton de enviar del formulario.
                    if (isset($_REQUEST['enviar'])) {
                        //Inicializo el array con los mensajes de error. (Los metodos que uso en caso de no validar devuelven un mensaje de error.)
                        $aErrores = [
                            'nombre' => validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'],20,3,1),
                            'fechaNac' => validacionFormularios::validarFecha($_REQUEST['fecha'],$fechaActualFormateada,"01/01/1950",1),
                            'hora' => validacionFormularios::validarFormatoHora($_REQUEST['hora'])
                        ];
                        //En este foreach recoremos el array buscando que exista NULL (Los metodos anteriores si son correctos devuelven NULL)
                        //Y en caso negativo cambiara el valor de '$entradaOK' a false
                        foreach ($aErrores as $key => $value) {
                            if ($value != null) {
                                $entradaOK = false;
                            }
                        }
                    } else {
                        $entradaOK = false;
                    }
                    //En caso de que '$entradaOK' sea true, cargamos las respuestas en el array '$aRespuestas'
                    if ($entradaOK) {
                        $aRespuestas = [
                            'nombre' => $_REQUEST['nombre'],
                            'fechaNac' => $_REQUEST['fecha'],
                            'hora' => $_REQUEST['hora']
                        ];
                        //Aqui recoremos el array mostrando los valores alamacenados en el array anterior
                        echo "<h2>Respuestas:</h2>";
                        foreach ($aRespuestas as $key => $value) {
                            echo "$key : $value <br>";
                        }
                    } else {
                    ?>
                    <!-- Codigo del formulario -->
                    <form name="cuestionario2" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <fieldset>
                            <table>
                                <thead>
                                   <legend>Cuestionario 2</legend> 
                                </thead>
                                <tbody>
                                    <tr>
                                    <td><label for="nombre">Nombre:</label></td>
                                    <td>
                                        <input type="text" name="nombre">
                                        <?php if (!empty($aErrores['nombre'])){ ?>
                                        <span style="color: red;">
                                        <?php echo $aErrores['nombre']; ?></span>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="fecha">Fecha de nacimiento:</label></td>
                                    <td>
                                        <input type="text" name="fecha">
                                        <?php if (!empty($aErrores['fechaNac'])){ ?>
                                        <span style="color: red;">
                                        <?php echo $aErrores['fechaNac']; ?></span>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="hora">Hora:</label></td>
                                    <td>
                                        <input type="text" name="hora">
                                        <?php if (!empty($aErrores['hora'])){ ?>
                                        <span style="color: red;">
                                        <?php echo $aErrores['hora']; ?></span>
                                        <?php } ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <button type="submit" name="enviar">Enviar</button>
                        </fieldset>
                    </form>
                    <?php 
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

