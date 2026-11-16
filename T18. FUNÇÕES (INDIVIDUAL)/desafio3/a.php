<?php
function verificarAceitacao($nome, $sexo, $idade) {
    $nomeSeguro = htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');

    if ($sexo === "feminino" && $idade < 25) {
        return "$nomeSeguro: ACEITA";
    } else {
        return "$nomeSeguro: NÃO ACEITA";
    }
}

$mensagem = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"]);
    $sexo = $_POST["sexo"];
    $idade = (int) $_POST["idade"];

    $mensagem = verificarAceitacao($nome, $sexo, $idade);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Desafio PHP</title>
</head>
<body>
    <h2>Cadastro</h2>

    <form method="POST" action="">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" id="nome" required><br><br>

        <label for="sexo">Sexo:</label><br>
        <select name="sexo" id="sexo" required>
            <option value="">Selecione...</option>
            <option value="feminino">Feminino</option>
            <option value="masculino">Masculino</option>
        </select><br><br>

        <label for="idade">Idade:</label><br>
        <input type="number" name="idade" id="idade" min="0" required><br><br>

        <button type="submit">Verificar</button>
    </form>

    <?php if ($mensagem !== null): ?>
        <h3><?php echo $mensagem; ?></h3>
    <?php endif; ?>
</body>
</html>