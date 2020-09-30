<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloCEV.css">
    <title>Igual Idêntico</title>
</head>
<body>
    <div>
        <?php
            $a = 3;
            $b = "3";
            $r = $a==$b?"SIM":"NÃO";
            $i = $a===$b?"SIM":"NÃO";
            echo "As variáveis A e B são iguais? $r!<br>";
            echo "As variáveis A e B são idênticas? $i!";
        ?>
    </div>
</body>
</html>