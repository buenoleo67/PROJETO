<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="status.css">
    <title>Status</title>
</head>
<body bgcolor="black">
    <div>
    <h1>Area do cliente</h1>
        <?php 
        session_start();
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'lojaZ';
    
        $mysql = mysqli_connect($hostname, $username, $password, $database);
        mysqli_set_charset($mysql, 'utf8');
        echo $_SESSION['email'];        
        ?>
  <h4>ALTERAR DADOS CADASTRADOS?</h4>
  <form action="novosdados.php" method="post">
    <label for="email">Insira seu novo email</label>
    <input type="email" name="email" pattern="{3,}+@(?[.com])(?[.com.br])(?[.edu.br])"  required placeholder="Insira seu novo email"><br>
    <label for="senha">Insira sua nova senha</label>
    <input type="password" name="senhanova" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W+)(?=^.{10,}$).*$" required placeholder="Insira sua nova senha"><br>
     <input type="submit" value="Enviar dados">
  </form>
  </div>
  <img src="logo2.jpg" alt="logoloja">

</body>
</html>
