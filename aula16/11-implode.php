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
            $vetor[0] = "Curso";
            $vetor[1] = "em";
            $vetor[2] = "Vídeo";
            $texto = implode("#", $vetor);
            print($texto);

            //join() : Funciona da mesma maneira que o implode()
        ?>
        <br><br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>