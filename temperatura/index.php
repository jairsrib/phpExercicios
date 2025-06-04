<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Temperatura</title>
</head>

<body>
    <h1>Insira uma temperatura em celsius para a conversão</h1>
<form method="post">
        <input type="number" name="celsius" id="celsius" required>
        <button type="submit">verificar</button>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $celsius = $_POST["celsius"];
    $fahrenheit = ($celsius * 9/5) + 32;
    echo "<p><strong>$celsius</strong>° Celsius convertido para Fahrenheit é: <strong>$fahrenheit</strong></p>";
}
?>