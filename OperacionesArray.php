<?php
class OperacionesArray {
    public function Array()
    {
        echo <<<'EOT'
        <pre>
            Tabla de contenidos 
                array — Crea un array
                array_all — Checks if all array elements satisfy a callback function
                array_any — Checks if at least one array element satisfies a callback function
                array_change_key_case — Cambia a mayúsculas o minúsculas todas las claves en un array
                array_chunk — Divide un array en fragmentos
                array_column — Devuelve los valores de una sola columna del array de entrada
                array_combine — Crea un nuevo array, usando una matriz para las claves y otra para sus valores
                array_count_values — Cuenta todos los valores de un array
                array_diff — Calcula la diferencia entre arrays
                array_diff_assoc — Calcula la diferencia entre arrays con un chequeo adicional de índices
                array_diff_key — Calcula la diferencia entre arrays empleando las claves para la comparación
                array_diff_uassoc — Calcula la diferencia entre arrays con un chequeo adicional de índices que se realiza por una función de devolución de llamada suministrada por el usuario
                array_diff_ukey — Calcula la diferencia entre arrays usando una función de devolución de llamada en las keys para comparación
                array_fill — Llena un array con valores
                array_fill_keys — Llena un array con valores, especificando las keys
                array_filter — Filtra elementos de un array usando una función de devolución de llamada
                array_find — Returns the first element satisfying a callback function
                array_find_key — Returns the key of the first element satisfying a callback function
                array_flip — Intercambia todas las claves de un array con sus valores asociados
                array_intersect — Calcula la intersección de arrays
                array_intersect_assoc — Calcula la intersección de arrays con un chequeo adicional de índices
                array_intersect_key — Calcula la intersección de arrays usando sus claves para la comparación
                array_intersect_uassoc — Calcula la intersección de arrays con una comprobación adicional de índices, los cuales se comparan con una función de retrollamada
                array_intersect_ukey — Calcula la intersección de arrays usando una función de devolución de llamada en las claves para la comparación
                array_is_list — Checks whether a given array is a list
                array_key_exists — Verifica si el índice o clave dada existe en el array
                array_key_first — Obtiene la primera clave de un array
                array_key_last — Obtiene la última clave de un array
                array_keys — Devuelve todas las claves de un array o un subconjunto de claves de un array
                array_map — Aplica la retrollamada a los elementos de los arrays dados
                array_merge — Combina dos o más arrays
                array_merge_recursive — Une dos o más arrays recursivamente
                array_multisort — Ordena varios arrays, o arrays multidimensionales
                array_pad — Rellena un array a la longitud especificada con un valor
                array_pop — Extrae el último elemento del final del array
                array_product — Calcula el producto de los valores de un array
                array_push — Inserta uno o más elementos al final de un array
                array_rand — Seleccionar una o más claves aleatorias de un array
                array_reduce — Reduce iterativamente un array a un solo valor usando una función llamada de retorno
                array_replace — Reemplaza los elementos del array original con elementos de array adicionales
                array_replace_recursive — Reemplaza los elementos de los arrays pasados al primer array de forma recursiva
                array_reverse — Devuelve un array con los elementos en orden inverso
                array_search — Busca un valor determinado en un array y devuelve la primera clave correspondiente en caso de éxito
                array_shift — Quita un elemento del principio del array
                array_slice — Extraer una parte de un array
                array_splice — Elimina una porción del array y la reemplaza con otra cosa
                array_sum — Calcular la suma de los valores de un array
                array_udiff — Computa la diferencia entre arrays, usando una llamada de retorno para la comparación de datos
                array_udiff_assoc — Computa la diferencia entre arrays con una comprobación de indices adicional, compara la información mediante una función de llamada de retorno
                array_udiff_uassoc — Computa la diferencia entre arrays con una verificación de índices adicional, compara la información y los índices mediante una función de llamada de retorno
                array_uintersect — Computa una intersección de arrays, compara la información mediante una función de llamada de retorno
                array_uintersect_assoc — Calcula la intersección de arrays con una comprobación de índices adicional, compara la información mediante una función de retrollamada
                array_uintersect_uassoc — Calcula la intersección de arrays con una comprobación de índices adicional, compara la información y los índices mediante funciones de retrollamada por separado
                array_unique — Elimina valores duplicados de un array
                array_unshift — Añadir al inicio de un array uno a más elementos
                array_values — Devuelve todos los valores de un array
                array_walk — Aplicar una función proporcionada por el usuario a cada miembro de un array
                array_walk_recursive — Aplicar una función de usuario recursivamente a cada miembro de un array
                arsort — Ordena un array en orden inverso y mantiene la asociación de índices
                asort — Ordena un array y mantiene la asociación de índices
                compact — Crear un array que contiene variables y sus valores
                count — Cuenta todos los elementos de un array o algo de un objeto
                current — Devuelve el elemento actual en un array
                each — Devolver el par clave/valor actual de un array y avanzar el cursor del array
                end — Establece el puntero interno de un array a su último elemento
                extract — Importar variables a la tabla de símbolos actual desde un array
                in_array — Comprueba si un valor existe en un array
                key — Obtiene una clave de un array
                key_exists — Alias de array_key_exists
                krsort — Ordena un array por clave en orden inverso
                ksort — Ordena un array por clave
                list — Asignar variables como si fueran un array
                natcasesort — Ordenar un array usando un algoritmo de "orden natural" insensible a mayúsculas-minúsculas
                natsort — Ordena un array usando un algoritmo de "orden natural"
                next — Avanza el puntero interno de un array
                pos — Alias de current
                prev — Rebobina el puntero interno del array
                range — Crear un array que contiene un rango de elementos
                reset — Establece el puntero interno de un array a su primer elemento
                rsort — Ordena un array en orden inverso
                shuffle — Mezcla un array
                sizeof — Alias de count
                sort — Ordena un array
                uasort — Ordena un array con una función de comparación definida por el usuario y mantiene la asociación de índices
                uksort — Ordena un array según sus claves usando una función de comparación definida por el usuario
                usort — Ordena un array según sus valores usando una función de comparación definida por el usuario
        <pre>

        EOT;
    }

}
