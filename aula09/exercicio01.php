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
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date("Y") - $a;
            echo "Você nasceu em $a e terá $i anos. <br>";

            if($i >= 18){
                $v = "Já pode votar";
                $d = "Já pode dirigir";
            }else{
                $v = "Não pode votar";
                $d = "Não pode dirigir";
            }
            echo "Com essa idade você $v e também $d";
        ?>
        <br><br>
        <a href="exercicio01.html">Voltar</a>
    </div>
</body>
</html>