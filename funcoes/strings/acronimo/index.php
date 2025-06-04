<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Funções com Strings</title>
</head>

<body>
<h1>Extrator de Acrônimo</h1>
    <form method="post">
        <input type="text" name="frase_acronimo" placeholder="Frase para acrônimo" required>
        <button type="submit" name="gerar_acronimo">Gerar Acrônimo</button>
    </form>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (isset($_POST['gerar_acronimo'])) {
        $frase = $_POST['frase_acronimo'];
        $palavras = explode(' ', $frase);
        $acronimo = '';
        foreach ($palavras as $palavra) {
            $acronimo .= substr($palavra, 0, 1);
        }
        $acronimo = strtoupper($acronimo);
        echo "<p>Acrônimo: <strong>$acronimo</strong></p>";
    }
}
?>
