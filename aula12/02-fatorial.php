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
            $v = isset($_GET["val"])?$_GET["val"]:1;
            echo "<h1>Calculando o valor de $v</h1>";
            $c = $v;
            $fat = 1;
            do {
                $fat = $fat * $c;
                $c--;
            }while($c >= 1);
            echo "<h2>$v ! = $fat</h2>";
        ?>
        <br><br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>