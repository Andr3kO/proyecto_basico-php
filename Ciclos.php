<?php
class Ciclos {
    public function Ciclo()
    {
        echo <<<'EOT'
        <pre>
            En PHP, los ciclos (o bucles) permiten ejecutar un bloque de código varias veces de forma repetitiva mientras se cumpla una condición. Esto es útil cuando necesitas realizar tareas repetitivas, como recorrer arrays o realizar cálculos. Los principales tipos de ciclos en PHP son:

            1. for
            El ciclo for se utiliza cuando se conoce de antemano cuántas veces se debe ejecutar el código. Es ideal para iteraciones con un número definido de repeticiones, como recorrer un rango de números.

            2. while
            El ciclo while ejecuta un bloque de código mientras se cumpla una condición. Si la condición no es verdadera al principio, el código dentro del while no se ejecutará.

            3. do...while
            Este ciclo es similar al while, pero la diferencia es que la condición se evalúa después de ejecutar el bloque de código. Esto asegura que el código dentro del ciclo se ejecute al menos una vez, incluso si la condición es falsa desde el principio.

            4. foreach
            El ciclo foreach es específico para recorrer arrays. Es una forma sencilla de iterar sobre los elementos de un array, sin necesidad de preocuparse por los índices. Es especialmente útil para trabajar con arrays asociativos o indexados.

            5. break
            La instrucción break se usa para salir de un ciclo antes de que se haya completado su número de iteraciones, generalmente cuando se cumple una condición de terminación.

            6. continue
            La instrucción continue se utiliza para saltar la iteración actual de un ciclo y continuar con la siguiente. Esto puede ser útil si necesitas omitir ciertas iteraciones según una condición.

            7. Ciclos anidados
            Puedes colocar ciclos dentro de otros ciclos (ciclos anidados). Esto es útil cuando necesitas realizar operaciones repetitivas dentro de otra repetición, como recorrer una matriz de datos (array multidimensional).

            Resumen de cuándo usar cada ciclo:
            for: Cuando sabes cuántas veces necesitas iterar.
            while: Cuando la condición de iteración se evalúa antes de la primera ejecución.
            do...while: Cuando necesitas ejecutar el código al menos una vez antes de verificar la condición.
            foreach: Ideal para recorrer arrays de manera sencilla.
            Estos ciclos te permiten manejar repeticiones de manera eficiente, adaptándose a diferentes escenarios y necesidades en tu código PHP.
        <pre>

        EOT;
    }

}
