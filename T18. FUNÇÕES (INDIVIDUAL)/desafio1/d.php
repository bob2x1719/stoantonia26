<?php
function calcularFatorial($numero) {
    if ($numero < 0) {
        return "Não existe fatorial de número negativo.";
    }

    $fatorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }

    return $fatorial;
}

// Exemplo de uso:
echo calcularFatorial(5); // Saída: 120