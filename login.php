  <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Bem vindo</title>
</head>
<body bgcolor="black">
    <div>
    <h1>Bem vindo a área de login</h1>
    <form action="valida.php" method = "post" class="login">
   <h4>Email: <input type="email" name= "email" minlength="10" maxlength="50" placeholder="Insira o email cadastrado" required></h4> 
   <h4>Senha: <input type="password" name= "senha" minlength="8" maxlength="16" placeholder="Digite sua senha" required></h4>
    <input  class="botao" type="submit" name= "entrar" value = "Entrar">
    <p></p>
    <h4><a href="recupera.php">Esqueceu sua senha?</a>
    </h4>
    </form>
    <h4><ion-icon name="storefront-outline"></ion-icon> <a href="index.php">  Home</a></h4>
    <h4><ion-icon name="contract-outline"></ion-icon>    <a href="cadastro.php">Cadastro</a></h4>
    <h4><ion-icon name="information-outline"></ion-icon>  <a href="sobre.php"> Sobre nós</a></h4>
   </div>
   
   <img src="logo2.jpg" alt="logomarca">
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
