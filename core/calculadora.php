<?php
/**
* @author Carlos García Cachón
* @version 1.0 
* @since 17/10/2023
*/
//Función Calculadora para hacer sumar, restar, multiplicar y dividir.
function suma($a, $b) {
    return $a + $b;
}

function resta($a, $b) {
    return $a - $b;
}

function multiplicar($a, $b) {
    return $a * $b;
}

function dividir($a, $b) {
    if($b==0) {
        return null;
    }
    return $a / $b;
}