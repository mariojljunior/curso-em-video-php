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
            $d = isset($_GET["ds"])?$_GET["ds"]:0;
            switch ($d){
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e anda!!!";
                    break;
                case 7:
                case 8:
                    echo "Descansar.";
                    break;
                default:
                    echo "Dia invalido.";
            }
        ?>
        <br><br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>