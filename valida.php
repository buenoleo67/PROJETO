<?php
    session_start();
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'lojaZ';

    $mysql = mysqli_connect($hostname, $username, $password, $database);
    mysqli_set_charset($mysql, 'utf8');
    $email = $_POST['email'];
    $senha= $_POST['senha'];

            $result = mysqli_query($mysql,
            "SELECT * FROM `cliente` WHERE `email` = '$email'");

            if(!mysqli_num_rows($result)) {
                echo "Usuário não encontrado";
                exit;
            } else {
      
                while ($r = mysqli_fetch_assoc($result)) {
                    $data[] = $r;
                }
            }


            $result2 = mysqli_query($mysql,
            "SELECT `senha` FROM `cliente` WHERE `senha` = '$senha'");

            if(!mysqli_num_rows($result2)) {
                echo "Senha incorreta!";
                exit;
            } else {
      
                while ($r = mysqli_fetch_assoc($result2)) {
                    $data[] = $r;
                }

            }
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['senha']= $senha;
            header('Location:status.php');        
      
        
    

?>
