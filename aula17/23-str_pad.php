<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estiloCEV.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $nome = "Guanabara";
            $novo = str_pad($nome, 30, "x", STR_PAD_RIGHT);
            print("<br>Meu professor $novo é legal. RIGHT");

            $nome = "Guanabara";
            $novo = str_pad($nome, 30, "x", STR_PAD_LEFT);
            print("<br>Meu professor $novo é legal. LEFT");

            $nome = "Guanabara";
            $novo = str_pad($nome, 30, "x", STR_PAD_BOTH);
            print("<br>Meu professor $novo é legal. BOTH");
        ?>
        <br><br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>