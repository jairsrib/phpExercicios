<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Impar ou par</title>
</head>

<body>
    <form method="post">
        <label for="numero">Digite um numero:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">verificar</button>
    </form>
    </body>

</html>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        if ($numero % 2 == 0) {
            echo "<p>o numero <strong>$numero</strong> é par</p>";
        } else {
            echo "<p>o numero <strong>$numero</strong> é impar</p>";
        }
    }
    ?>
