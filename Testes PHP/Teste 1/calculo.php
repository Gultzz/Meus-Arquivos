<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculado</title>
</head>
<body>
    <fieldset><legend>CALCULADO</legend>
        <?php
            $num = isset($_POST["number"])?$_POST["number"]:0;
            switch ($num){
                case 0:
                    echo "Não foi possivel verificar o numero";
                    break;
                case 1:
                case 7:
                    if($num == 1){
                        echo "Fim de semana, para descançar. DIA $num(Domingo)";
                    }else{
                        echo "Fim de semana, para descançar. DIA $num(Sabado)";
                    }
                    break;
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    if($num == 2){
                        echo "Dia de semana, para estudar/trabalhar. DIA $num(Segunda)";
                    }else if($num == 3){
                        echo "Dia de semana, para estudar/trabalhar. DIA $num(Terça)";
                    }else if($num == 4){
                        echo "Dia de semana, para estudar/trabalhar. DIA $num(Quarta)";
                    }else if($num == 5){
                        echo "Dia de semana, para estudar/trabalhar. DIA $num(Quinta)";
                    }else if($num == 6){
                        echo "Dia de semana, para estudar/trabalhar. DIA $num(Sexta)";
                    }
                    break;
                default:
                    echo "Numero incorreto";
            }

            $num2 = 1;
            while($num2 <= 10){
                if($num2 == 1){
                    echo ", $num2, ";
                    $num2++;
                }else if($num2 < 10 && $num2 > 1){
                    echo " $num2, ";
                    $num2++;
                }else{
                    echo " $num2.";
                    break;
                }
            }
        ?>
    </fieldset>
    <a style="border:1px solid black; padding:10px; background-color:white; position:absolute; color:black; text-decoration:none;" href="index.html">Voltar</a>
</body>
</html>