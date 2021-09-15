<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste 2</title>
    <style>
    </style>
</head>

<body>
    <h1 id="h1">0</h1>
    <button id="botao">adicionar</button><br><br><br>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "$i for,  ";
    }

    echo "<br>";

    while ($i >= 0) {
        echo "$i while, ";
        $i--;
    }

    for ($a = 1; $a <= 5; $a++) {
        echo "<br><input type='text' placeholder='input $a'><br>";
    }

    echo "<br><br><br>";

    echo "<form action='index2.php' method='POST'>Inicio: <input type='number' name='inicio' id='inicio' required><br>";
    echo "Final: <input type='number' name='final' id='final' required><br>";
    echo "Pular de: <select name='select'>";
    for ($b = 1; $b <= 5; $b++) {
        echo "<option value='$b'>$b</option>";
    }
    echo "</select>
        <input type='submit'>
        </form>";
    // echo "<br>-----Fatorial-----<br>";

    // echo "<form method='POST' action='index2.php'>";
    //     echo "<input type='number' name='number' min='0' max='15'>";
    //     echo "<input type='submit'>";
    // echo "</form>";
    echo "<br>-----tabuada-----<br>";
    echo "<form action='index2.php' method='POST'>";
    echo "<select name='select2'>";
    for ($c = 1; $c <= 10; $c++) {
        echo "<option value='$c'>$c</option>";
    }
    echo "</select><br><input type='submit'>";
    echo "</form>";

    echo "<br>-----Function-----<br>";
    $a = 5;
    function seila($x)
    {
        $x = $x + 3;
        echo $x;
    }
    echo "$a <br>";
    seila($a);

    echo "<br>-----Function2-----<br>";
    function seila2(&$x2)
    {
        $x2 = $x2 + 3;
        echo $x2;
    }
    $a2 = 5;
    seila2($a2); // a dunção tem que ir antes para modificar o A junto
    echo "<br>$a2 <br>";

    echo "<h1 onclick='asdasdd()'>&#9776</h1>";

    echo "<pre>";

    $n = [9, 8, 7, 6, 5];
    $n[] = 4; // cria um item e coloca no final

    print_r($n); //9,8,7,6,5,4;

    echo "\n\n\n";

    $c = range(5, 20, 5); // Vai de (1) até (2) de (3) em (3); // Vai de 5 até 20 de 5 em 5
    print_r($c);
    foreach ($c as $v) {
        echo "<h1>$v</h1>";
    }

    /*
TODO               OBJETO NAS LINGUAGENS

!                    Java Script            
!            
!                    var pessoa = {
!                            name:"Gustavo",
!                            idade:"15",
!                            genero:"Masculino"
!                    };

?                    PHP
?
?                        $pessoa = [
?                            name=>"Gustavo",
?                            idade=>15,
?                            genero=>"Masculino"
?                        ];

*/


    echo "</pre>";
    $pessoa = [
        "name" => "Gustavo",
        "idade" => 15,
        "genero" => "masculino"
    ];
    foreach ($pessoa as $var => $conteudo) {
        switch ($var) {
            case "name":
                echo "<h1>Meu nome é $conteudo</h1>\n<br>";
                break;
            case "idade":
                echo "<h1>Tenho $conteudo anos de idade</h1>\n<br>";
                break;
            case "genero":
                echo "<h1>e sou do genero $conteudo</h1>\n<br>";
                break;
        }
    }
    ?>
    <script src="script.js"></script>
</body>

</html>