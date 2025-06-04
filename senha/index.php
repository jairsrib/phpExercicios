<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Validação de Senha</title>
</head>

<body>
    <h1>Verificar comprimento da senha</h1>
    <form method="post">
        <label for="senha">Digite uma senha:</label>
        <input type="password" name="senha" id="senha" required>
        <button type="submit">Verificar</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senha = $_POST["senha"];

    if (strlen($senha) >= 8) {
        echo "<p><strong>senha válida</strong> possui 8 ou mais caracteres.</p>";
    } else {
        echo "<p><strong>senha inválida</strong> a senha deve ter pelo menos 8 caracteres.</p>";
    }
}
?>
</body>

</html>
