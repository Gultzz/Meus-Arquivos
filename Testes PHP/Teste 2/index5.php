<?php
    include_once "index4.php";
    ola();
    $a = intval(7.2); //Resultado sem . ou ,
    $b = abs(7.2); //Resultado absoluto
    $c = pow(5,7); //Resultado com potenciação
    $d = sqrt(7.2); //Resultado Raiz quadrada
    $e = round(7.2); //Resultado arredondado
    $f = number_format(7.2); //Resultado em formato de numero
    //$g = //date_format(); //Resultado em formato de data

    echo "<br>$a<br>$b<br>$c<br>$d<br>$e<br>$f";
    print "<br><br>$a<br>$b<br>$c<br>$d<br>$e<br>$f<br>";
    valor($a);

    echo "---Outras Funções---<br>";

    function testePrintf(){
        $produto = ["Nescau","Leite"];
        $preço = [3.49, 3.5];
        //Errado
        echo "<br>$produto[1] custa $preço[1]<br>";
        print "<br>$produto[1] custa $preço[1]<br>";
        printf("<br>$produto[1] custa $preço[1]<br>");
        //Certo
        printf("<br> %s custa %.2f<br>",$produto[1],$preço[1]);
        echo "<br>$produto[1] custa". number_format($preço[1],2) . "<br>";

        // para printf

        //%d    Valor Decimal
        //%u    Valor Decimal sem sinal(vai ser só positivo)
        //%f    Valor real
        //%s    String

    }
    testePrintf();

    echo "<br><br>--------------------------------<br><br>";

    function testePrintR(){
        //Vetores
        $num[1] = 9;
        $num[2] = 8;
        $num[3] = 7;
        $num2 = [1,2,3];
        $num3 = array(4,5,6);

        print_r($num); //pega informações da variavel
        echo "<br>";
        print_r($num2); //pega informações da variavel
        echo "<br>";
        print_r($num3); //pega informações da variavel
    }
    testePrintR();

    echo "<br><br>--------------------------------<br><br>";

    function testeStrlen(){
        $text = "Meu nome é Gustavo";
        $TamanhodoText = strlen($text); //Conta quantas caracteres tem um texto
        echo "<h1>$TamanhodoText</h1>";
    }
    testeStrlen();

    echo "<br><br>--------------------------------<br><br>";

    function testeWordwrap(){
        $aa = "Oi meu nome é gustavo tenho 15 anos e gosto de programar";
        $resultaa = wordwrap($aa,8,"<br>",true);//(1=Texto,2=numero de caracteres,3= se ele vai pular linha do codigo visto, 4=se ele vai cortar palavras para ficar no tamanho de caracteres maximo ou não)
        echo $resultaa;
    }
    testeWordwrap();

    echo "<br><br>--------------------------------<br><br>";

    function testeTrim(){
        $bb = "   Seila da silva  ";
        $bbMelhorado = trim($bb); // tira os espaços do inicio e do fim de uma frase
        echo "<br>".strlen($bb)."<br>";
        echo strlen($bbMelhorado)."<br>";

        //VARIAÇÕES DO TRIM É O ltrim E O rtrim; ltrim= tira os espaços do inicio; rtrim=tira os espaços do fim

    }
    testeTrim();

    echo "<br><br>--------------------------------<br><br>";

    function testeStrWordCount(){
        $frase = "Estou estudando PHP";
        $conta = str_word_count($frase,2); //(  /  ,0=conta as palavras, 1=cria um array com cada palavra, 2=divide array e coloca posicionamento)
        print_r($conta);
    }
    testeStrWordCount();
    
    echo "<br><br>--------------------------------<br><br>";

    function testeExplode(){
        $site = "Estudando PHP denovo";
        $valorSite = explode(" ",$site);// Explode separa as palavras por (O valor que vai separar, o que vamos separar) e cria um array com cada valor que voce separou;
        print_r($valorSite);
    }
    testeExplode();

    echo "<br><br>--------------------------------<br><br>";

    function testeStrSplit(){
        $site2 = "Gustavo";// [0]G [1]u [2]s [3]t [4]a [5]v [6]o
        $valorSite2 = str_split($site2);//separa o valor por letras
        print_r($valorSite2);
    }
    testeStrSplit();

    echo "<br><br>--------------------------------<br><br>";

    function testeImplode(){ //Implode pode ser substituido por join();
        $array = ["Teste", "de", "Implode"];
        $arrayArrumado = implode(" --- ",$array);// separa pelo valor que voce colocar (1,2) no 1 e o 2 é o array
        echo $arrayArrumado;
    }
    testeImplode();

    echo "<br><br>--------------------------------<br><br>";

    function testeChr(){
        $chrTeste = chr(67); //Pega o valor da letra/numero/simbolo do teclado baseado no numero //Codigo ASCII
        echo $chrTeste;
    }
    testeChr();

    echo "<br><br>--------------------------------<br><br>";

    function testeOrd(){// Mostra o codigo da letra pelo CHR; //Mostra o valor ASCII
        $valorLetra = ord("t"); //Mostra o valor da letra pelo numero;
        echo $valorLetra;
    }
    testeOrd();

    echo "<br><br>--------------------------------<br><br>";

    function testeStrToLower(){
        $textao = "GUSTavo É legal"; 
        $seila = strtolower($textao); //Tudo que for maiuscolo e sem acentuação vai ficar minusculo
        echo $seila;
    }
    testeStrToLower();

    echo "<br><br>--------------------------------<br><br>";

    function testeStrToUpper(){
        $textao2 = "GUSTavo é legal"; 
        $seila2 = strtoupper($textao2); //Tudo que for minusculo e sem acentuação vai ficar maiusculo
        echo $seila2;
    }
    testeStrToUpper();

    echo "<br><br>--------------------------------<br><br>";

    function testeUcFirst(){
        $textao3 = "gustavo é legal"; 
        $seila3 = ucfirst($textao3); //Primeira letra fica maiuscula
        echo $seila3;
    }
    testeUcFirst();

    echo "<br><br>--------------------------------<br><br>";

    function testelcFirst(){
        $textao4 = "GUSTAVO SCHULTZ"; 
        $seila4 = lcfirst($textao4); //Primeira letra fica minuscula
        echo $seila4;
    }
    testelcFirst();

    echo "<br><br>--------------------------------<br><br>";

    function testeUcWords(){
        $textao5 = "gustavo schultz"; 
        $seila5 = ucwords($textao5); //Primeira letra de todas as palavras fica maiuscula
        echo $seila5;
    }
    testeUcWords();

    echo "<br><br>--------------------------------<br><br>";

    function testeStrRev(){
        $textao6 = "GUSTAVO SCHULTZ"; 
        $seila6 = strrev($textao6); //reverte o texto
        echo $seila6;
    }
    testeStrRev();

    echo "<br><br>--------------------------------<br><br>";

    function testeStrPos(){
        $textao7 = "GUSTAVO SCHULTZ"; 
        $seila7 = strpos($textao7,"SCHULTZ"); //Pega a posição da palavra epecificada
        echo $seila7;
    }
    testeStrPos();

    echo "<br><br>--------------------------------<br><br>";

    function testeSubStrCount(){
        $textao8 = "Gustavo é um nome que só o Gustavo tem, pois ele mesmo é o Gustavo";
        $seila8 = substr_count($textao8, "Gustavo"); //Conta quantas vezes a palavra (1,2)<=(2) foi contada no texto do (1);
        echo "A palavra Gustavo foi contada $seila8 vezes";
    }
    testeSubStrCount();

    echo "<br><br>--------------------------------<br><br>";

    function testeSubStr(){
        $textao9 = "Gustavo é um nome que só o Gustavo tem, pois ele mesmo é o Gustavo";
        $seila9 = substr($textao9,0,7);// pega do texto (1,2,3)(1) e conta da letra (2) (3 = 7)pra direita
        echo $seila9;
    }
    testeSubStr();

    echo "<br><br>--------------------------------<br><br>";

    function testeStrPad(){
        $textao10 = "Gustavo";
        $seila10 = str_pad($textao10,30,"-",STR_PAD_BOTH);//(1/2/3/4) 1 é o texto, 2 é o tanto de caracteres que tem que dar,3 qual caractere vai ser usado para complementar, 4 se ele vai complementar na esquerda direita ou meio//BOTH = MEIO
        echo $seila10;
    }
    testeStrPad();

    echo "<br><br>--------------------------------<br><br>";

    function testeStrRepeat(){
        $textao11 = str_repeat("Gustavo",5);// (1,2) o texto que vai ser repetido, 2 quantas vezes vai ser repetido
        echo "Gustavo foi gerado $textao11";
    }
    testeStrRepeat();

    echo "<br><br>--------------------------------<br><br>";

    function testeStrReplace(){
        $textao12 = "Eu gosto de jogar, jogar é legal";
        $seila12 = str_replace("jogar","brincar",$textao12);//(1,2,3) transforma a palavra (1) do texto (3) na palavra (2)
      //$seila12 = str_ireplace() ignora maiuscula e minuscula
        echo "$seila12";
    }
    testeStrReplace();
?>