<?php 
$banco = new mysqli("localhost", "root","", "lojaZ",3306);
if($banco->connect_errno){
    echo"Erro ao conectar no banco de dados";
   
}
?>
