<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <fieldset><legend>Calculado</legend>
    <?php
        $n = isset($_GET["number"])?$_GET["number"]:0;
        $n2 = isset($_GET["number2"])?$_GET["number2"]:0;

        echo "Multiplicação: $n x $n2 = ".($n*$n2);
    ?>
    </fieldset>
</body>
</html>