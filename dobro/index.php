<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Dobro</title>
</head>

<body>
    <h1>insira 1 numero para dobrar</h1>
    <form method="post">
    <input type="number" name="numero" id="numero" required>
        <button type="submit">verificar</button>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    $dobro = $numero * 2;
    echo "<p>dobro: <strong>$dobro</strong></p>";
}
?>