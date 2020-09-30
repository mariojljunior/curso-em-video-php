<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloCEV.css">
    <title>Operadores Lógicos</title>
</head>
<body>
    <div>
        <?php
            $ano = $_GET["ano"];
            $idade = 2020 - $ano;
            echo "Quem nasceu em $ano tem idade de $idade anos.<br>";
            $tipo = $idade>=18&&$idade<65?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
            echo "E dessa forma o seu volto é do tipo $tipo!";
        ?>
    </div>
</body>
</html>