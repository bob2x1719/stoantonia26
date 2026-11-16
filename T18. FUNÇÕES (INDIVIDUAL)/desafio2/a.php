<?php
// Funções para cada operação matemática
function adicionar($a, $b) {
    return $a + $b;
}

function subtrair($a, $b) {
    return $a - $b;
}

function multiplicar($a, $b) {
    return $a * $b;
}

function dividir($a, $b) {
    if ($b == 0) {
        return "Erro: não é possível dividir por zero.";
    }
    return $a / $b;
}

$resultado = null;

// Processa os dados quando o formulário é enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = (float) $_POST["num1"];
    $num2 = (float) $_POST["num2"];
    $operacao = $_POST["operacao"];

    switch ($operacao) {
        case "adicao":
            $resultado = adicionar($num1, $num2);
            break;
        case "subtracao":
            $resultado = subtrair($num1, $num2);
            break;
        case "multiplicacao":
            $resultado = multiplicar($num1, $num2);
            break;
        case "divisao":
            $resultado = dividir($num1, $num2);
            break;
        default:
            $resultado = "Operação inválida.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora em PHP</title>
</head>
<body>
    <h2>Calculadora PHP</h2>

    <form method="POST" action="">
        <label for="num1">Primeiro número:</label><br>
        <input type="number" step="any" name="num1" id="num1" required><br><br>

        <label for="num2">Segundo número:</label><br>
        <input type="number" step="any" name="num2" id="num2" required><br><br>

        <label for="operacao">Escolha a operação:</label><br>
        <select name="operacao" id="operacao" required>
            <option value="adicao">ADIÇÃO (+)</option>
            <option value="subtracao">SUBTRAÇÃO (-)</option>
            <option value="multiplicacao">MULTIPLICAÇÃO (×)</option>
            <option value="divisao">DIVISÃO (÷)</option>
        </select><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php if ($resultado !== null): ?>
        <h3>Resultado: <?php echo $resultado; ?></h3>
    <?php endif; ?>
</body>
</html>