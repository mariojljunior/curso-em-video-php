<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <div>
        <?php
            $preco = $_GET["p"];
            echo "O preço do produto é R$ $preco";
            $preco = $preco + ($preco*10/100);
            echo "<br>E o novo preço com 10% de aumento será R$ $preco"
        ?>
    </div>
</body>
</html>