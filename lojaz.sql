CREATE TABLE
    funcionario (
        situacao TINYINT,
        telefone VARCHAR(15),
        funcao VARCHAR(50),
        cpf INT,
        nome VARCHAR(50),
        codigo INT PRIMARY KEY AUTO_INCREMENT
    );
    CREATE TABLE
    servico (
        codigo INT PRIMARY KEY AUTO_INCREMENT,
        valor FLOAT,
        descricao VARCHAR(50),
        datadecadastro TIMESTAMP,
        situacao TINYINT,
        fk_funcionario_codigo INT,
        Foreign Key (fk_funcionario_codigo) REFERENCES funcionario(codigo)
    );

CREATE TABLE
    peca(
        codigo INT PRIMARY KEY AUTO_INCREMENT,
        descricao VARCHAR(50),
        valorcusto FLOAT,
        datadecadastro TIMESTAMP,
        situacao TINYINT
    );
   CREATE TABLE
    cliente (
        situacao TINYINT,
        datadecadastro TIMESTAMP,
        telefone VARCHAR(15),
        email VARCHAR(50),
        senha VARCHAR(16),
        aparelho VARCHAR(50),
        cpf VARCHAR(30),
        endereco VARCHAR(50),
        nome VARCHAR(50),
        codigo INT PRIMARY KEY AUTO_INCREMENT
    );
   CREATE TABLE
    aparelho(
          situacao TINYINT,
          defeito VARCHAR(50),
          codigo INT PRIMARY KEY AUTO_INCREMENT,
           fk_funcionario_codigo INT,
           fk_cliente_codigo INT,
           Foreign Key (fk_cliente_codigo) REFERENCES cliente(codigo), 
           Foreign Key (fk_funcionario_codigo) REFERENCES funcionario(codigo)
 
    );
