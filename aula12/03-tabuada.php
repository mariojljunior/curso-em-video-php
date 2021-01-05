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
            echo "<h4>Calculando a tabuada de $v</h4>";
            $c = $v;
            $mult = 1;
            $r = 0;
            do {
                $r = $mult * $c;
                echo "$v x $mult = $r <br>";
                $mult++;
            }while($mult <= 10);
        ?>
        <br><br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>