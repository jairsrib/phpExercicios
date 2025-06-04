<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>IMC</title>
</head>

<body>
    <h1>Insira seu peso e altura em centimetros</h1>
    <form method="post">
        <input type="number" name="peso" id="peso" required>
        <input type="number" name="altura" id="altura" required>
        <button type="submit">verificar</button>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $alturaM = $altura / 100;
    $imc = number_format($peso / $alturaM ** 2, 1);

    echo "<p>O seu IMC é: <strong>$imc</strong></p>";
}
?>