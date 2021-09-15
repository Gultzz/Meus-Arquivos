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
    </script>
</body>
</html>