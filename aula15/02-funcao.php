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
            #include "funcoes.php";
            require "funcoes2.php";

            echo "<h1>Testando novas funções</h1>";
            ola();
            mostrarValor(4);
            echo "<h2>Finalizando Programa...</h2>";
        ?>
        <br><br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>