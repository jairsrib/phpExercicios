<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Múltiplos</title>
</head>

<body>
    <h1>Exibir 10 primeiros múltiplos</h1>
    <form method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Verificar</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    echo "<h2>Os 10 primeiros múltiplos de <strong>$numero</strong> são:</h2>";
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        $multiplo = $numero * $i;
        echo "<li>$multiplo</li>";
    }
    echo "</ul>";
}
?>
</body>

</html>
