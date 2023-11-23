<!DOCTYPE html>
<!--
	Descripción: CodigoEjercicio27
	Autor: Carlos García Cachón
	Fecha de creación/modificación: 16/11/2023
-->
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Carlos García Cachón">
  <meta name="description" content="CodigoEjercicio25">
  <meta name="keywords" content="CodigoEjercicio, 25">
  <meta name="generator" content="Apache NetBeans IDE 19">
  <meta name="generator" content="60">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Carlos García Cachón</title>
  <link rel="icon" type="image/jpg" href="../webroot/media/images/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../webroot/css/style.css">
    <style>
        .obligatorio {
            background-color: #ffff7a; 
        }
        .bloqueado:disabled {
            background-color: #665 ;
            color: white;
        }
        .error {
            color: red;
            width: 450px;
        }
        input[name="nombreYApellidosObligatorio"] {
            width: 100%;
        }
        textarea {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <header class="text-center">
        <h1>27. Ejercicio extra para probar la plantilla del formulario que ha ganado el concurso:</h1>
    </header>
    <main>
        <div class="container mt-3 text-center">
            <div class="row">
                <div class="col">
                    <?php
                    /**
                    * @author Carlos García Cachón
                    * @version 1.0
                    * @since 16/11/2023
                    */
                    //Incluyo las librerias de validación para comprobar los campos
                    require_once '../core/231018libreriaValidacion.php';
                    
                    //Declaración de constantes por OBLIGATORIEDAD
                    define('OPCIONAL',0);
                    define('OBLIGATORIO',1);
                    
                    //Declaración de los limites para el metodo comprobar ALFABETICO
                    define('TAM_MAX_ALFABETICO',255);
                    define('TAM_MIN_ALFABETICO',1);
                    
                    //Declaración de los limites para el metodo comprobar ENTERO
                    define('TAM_MAX_ENTERO',10);
                    define('TAM_MIN_ENTERO',1);
                    
                    //Declaración de los limites para el metodo comprobar FECHA
                    define('FECHA_MAX',date('d-m-Y'));
                    define('FECHA_MIN',"01/01/1950");
                    
                    //Declaración del limite de alfanumericos dentro del campo TEXTAREA
                    define("TAM_MAX_TEXTO", 255);
                    define("TAM_MIN_TEXTO", 1);
                    
                    //Declaración de un array LISTA
                    $aLista = ['Ni idea','Con la familia','De fiesta','Trabajando','Estudiando DWES'];

                    //Declaración de variables de estructura para validar la ENTRADA de RESPUESTAS o ERRORES
                    //Valores por defecto
                    $entradaOK = true;
                    
                    $aRespuestas = [
                        'nombreYApellidosObligatorio' => "",
                        
                        'fechaNacimientoObligatorio' => "",
                        
                        'radioButtonObligatorio' => "",
                        
                        'rangoDeEnterosObligatorio' => "",
                        
                        'listado5itemsObligatorio' => "",
                        
                        'descripcionObligatorio' => ""
                    ];
                    
                    $aErrores = [
                        'nombreYApellidosObligatorio' => "",
                        
                        'fechaNacimientoObligatorio' => "",
                        
                        'radioButtonObligatorio' => "",
                        
                        'rangoDeEnterosObligatorio' => "",
                        
                        'listado5itemsObligatorio' => "",
                        
                        'descripcionObligatorio' => ""
                    ];
                    //En el siguiente if pregunto si el '$_REQUEST' recupero el valor 'enviar' que enviamos al pulsar el boton de enviar del formulario.
                    if (isset($_REQUEST['enviar'])) {
                        /*
                         * Ahora inicializo cada 'key' del ARRAY utilizando las funciónes de la clase de 'validacionFormularios' , la cuál 
                         * comprueba el valor recibido (en este caso el que recibe la variable '$_REQUEST') y devuelve 'null' si el valor es correcto,
                         * o un mensaje de error personalizado por cada función dependiendo de lo que validemos.
                         */ 
                        $aErrores = [
                            'nombreYApellidosObligatorio' => validacionFormularios::comprobarAlfabetico($_REQUEST['nombreYApellidosObligatorio'], TAM_MAX_ALFABETICO, TAM_MIN_ALFABETICO, OBLIGATORIO),
                            
                            'fechaNacimientoObligatorio' => validacionFormularios::validarFecha($_REQUEST['fechaNacimientoObligatorio'],FECHA_MAX, FECHA_MIN, OBLIGATORIO),
                            
                            'radioButtonObligatorio' => NULL,

                            'rangoDeEnterosObligatorio' => validacionFormularios::comprobarEntero($_REQUEST['rangoDeEnterosObligatorio'], TAM_MAX_ENTERO, TAM_MIN_ENTERO, OBLIGATORIO),
                            
                            'listado5itemsObligatorio' => validacionFormularios::validarElementoEnLista($_REQUEST['listado5itemsObligatorio'], $aLista),
                        
                            'descripcionObligatorio' => validacionFormularios::comprobarAlfanumerico($_REQUEST['descripcionObligatorio'], TAM_MAX_TEXTO, TAM_MIN_TEXTO, OBLIGATORIO)
                        ];
                        
                        /* 
                         * En los siguientes 'if' comprobamos que existe valor dentro de las siguientes variables y en caso negativo mostramos un mensaje error.
                         * Ya que dentro de la función validarElementoLista' no tenemos manera de hacerlo obligatorio, lo hacemos por el siguiente 'if'.
                         */
                        if (!isset($_REQUEST['radioButtonObligatorio'])) {$aErrores['radioButtonObligatorio'] = "Debes elegir al menos 1 opción.";}
                        
                        /*
                         * En este foreach recorremos el array buscando que exista NULL (Los metodos anteriores si son correctos devuelven NULL)
                         * y en caso negativo cambiara el valor de '$entradaOK' a false y borrara el contenido del campo.
                         */
                        foreach ($aErrores as $campo => $error) {
                            if ($error != null) {
                                $_REQUEST[$campo] = "";
                                $entradaOK = false;
                            }
                        }
                    } else {
                        $entradaOK = false;
                    }
                    //En caso de que '$entradaOK' sea true, cargamos las respuestas en el array '$aRespuestas'
                    if ($entradaOK) {
                        $aRespuestas = [
                            'nombreYApellidosObligatorio' => $_REQUEST['nombreYApellidosObligatorio'],
                            
                            'fechaNacimientoObligatorio' => $_REQUEST['fechaNacimientoObligatorio'],
                            
                            'radioButtonObligatorio' => $_REQUEST['radioButtonObligatorio'],
                            
                            'rangoDeEnterosObligatorio' => $_REQUEST['rangoDeEnterosObligatorio'],
                            
                            'listado5itemsObligatorio' => $_REQUEST['listado5itemsObligatorio'],
                            
                            'descripcionObligatorio' => $_REQUEST['descripcionObligatorio'],
                        ];
                        $diasSemana = [
                            'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'
                        ];

                        $meses = [
                            'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'
                        ];

                        $fechaActual = new DateTime();
                        $nombreDia = ucfirst($diasSemana[$fechaActual->format('N') - 1]);
                        $numeroDia = $fechaActual->format('j');
                        $nombreMes = ucfirst($meses[$fechaActual->format('n') - 1]);
                        $ano = $fechaActual->format('Y');

                        $fechaFormateada = $nombreDia . ', ' . $numeroDia . ' de ' . $nombreMes . ' de ' . $ano;

                        // Se muestran por pantalla los valores del formulario
                        $oFecha = new DateTime('now', new DateTimeZone('Europe/Madrid'));
                        
                        $fechaNacimiento = new DateTime($aRespuestas['fechaNacimientoObligatorio']); // Reemplazo con la fecha de nacimiento 
                        $hoy = new DateTime();
                        $edad = $hoy->diff($fechaNacimiento);

                        echo('<div>');
                        echo('Hoy '.$fechaFormateada.' a las <b>'.$oFecha->format('H:i').'</b>.<br>');
                        echo('D. <b>'.$aRespuestas['nombreYApellidosObligatorio'].'</b> nacido hace <b>'.$edad->y.'</b> años se siente <b>'.$aRespuestas['radioButtonObligatorio'].'</b>.<br>');
                        echo('Valora su curso actual con <b>'.$aRespuestas['rangoDeEnterosObligatorio'].'</b> sobre 10.<br>');
                        echo('Estas navidades las dedicará a <b>'.$aRespuestas['listado5itemsObligatorio'].'</b><br>');
                        echo('Y, además, opina que: <br>');
                        echo($aRespuestas['descripcionObligatorio']);
                        echo("</div>");
                    } else {
                    ?>
                    <!-- Codigo del formulario -->
                    <form name="plantilla" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <fieldset>
                            <table>
                                <thead>
                                    <tr>
                                        <th class="rounded-top" colspan="3"><legend>ENCUESTA  INDIVIDUAL DE VALORACIÓN – EJERCICIO 27  UTILIZANDO PLANTILLA DE DESARROLLO DE FORMULARIOS COMO CHURROS</legend></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <!-- Alfabético Obligatorio -->
                                        <td class="d-flex justify-content-start">
                                            <label for="nombreYApellidosObligatorio">Nombre y apellidos del alumno: (*)</label>
                                        </td>
                                        <td>                                                                                                <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                                                                                                                                            comprobamos que exista la variable y no sea 'null'. En el caso verdadero devovleremos el contenido del campo
                                                                                                                                            que contiene '$_REQUEST' , en caso falso sobrescribira el campo a '' .-->
                                            <input class="obligatorio d-flex justify-content-start" type="text" name="nombreYApellidosObligatorio" value="<?php echo (isset($_REQUEST['nombreYApellidosObligatorio']) ? $_REQUEST['nombreYApellidosObligatorio'] : '');  ?>">
                                        </td>
                                        <td class="error">
                                            <?php if (!empty($aErrores['nombreYApellidosObligatorio'])){ echo $aErrores['nombreYApellidosObligatorio'];} ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no esta vacío, si es así, mostramos el error. -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <!-- Fecha Obligatorio -->
                                        <td class="d-flex justify-content-start">
                                            <label for="fechaNacimientoObligatorio">Fecha de nacimiento: (*)</label>
                                        </td>
                                        <td>                                                                                                <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                                                                                                                                            comprobamos que exista la variable y no sea 'null'. En el caso verdadero devovleremos el contenido del campo
                                                                                                                                            que contiene '$_REQUEST' , en caso falso sobrescribira el campo a '' .-->
                                            <input class="obligatorio d-flex justify-content-start" type="text" name="fechaNacimientoObligatorio" value="<?php echo (isset($_REQUEST['fechaNacimientoObligatorio']) ? $_REQUEST['fechaNacimientoObligatorio'] : '');  ?>">
                                        </td>
                                        <td class="error">
                                            <?php if (!empty($aErrores['fechaNacimientoObligatorio'])){ echo $aErrores['fechaNacimientoObligatorio'];} ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no esta vacío, si es así, mostramos el error. -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <!-- Radio Obligatorio -->
                                        <td class="d-flex justify-content-start">
                                            <label for="radioButtonObligatorio">¿Cómo te sientes hoy? (*)</label>
                                        </td>
                                        <td class="obligatorio">                                                                                               
                                            <input type="radio" id="rbMuyMal" name="radioButtonObligatorio" value="MuyMal" <?php if(is_null($aErrores['radioButtonObligatorio']) && isset($_REQUEST['radioButtonObligatorio']) && $_REQUEST['radioButtonObligatorio']=='MuyMal'){ echo 'checked';}?>> <!-- Si el campo es correcto se queda seleccionado. -->
                                            <label for="radioButtonObligatorio">MUY MAL</label><br>
                                            <input type="radio" id="rbMal" name="radioButtonObligatorio" value="Mal" <?php if(is_null($aErrores['radioButtonObligatorio']) && isset($_REQUEST['radioButtonObligatorio']) && $_REQUEST['radioButtonObligatorio']=='Mal'){ echo 'checked';}?>> <!-- Si el campo es correcto se queda seleccionado. -->
                                            <label for="radioButtonObligatorio">MAL</label><br>
                                            <input type="radio" id="rbRegular" name="radioButtonObligatorio" value="Regular" <?php if(is_null($aErrores['radioButtonObligatorio']) && isset($_REQUEST['radioButtonObligatorio']) && $_REQUEST['radioButtonObligatorio']=='Regular'){ echo 'checked';}?>> <!-- Si el campo es correcto se queda seleccionado. -->
                                            <label for="radioButtonObligatorio">REGULAR</label><br>
                                            <input type="radio" id="rbBien" name="radioButtonObligatorio" value="Bien" <?php if(is_null($aErrores['radioButtonObligatorio']) && isset($_REQUEST['radioButtonObligatorio']) && $_REQUEST['radioButtonObligatorio']=='Bien'){ echo 'checked';}?>> <!-- Si el campo es correcto se queda seleccionado. -->
                                            <label for="radioButtonObligatorio">BIEN</label><br>
                                            <input type="radio" id="rbMuyBien" name="radioButtonObligatorio" value="MuyBien" <?php if(is_null($aErrores['radioButtonObligatorio']) && isset($_REQUEST['radioButtonObligatorio']) && $_REQUEST['radioButtonObligatorio']=='MuyBien'){ echo 'checked';}?>> <!-- Si el campo es correcto se queda seleccionado. -->
                                            <label for="radioButtonObligatorio">MUY BIEN</label>                                            
                                        </td>
                                        <td class="error">
                                            <?php if (!empty($aErrores['radioButtonObligatorio'])){ echo $aErrores['radioButtonObligatorio'];} ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no esta vacío, si es así, mostramos el error. -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <!-- Entero Obligatorio -->
                                        <td class="d-flex justify-content-start">
                                            <label for="rangoDeEnterosObligatorio">¿Cómo va el curso? [0-10](*)</label>
                                        </td>
                                        <td>                                                                                                <!-- El value contiene una operador ternario en el que por medio de un metodo 'isset()'
                                                                                                                                            comprobamos que exista la variable y no sea 'null'. En el caso verdadero devovleremos el contenido del campo
                                                                                                                                            que contiene '$_REQUEST' , en caso falso sobrescribira el campo a '' .-->
                                            <input class="obligatorio d-flex justify-content-start" type="text" name="rangoDeEnterosObligatorio" value="<?php echo (isset($_REQUEST['rangoDeEnterosObligatorio']) ? $_REQUEST['rangoDeEnterosObligatorio'] : '');  ?>">
                                        </td>
                                        <td class="error">
                                            <?php if (!empty($aErrores['rangoDeEnterosObligatorio'])){ echo $aErrores['rangoDeEnterosObligatorio'];} ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no esta vacío, si es así, mostramos el error. -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <!-- Lista Obligatorio -->
                                        <td class="d-flex justify-content-start">
                                            <label for="listado5itemsObligatorio">¿Cómo se presentan las vaciones de navidad? (*)</label>
                                        </td>
                                        <td>                                                                                                
                                            <select class="obligatorio" name="listado5itemsObligatorio">
                                                <option value="Ni idea" <?php if(isset($_REQUEST['listado5itemsObligatorio'])){ echo 'selected'; }?>>Ni idea</option> <!-- Si el campo es correcto se queda seleccionado. -->
                                                <option value="Con la familia" <?php if(isset($_REQUEST['listado5itemsObligatorio'])){ echo 'selected'; }?>>Con la familia</option> <!-- Si el campo es correcto se queda seleccionado. -->
                                                <option value="De fiesta" <?php if(isset($_REQUEST['listado5itemsObligatorio'])){ echo 'selected'; }?>>De fiesta</option> <!-- Si el campo es correcto se queda seleccionado. -->
                                                <option value="Trabajando" <?php if(isset($_REQUEST['listado5itemsObligatorio'])){ echo 'selected'; }?>>Trabajando</option> <!-- Si el campo es correcto se queda seleccionado. -->
                                                <option value="Estudiando DWES" <?php if(isset($_REQUEST['listado5itemsObligatorio'])){ echo 'selected'; }?>>Estudiando DWES</option> <!-- Si el campo es correcto se queda seleccionado. -->
                                          </select> 
                                        </td>
                                        <td class="error">
                                            <?php if (!empty($aErrores['listado5itemsObligatorio'])){ echo $aErrores['listado5itemsObligatorio'];} ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no esta vacío, si es así, mostramos el error. -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <!-- TextArea Obligatorio -->
                                        <td class="d-flex justify-content-start">
                                            <label for="descripcionObligatorio">Describe brevemente tu estado de ánimo: (*)</label>
                                        </td>
                                        <td>                                                                                                    <!-- En el siguiente 'if' comprobamos que en el array '$aErrores' , guarde valor 'NULL' y que la variable ese declarada y sin 
                                                                                                                                                     ausencia de valor, si es así, devuelvo el contenido almacenado en '$_REQUEST['textAreaObligatorio']' -->                                                                            
                                            <textarea class="obligatorio d-flex justify-content-start" rows="4" cols="50" name="descripcionObligatorio" ><?php if ($aErrores['descripcionObligatorio'] == null && isset($_REQUEST['descripcionObligatorio'])) {echo ($_REQUEST['descripcionObligatorio']);}?></textarea>
                                        </td>
                                        <td class="error">
                                            <?php if (!empty($aErrores['descripcionObligatorio'])){ echo $aErrores['descripcionObligatorio'];} ?> <!-- Aquí comprobamos que el campo del array '$aErrores' no esta vacío, si es así, mostramos el error. -->
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

