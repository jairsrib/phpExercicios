<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Funções com Strings</title>
</head>

<body>
<h1>Censurador de Palavras</h1>
    <form method="post">
        <input type="text" name="frase" placeholder="Frase" required>
        <input type="text" name="palavra" placeholder="Palavra a censurar" required>
        <button type="submit" name="censurar">Censurar</button>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (isset($_POST['censurar'])) {
        $frase = $_POST['frase'];
        $palavra = $_POST['palavra'];
        $fraseCensurada = str_ireplace($palavra, '***', $frase);
        echo "<p>Frase censurada: <strong>$fraseCensurada</strong></p>";
    }
}
?>