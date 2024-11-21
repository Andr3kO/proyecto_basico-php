<?php
class OperadoresAritmeticos {
    public function Aritmeticos()
    {
        echo <<<'EOT'
        <pre>
            Los principales operadores aritméticos en PHP son:
            Suma: (+) Suma dos o más números 
            Resta: (-) Resta dos o más números 
            Multiplicación: (*) Multiplica dos o más números 
            División: (/) Divide dos o más números 
            Módulo: (%) Obtiene el resto de una división 
            Potencia: (**) Eleva un número a una potencia específica 
            Además de los operadores aritméticos, PHP también cuenta con operadores de asignación combinada, que permiten realizar una operación en un solo paso:
            += Suma y asigna
            -= Resta y asigna
            *= Multiplica y asigna
            /= Divide y asigna
            %= Módulo y asigna
            .= Concatenación y asignación 
            El orden de precedencia de los operadores en PHP determina la secuencia en la que se realizan las operaciones. Los paréntesis tienen la mayor precedencia y se evalúan primero. 
        <pre>

        EOT;
    }

}
