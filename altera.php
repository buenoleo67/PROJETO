<?php
    session_start();
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'lojaZ';

    $mysql = mysqli_connect($hostname, $username, $password, $database);
    mysqli_set_charset($mysql, 'utf8');


    $senha = $_POST['senha'];
    $confirmasenha = $_POST['confirmasenha'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf= $_POST['cpf'];;

            $result = mysqli_query($mysql,
            "SELECT `nome` FROM `cliente` WHERE `nome` = '$nome'");

            if(!mysqli_num_rows($result)) {
                echo "Nome não registrado";
                exit;
            } 


            $result2 = mysqli_query($mysql,
            "SELECT `email` FROM `cliente` WHERE `email` = '$email'");

            if(!mysqli_num_rows($result2)) {
                echo "Email incorreto!";
                exit;
            } 

            $result3 = mysqli_query($mysql,
            "SELECT `cpf` FROM `cliente` WHERE `cpf` = '$cpf'");

            if(!mysqli_num_rows($result3)) {
              echo "CPF não encontrado";
                exit;
            } 
            $result4 = mysqli_query($mysql,
            "SELECT `senha` FROM `cliente` WHERE `senha` = '$senha'");

            if(!mysqli_num_rows($result4)) {
                $data[] = $senha;
                exit;
            } else {     
                while ($r = mysqli_fetch_assoc($result)) {
                   echo "A nova senha deve ser diferente da antiga!";
                   exit;
                }
                $result5 = mysqli_query($mysql,
                "SELECT `senha` FROM `cliente` WHERE `senha` = '$confirmasenha'");
    
                if(!mysqli_num_rows($result5)) {
                    $data[] = $confirmasenha;
              
                    exit;
                } else {
          
                    while ($r = mysqli_fetch_assoc($result)) {
                       echo "A confirmação de senha não esta correta!";
                       exit;
                    }
              
            }
      
        
        }   
        
      
    echo "SENHA ALTErADA COM SUCESSO!";
      
?>
