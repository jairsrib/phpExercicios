<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Simulador de Empréstimo</title>
</head>

<body>
    <h1>Simulador de Empréstimo</h1>
    <form method="post">
        <label for="valor">valor empréstimo:</label>
        <input type="number" step="0.01" name="valor" id="valor" required><br><br>

        <label for="juros">juros mensal:</label>
        <input type="number" step="0.01" name="juros" id="juros" required><br><br>

        <label for="parcelas">parcelas:</label>
        <input type="number" name="parcelas" id="parcelas" required><br><br>

        <button type="submit">verificar</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST["valor"];
    $juros = $_POST["juros"];
    $parcelas = $_POST["parcelas"];

    $taxaDecimal = $juros / 100;

    $montante = $valor * (1 + ($taxaDecimal * $parcelas));
    $parcelaMensal = $montante / $parcelas;

    echo "<h2>Resultado da Simulação:</h2>";
    echo "<p><strong>valor a pagar:</strong> R$ " . number_format($montante, 2, ',', '.') . "</p>";
    echo "<p><strong>valor da parcela:</strong> R$ " . number_format($parcelaMensal, 2, ',', '.') . "</p>";
}
?>
</body>

</html>
