<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste 2</title>
</head>
<body>
<button><a href="index.php">Voltar</a></button>
    <?php
        $inicio = isset($_POST["inicio"])?$_POST["inicio"]:1;
        $final = isset($_POST["final"])?$_POST["final"]:1;
        $select = isset($_POST["select"])?$_POST["select"]:1;
        $temp = 0;
        echo "$inicio, $final, $select<br><br>";
        if($inicio <= $final){
            while($inicio <= $final){
                echo "$inicio, ";
                $inicio+=$select;
            }
        }else if($inicio > $final){
            while($inicio >= $final){
                echo "$inicio, ";
                $inicio-=$select;
            }
        }
        // echo "<br>-----FATORIAL-----<br>";
        // $number = isset($_POST["number"])?$_POST["number"]:1;
        // $multi = 1;
        // echo "number = $number, multi = $multi";
        // do{
        //     $multi = $multi*$number;
        //     $number--;
        // }while($number != 1);
        // echo "<br>$multi<br>";
        echo "<br>-----tabuada-----<br>";
            $valor2 = isset($_POST["select2"])?$_POST["select2"]:0;
            for($i=1;$i<=10;$i++){
                echo "$valor2 X $i =".($valor2*$i)."<br>";
            }
        echo "<br>-----Function-----<br>";

        function soma(){
            $p = func_get_args();
            $somas = $p[1]/* - $p recebe 2 -/ - $p recebe 5 - */*$p[4];// --- COMEÇA EM 0 QUE NEM JS ---
            $h = func_num_args();// --- aparece quantos argumando foi colocado dentro da função
            echo "$h<br>";
            echo $somas;
        }
        soma(1,2,3,4,5);
    ?>
    <form action="index3.php" method="GET">
        <input type="text" id="input" name="password" placeholder="senha">
        <input type="submit" onclick="verificar()">
    </form>
    <script>

        function verificar(){
            let input = document.getElementById("input").value;
            console.log(input.length);
                if(input.length >= 6 && input.length <= 8){
                    alert("logado");
                }else{
                    alert("A senha tem que ter no minimo 6 caracteres e no maximo 8 caracteres");
                    window.location.href = "index2.php";
                }
        }

        // let seila = (name) => {
        //     console.log(name);
        // }
        // seila("deu");

        // function person(name){
        //     name = name + "001"
        //     console.log(name);
        // }
        // person("Gustavo");
        // let pessoa2 = new person("lucas");
        // console.log(pessoa2);

        function pessoas(name,acao){
            this.name = name;
            this.acao = function(boolean){
                if(boolean === true){
                    return this.name + " está andando";
                }else if(boolean === false){
                    return this.name + " não pode andar";
                }
            }
        }
        let Gustavo = new pessoas("Gustavo");
        let Lucas = new pessoas("Lucas");
        console.log(Gustavo.acao(true));
        console.log(Lucas.acao(false));
        // if(Lucas.acao === "Está parado"){
        //     console.log("lucas paro");
        // }

    </script>
</body>
</html>