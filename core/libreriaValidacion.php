<?php
/*
 * @author Versión 1.0 Carlos García Cachón
 * @category Validación
 * @package  Validación
 * @source ClaseValidacion.php
 */

/*
 * Clase Validacion donde hay diferentes metodos para validar el formato de la Hora
 */
class Validacion {
    //Función para validar una hora con formato "hh:mm"


//Función para validar una hora con formato "hh:mm:ss"
public static function validarFormatoHoraConSegundos($hora) {
    //Expresión regular para el formato de hora hh:mm:ss
    $patron = '/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]$/';

    /*
     * Para verificar si la cadena cumple con el patrón usamos el metodo 'preg_match' que permite 
     * verificar si una cadena cumple con un patrón específico definido mediante una expresión regular.
     */
    if (preg_match($patron, $hora)) {
        return true;
    } else {
        return false;
    }
}
}



