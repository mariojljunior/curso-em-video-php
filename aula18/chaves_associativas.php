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
            <?php
                $cad = array ("nome" => "Ana",
                              "idade" => 23,
                              "peso" => 65.5);
                $cad["fuma"] = true;
                
                foreach($cad as $valor => $c){
                    echo "O campo $valor possui o conteúdo $c <br>";
                }
            ?>
        </pre>
        
        <br><br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>