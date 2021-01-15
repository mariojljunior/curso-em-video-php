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
            $nome = "   josé da silva   ";
            echo(strlen($nome));
            $novo = trim($nome);
            echo($novo);
            echo(strlen($novo));

            //05 trim : elimina os espaços no começo e no final da frase.
            //06 ltrim : elimina os espaços à esquerda.
            //07 rtrim : elimina os espaços à direita.
        ?>
        <br><br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>