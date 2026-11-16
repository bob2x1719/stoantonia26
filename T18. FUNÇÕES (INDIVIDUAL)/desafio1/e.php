<?php
function calcularValorComDesconto($valorTotal, $percentualDesconto) {
    $desconto = $valorTotal * ($percentualDesconto / 100);
    return $valorTotal - $desconto;
}

// Exemplo de uso:
echo calcularValorComDesconto(200, 15); // Saída: 170