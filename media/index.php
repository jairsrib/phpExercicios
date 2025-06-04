<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Media</title>
</head>

<body>
    <h1>calcular media</h1>
<form method="post">
        <input type="number" name="numero1" id="numero1" required>
        <input type="number" name="numero2" id="numero2" required>
        <input type="number" name="numero3" id="numero3" required>
        <button type="submit">verificar</button>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $numero3 = $_POST["numero3"];
    $media = ($numero1 + $numero2 + $numero3) /3;
        echo "<p>Média: <strong>$media</strong></p>";
}
?>