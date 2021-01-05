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
            $c=10;
            do{
                echo $c." ";
                $c-=1;
            }while($c>=1);
        ?>
        <br><br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>