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
            function soma ($a, $b){
                $s = $a + $b;
                return $s;
            }

            $x = 3;
            $y = 4;
            $r = soma($x, $y);
            echo "A soma entre $x e $y é igual a $r";
        ?>
    </div>
</body>
</html>