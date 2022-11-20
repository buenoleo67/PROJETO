<?php 
 session_start();
 $hostname = 'localhost';
 $username = 'root';
 $password = '';
 $database = 'lojaZ';

 $mysql = mysqli_connect($hostname, $username, $password, $database);
 mysqli_set_charset($mysql, 'utf8');
$novoemail = $_POST['email'];
$novasenha = $_POST['senha'];
$sql = "INSERT INTO Cliente (email,senha)
VALUES ('$novoemail','$novasenha')";


header('Location:login.php'); 

?>
