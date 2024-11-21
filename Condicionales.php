<?php
class Condicionales {
    public function Condi()
    {
        echo <<<'EOT'
        <pre>
            En PHP, las condicionales permiten ejecutar diferentes bloques de código dependiendo de si se cumple o no una condición específica. Estas son fundamentales para la toma de decisiones dentro de un programa. Los principales tipos de estructuras condicionales en PHP son:

            1. if
            La estructura más básica de una condicional, que permite ejecutar un bloque de código si se cumple una condición especificada.

            2. else
            Se utiliza junto con if para definir un bloque de código que se ejecutará cuando la condición no se cumpla.

            3. elseif / else if
            Permite verificar múltiples condiciones, ejecutando diferentes bloques de código según cuál condición sea verdadera. Funciona como una extensión del if.

            4. switch
            Es una estructura de control que evalúa una expresión y compara su valor con diferentes posibles valores predefinidos. Si se encuentra una coincidencia, ejecuta el bloque de código correspondiente a ese valor. Es útil cuando se tiene que comparar una variable con muchos valores diferentes.

            5. Operadores de comparación
            Se usan dentro de las condicionales para comparar valores y determinar si la condición se cumple. Algunos de los más comunes son:

            ==: Igual a
            !=: Diferente de
            <: Menor que
            >: Mayor que
            <=: Menor o igual que
            >=: Mayor o igual que
            ===: Igual a (valor y tipo)
            !==: Diferente (valor y tipo)
            6. Operadores lógicos
            Son utilizados para combinar múltiples condiciones dentro de una estructura condicional:

            &&: Y lógico (ambas condiciones deben ser verdaderas)
            ||: O lógico (al menos una de las condiciones debe ser verdadera)
            !: No lógico (invierte el valor de una condición)
            7. Condicionales ternarias
            Es una forma compacta de escribir una estructura if-else. La expresión condicional se evalúa y se devuelve un valor dependiendo de si es verdadera o falsa.

            Estas estructuras permiten que el flujo del programa se desvíe de acuerdo a condiciones específicas, haciendo que el código sea más dinámico y flexible en la ejecución de tareas.
        <pre>

        EOT;
    }

}