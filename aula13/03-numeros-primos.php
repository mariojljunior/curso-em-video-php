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
            $n = isset($_GET["num"])?$_GET["num"]:1;
            echo "Analisando se o número $n é primo...";

            $c = 0;
            echo "<br><br>Divisível por: ";
            for ($i=1; $i <= $n; $i++){
                if($n % $i == 0){
                    $c++;
                    echo "$i ";
                }
           }

           if($c==2){
               echo "<br><br>O número $n é primo!!!";
           }else{
               echo "<br><br>O número $n não é primo!!!";
           }
        ?>
        <br><br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>