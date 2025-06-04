<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Funções com Strings</title>
</head>

<body>
    <h1>Gerador de Nome de Usuário</h1>
        <form method="post">
            <input type="text" name="nomeCompleto" placeholder="Nome completo" required>
            <button type="submit" name="gerar_usuario">Gerar</button>
        </form>
    </body>


</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gerador de Nome de Usuário
    if (isset($_POST['gerar_usuario'])) {
        $nome = trim($_POST['nomeCompleto']);
        $nome = strtolower($nome);
        $usuario = str_replace(' ', '.', $nome);
        echo "<p>Nome de usuário: <strong>$usuario</strong></p>";
    }
    }
?>