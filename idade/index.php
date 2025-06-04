<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Idade</title>
</head>

<body>
    <h1>Insira seu ano de nascimento</h1>
<form method="post">
        <input type="number" name="ano" id="ano" required>
        <button type="submit">verificar</button>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ano = $_POST["ano"];
    $currentYear = date("Y");
    $idade = $currentYear - $ano;
    echo "<p>Idade: <strong>$idade</strong></p>";
}
?>