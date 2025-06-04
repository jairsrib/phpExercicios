<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Arredondador de Notas</title>
</head>

<body>
    <h1>Arredondador de Notas</h1>
    <form method="post">
        <input type="number" name="nota" step="0.01" placeholder="Nota" required>
        <button type="submit">Arredondar</button>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nota = $_POST['nota'];
    echo "<p>Nota original: $nota</p>";
    echo "<p>Arredondada (round): " . round($nota) . "</p>";
    echo "<p>Para cima (ceil): " . ceil($nota) . "</p>";
    echo "<p>Para baixo (floor): " . floor($nota) . "</p>";
}
?>
