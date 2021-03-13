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
                $v = array(2=>"A",5=>"J",0=>"M",3=>"X",4=>"K");
                print_r($v);
                //sort($v);//ordena o vetor
                //rsort($v);//ordena ao reverso
                //asort($v);//ordenação associativa
                //arsort($v);//ordenação associativa reversa
                //ksort($v);//ordenando por chave
                krsort($v);//ordenando reverso por chave
                print_r($v);
            ?>
        </pre>
        
        <br><br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>