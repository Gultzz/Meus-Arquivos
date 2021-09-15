<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>é</title>
</head>
<body>
    <h1><a style="position:absolute;text-decoration: none; color: white; margin-left: 20px;" href="index.html">&#8592;</a></h1>
    <br><br><br><br><br>
    <center>
        <?php 
            $email = $_GET["email"];
            $senha = $_GET["senha"];
            $idade = $_GET["idade"];
            if($idade >= 18 && $idade < 65){
                echo "<h1>Maior de 18 anos $idade</h1>";
            }else if($idade < 18){
                echo "<h1>Menos de 18 anos $idade</h1>";
            }else{
                echo "<h1>Maior de 65 anos $idade</h1>";
            }
            
        ?>
        <h2 style="color:white;">Registro</h2><br>
        <label for="email-valor">Email</label><br>
        <input id="email-valor" type="email" placeholder="Ex: login@gmail.com"><br><br>
        <label for="password-valor">Senha</label><br>
        <input id="password-valor" type="password" placeholder="Ex: 1234"><br><br>
        <button onclick="logar()">Logar</button><br><br><br>
    </center>
    <script src="script.js"></script>
</body>
</html>