<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Soma</title>
</head>

<body>
    <h1>insira 2 numeros para somar</h1>
    <form method="post">
        <input type="number" name="numero1" id="numero1" required>
        <input type="number" name="numero2" id="numero2" required>
        <button type="submit">verificar</button>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $soma = $numero1 + $numero2;
    echo "<p>Soma: <strong>$soma</strong></p>";
}
?>