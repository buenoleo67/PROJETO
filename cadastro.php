<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro  do Cliente</title>
</head>
<body bgcolor="black">
    <div>
    <h1>Bem vindo ao cadastro do cliente</h1>
    <form action="registro.php" method = "post">
    <h3>Digite seu nome: <input type="text" name="nome" pattern="[a-zA-Záãâéêíîóôõú\s]+$" placeholder="Digite seu nome aqui" required></h3>
<h3>Digite seu email: <input type="email" name="email"  pattern="{3,}+@(?[.com])(?[.com.br])(?[.edu.br])" required placeholder="Digite seu email aqui"></h3>
    <h3>Digite seu endereço: <input type="text" name="endereco" placeholder="Digite seu endereço aqui" required></h3>
    <h3>Seu Telefone: <input type="text" name="telefone" id="tel"  placeholder="(DDD)XXXXX-XXXX"  required></h3>
    <h3>CPF: <input type="text" name="cpf" minlength="11" maxlength="14" placeholder="Insira seu CPF  aqui"     pattern="^[0-9]{3}.?[0-9]{3}.?[0-9]{3}-?[0-9]{2}" required></h3>
    <h3>Senha de acesso: <input type="password" name="senha" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W+)(?=^.{10,}$).*$" placeholder="Crie sua senha aqui" required ></h3>
    <h4>Sua senha deve conter no mínimo 10 carácteres, incluindo ao menos uma letra maiuscula e um carcter especial(@#$)</h4>
    <h3>Aparelho: <select name="aparelho" id="ap"> </h3>
         <option value="celular">Celular</option>
    <option value="notebook">Notebook</option>
    <option value="impressora">Impressora</option>
    <option value="televisao">Televisão</option>
    <option value="outro">Outro</option>
   </select> <br>
    <h3>Descreva o defeito: </h3>
    <textarea name="defeito" id="def" cols="40" rows="5" placeholder="Descreva o defeito aqui"></textarea>
    <p></p>
    <input type="submit" value="Cadastrar" id="cadastrar"><ion-icon name="save-outline"></ion-icon>
    </form>
    <img src="cartao.jpeg" alt="cartao visita">
    <h3>Deseja retornar a tela incial? <a href="index.php"> Home</a><br> </h3>
    <h3>Ou acesse nosso whatsapp </b> <a href="https://l.instagram.com/?u=http%3A%2F%2Fwa.me%2F5543991327778%2F&e=ATOwDL1PHlSDAhamZhUbq1pXqF99Ra0z9ndEgocuhl_Nlpdgt0ct0E4wzqEp_yapCtc-loIWV4xqJDz9Rp9bTKSTgHcy1g3vm8QeEYM&s=1" target="_blank">Whatsapp</a></h3>
    </div>
    
    <style>
        div{
            text-align: center;
        }
    </style>

        
 


    </body>
</html>
