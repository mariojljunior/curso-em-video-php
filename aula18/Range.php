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
        <pre>
            <table border="1"><tr>
                <?php
                    $c = range(5,20,2);

                    foreach($c as $valor){
                        echo "<td>$valor ";
                    }
                ?>
            </table>
        </pre>
        
        <br><br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>