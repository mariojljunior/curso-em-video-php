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
        <form method="get" action="02parte2.php">
            <?php
            $e = 1;
            while($e <= 5){
                echo "valor $e: <input type='number' name='v$e' max='100' min='0' value='0'><br>";
                $e++;
            }
            ?>
            <input type="submit" value="Enviar">
        </form>

        <br><br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>