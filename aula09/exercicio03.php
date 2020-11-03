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
            $nome = isset($_GET["nomeAluno"])?$_GET["nomeAluno"]:"Aluno desconhecido";
            $n1 = isset($_GET["nota01"])?$_GET["nota01"]:0;
            $n2 = isset($_GET["nota02"])?$_GET["nota02"]:0;
            $n3 = isset($_GET["nota03"])?$_GET["nota03"]:0;

            $media = ($n1+$n2+$n3)/3;

            if($media >= 7){
                echo " O aluno $nome está aprovado com média $media";
                echo "<br>Parabéns!!!!";
            }elseif($media >= 5 && $media < 7){
                echo " O aluno $nome está de PF com média $media";
            }elseif($media < 5){
                echo " O aluno $nome está reprovado com média $media";
            }

        ?>
        <br><br>
        <a href="exercicio03.html">Voltar</a>
    </div>
</body>
</html>