<?php

include "./Padre.php";


class OperacionesString extends Padre
{
    public function llamarPadre()
    {
        parent::saludo();
    }

    public function funcionesString()
    {
        echo <<<'EOT'
        <pre>
            1.strlen(): Obtiene la longitud de una cadena.
            2.strtolower() y strtoupper(): Convierte una cadena a minúsculas o mayúsculas.
            3.ucfirst() y ucwords(): Capitaliza la primera letra de una cadena o de cada palabra.
            4.trim(), ltrim(), rtrim(): Elimina espacios u otros caracteres al inicio y/o final de una cadena.
            5.substr(): Extrae una parte de una cadena.
            6.strpos() y strrpos(): Encuentra la posición de la primera o última ocurrencia de un texto.
            7.str_replace(): Reemplaza texto dentro de una cadena.
            8.explode(): Divide una cadena en un arreglo.
            9.implode(): Une un arreglo en una cadena.
            10.str_repeat(): Repite una cadena un número específico de veces.
            11.strrev(): Invierte una cadena.
            12.similar_text(): Calcula la similitud entre dos cadenas.
            13.number_format(): Formatea números con separadores de miles y decimales.
            14.htmlspecialchars(): Convierte caracteres especiales a entidades HTML.
            15.md5() y sha1(): Generan hashes para cadenas.
            16.nl2br(): Convierte saltos de línea en etiquetas HTML <br>.
        <pre>

        EOT;
    }
}