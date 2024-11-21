<?php
class TiposdeDatos {
    public function Datos()
    {
        echo <<<'EOT'
        <pre>
            En PHP, los tipos de datos representan las diferentes clases de valores que pueden ser manipulados en un programa. Se agrupan en tipos escalares, tipos compuestos y tipos especiales.

            Tipos escalares
            Enteros (integer)
            Representan números enteros positivos o negativos sin decimales.

            Flotantes (float)
            Representan números con decimales o en notación científica.

            Cadenas (string)
            Representan secuencias de caracteres, como palabras, frases o cualquier texto.

            Booleanos (boolean)
            Representan valores lógicos: true (verdadero) o false (falso).

            Tipos compuestos
            Matrices (array)
            Estructuras que pueden almacenar múltiples valores bajo un mismo identificador, indexados numéricamente o asociativamente.

            Objetos (object)
            Representan instancias de clases, que agrupan datos y comportamientos bajo un modelo orientado a objetos.

            Callables
            Representan funciones o métodos que pueden ser invocados.

            Iterables
            Representan estructuras que se pueden recorrer, como arrays u objetos que implementen ciertas interfaces.

            Tipos especiales
            Nulo (null)
            Representa la ausencia de un valor o una variable sin inicializar.

            Recursos (resource)
            Representan referencias a recursos externos, como conexiones a bases de datos o archivos abiertos.
        <pre>

        EOT;
    }

}
