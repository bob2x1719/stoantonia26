<?php
function verificarParOuImpar($numero) {
    if ($numero % 2 == 0) {
        return "Par";
    } else {
        return "Ímpar";
    }
}

// Exemplo de uso:
echo verificarParOuImpar(4); // Saída: Par
echo verificarParOuImpar(7); // Saída: Ímpar