<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/styles.css">
    <title>Sorteio de Desconto</title>
</head>

<body>
    <h1>Sorteio de Desconto</h1>
    <form method="post">
        <input type="number" name="preco" step="0.01" placeholder="Preço do Produto" required>
        <button type="submit">Sortear</button>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $preco = $_POST['preco'];
    $desconto = rand(5, 25);
    $valorFinal = $preco - ($preco * $desconto / 100);
    echo "<p>Preço original: R$" . number_format($preco, 2, ',', '.') . "</p>";
    echo "<p>Desconto: $desconto%</p>";
    echo "<p>Preço com desconto: R$" . number_format($valorFinal, 2, ',', '.') . "</p>";
}
?>
