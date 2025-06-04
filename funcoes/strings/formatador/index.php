<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Funções com Strings</title>
</head>

<body>
<h1>Formatador de Títulos</h1>
    <form method="post">
        <input type="text" name="titulo" placeholder="Texto em minúsculo" required>
        <button type="submit" name="formatar_titulo">Formatar</button>
    </form>
</body>

</html>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (isset($_POST['formatar_titulo'])) {
        $titulo = strtolower($_POST['titulo']);
        $tituloFormatado = ucwords($titulo);
        echo "<p>Título formatado: <strong>$tituloFormatado</strong></p>";
    }
    }
?>
