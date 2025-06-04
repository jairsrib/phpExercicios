<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Calculadora de Hipotenusa</title>
</head>

<body>
    <h1>Calculadora de Hipotenusa</h1>
    <form method="post">
        <input type="number" name="catetoA" step="0.01" placeholder="Cateto A" required>
        <input type="number" name="catetoB" step="0.01" placeholder="Cateto B" required>
        <button type="submit">Calcular</button>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['catetoA'];
    $b = $_POST['catetoB'];
    $hipotenusa = sqrt(pow($a, 2) + pow($b, 2));
    echo "<p>Hipotenusa: <strong>" . number_format($hipotenusa, 2) . "</strong></p>";
}
?>
