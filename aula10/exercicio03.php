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
            $e = isset($_GET["estado"])?$_GET["estado"]:0;
            switch($e){
                case "acre":
                case "amazonas":
                case "amapa":
                case "rondonia":
                case "para":
                case "roraima":
                case "tocantins":
                    echo "Região Norte";
                    break;
                case "mato grosso":
                case "mato grosso do sul":
                case "distrito federal":
                    echo "Região Centro-Oeste";
                    break;
                case "maranhao":
                case "piaui":
                case "ceara":
                case "bahia":
                case "sergipe":
                case "alagoas":
                case "pernambuco":
                case "paraiba":
                case "rio grande do norte":
                    echo "Região Nordeste";
                    break;
                case "sao paulo":
                case "minas gerais":
                case "rio de janeiro":
                case "espirito santo":
                    echo "Região Sudeste";
                    break;
                case "parana":
                case "santa catarina":
                case "rio grande do sul":
                    echo "Região Sul";
                    break;
                default:
                    echo "Selecione uma opção válida";
            }
        ?>
        <br><br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>