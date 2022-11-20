<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="registro.css">
    <title>registro</title>
</head>
<body bgcolor="grey">
    <div>
    <ion-icon name="cloud-done"></ion-icon>
        
 <?php 
    include 'conecta.php';
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $aparelho =$_POST['aparelho'];
    $cpf= $_POST['cpf'];


    $result = $senha;
    $i =0;
    $crip = 131529;
    for($i;$i<$crip;$i++){
        
    $result = $i + $crip;
    }
    $senha= $result;

    if($nome != "" and $endereco != "" and $senha != "" ){

        $sql = "INSERT INTO Cliente (nome, endereco,email,telefone,senha,aparelho,cpf)
            VALUES ('$nome','$endereco', '$email','$telefone', '$senha', '$aparelho', '$cpf')";
       
        $banco->query($sql);
    
        if($banco->affected_rows >= 1){
            echo "Cliente $nome cadastrado com sucesso!";
        }else{
            echo "Erro ao inserir cliente $nome";
        }
    }

  
    $banco->close();
    ?>   
</div>
<img src="logo2.jpg" alt="logo ztech">

<footer>
<h3>Deseja retornar a tela incial? <a href="index.php"> Home</a><br> </h3>
    <h3>Ou acesse nosso whatsapp </b> <a href="https://l.instagram.com/?u=http%3A%2F%2Fwa.me%2F5543991327778%2F&e=ATOwDL1PHlSDAhamZhUbq1pXqF99Ra0z9ndEgocuhl_Nlpdgt0ct0E4wzqEp_yapCtc-loIWV4xqJDz9Rp9bTKSTgHcy1g3vm8QeEYM&s=1" target="_blank">Whatsapp</a></h3>
    </footer>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
