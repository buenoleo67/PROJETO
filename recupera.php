<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
</head>
<body>
<div>
    <h1>Bem vindo a área de recuperação de senha</h1>
    <form action="altera.php" method = "post">
    <h3>Digite seu nome: <input type="text" name="nome" minlength="10" maxlength="50" placeholder="Digite seu nome aqui" required></h3>
    <h3>Digite seu email: <input type="email" name="email" minlength="10" maxlength="50" required placeholder="Digite seu email aqui"></h3>
    <h3>CPF: <input type="text" name="cpf"  placeholder="Insira seu CPF  aqui" required></h3>
    <h3>Digite seu endereço: <input type="text" name="endereco" placeholder="Digite seu endereço aqui" required></h3>
    <h3>Seu Telefone: <input type="text" name="telefone" id="tel" placeholder="(DDD)XXXXX-XXXX"  required></h3>
     <h3>Aparelho: <select name="aparelho" id="ap"> </h3>
         <option value="celular">Celular</option>
    <option value="notebook">Notebook</option>
    <option value="impressora">Impressora</option>
    <option value="televisao">Televisão</option>
    <option value="outro">Outro</option>
   </select> <br>
    <h3>Nova senha: <input type="text" name="senha" minlenght="8" maxlength="16" placeholder="Insira a nova seha" required></h3>
    <h3>Confirme nova senha <input type="text" name="confirmasenha" minlenght="8" maxlength="16" placeholder="Confirme sua senha" required></h3>
    <input type="submit" name= "submit" value="Alterar senha">
    </form>
    Ainda não tem cadastro? <a href="cadastro.php">Acesse Aqui</a> <br>
    Deseja retornar a tela incial?<a href="index.php"> Home</a><br>
   </div>
   <img src="logo2.jpg" alt="logomarca">
   
</body>
</html>
