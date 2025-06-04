<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Calculadora de IMC</title>
</head>

<body>
    <h1>Calculadora de IMC</h1>
    <form method="post">
        <input type="number" name="peso" step="0.01" placeholder="Peso (kg)" required>
        <input type="number" name="altura" step="0.01" placeholder="Altura (m)" required>
        <button type="submit">Calcular</button>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $imc = $peso / pow($altura, 2);
    echo "<p>IMC: <strong>" . number_format($imc, 2) . "</strong></p>";
}
?>