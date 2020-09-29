<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Primeiro exemplo de PHP</title>
</head>
<body>
    <div>
        <?php
            /* Operadores Aritméticos */
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $m = ($n1+$n2)/2;
            echo "A soma é = ".($n1+$n2);
            echo "<br>A subtração é = ".($n1-$n2);
            echo "<br>A multiplicação é = ".($n1*$n2);
            echo "<br>A divisão é = ".($n1/$n2);
            echo "<br>o modulo é = ".($n1%$n2);
            echo "<br>A média é = $m";

            /* Variáveis
            $nome = "Gustavo";
            $idade = 36;
            echo "$nome tem $idade anos!";*/
        ?>
    </div>
</body>
</html>