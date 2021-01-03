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
            $i = isset($_GET["incremento"])?$_GET["incremento"]:0;
            $inicio = isset($_GET["inicio"])?$_GET["inicio"]:0;
            $final = isset($_GET["final"])?$_GET["final"]:0;

            if($inicio < $final){
                while($inicio <= $final){
                    echo $inicio." ";
                    $inicio += $i;
                }
            }elseif($inicio > $final){
                while($inicio >= $final){
                    echo $inicio." ";
                    $inicio -= $i;
                }
            }elseif($inicio == $final){
                echo "Os números não podem ser iguais.";
            }

        ?>
        <br><br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>