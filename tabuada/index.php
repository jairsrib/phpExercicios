<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>

<body>
    <h1></h1>
    <form method="post">
        <input type="number" name="numero1" id="numero1" required>
        <button type="submit">verificar</button>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    echo "<h2>Tabuada</h2> ";
    for ($i = 0; $i <= 10; $i++) {
        $calc = $i * $numero1;
        echo "$i X $numero1 = $calc <br>";
    }
}
?>