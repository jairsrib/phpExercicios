<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Fatorial</title>
</head>

<body>
    <h1>Calcular Fatorial</h1>
    <form method="post">
        <label for="numero">Digite um número inteiro positivo:</label>
        <input type="number" name="numero" id="numero" min="0" required>
        <button type="submit">Calcular</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];

    if ($numero < 0) {
        echo "<p>Por favor, digite um número inteiro positivo.</p>";
    } else {
        $fatorial = 1;

        for ($i = 1; $i <= $numero; $i++) {
            $fatorial *= $i;
        }

        echo "<p>O fatorial de <strong>$numero</strong> é: <strong>$fatorial</strong></p>";
    }
}
?>
</body>

</html>
