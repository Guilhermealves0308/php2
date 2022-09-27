-- Deleta o banco de dados caso ele exista.
DROP DATABASE IF EXISTS cyberbank;

-- Cria o banco de dados e seta ele para utf8(Alfabeto Br).
CREATE DATABASE cyberbank CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Seleciona o banco de dados para ser utilizado.
USE cyberbank;

CREATE TABLE games(
    games_id INT PRIMARY KEY AUTO_INCREMENT,
    games_name VARCHAR(255) NOT NULL,
    games_classificacao VARCHAR(60) NOT NULL,
    games_genero VARCHAR(60) NOT NULL,
    games_preco FLOAT NOT NULL,
    games_empresa VARCHAR(60),
    games_img VARCHAR(255),
    games_status ENUM('Disponivel!', 'Em falta!') DEFAULT 'Disponivel!'
);

-- Cria a tabela dos usuarios.
CREATE TABLE usuario(
    usuario_id INT PRIMARY KEY AUTO_INCREMENT,
    usuario_data DATE NOT NULL,
    usuario_endereco VARCHAR(255) NOT NULL,
    usuario_nick VARCHAR(60) NOT NULL,
    usuario_email VARCHAR(255) NOT NULL,
    usuario_password VARCHAR(255) NOT NULL
);

-- Cria a tabela de produtos.
CREATE TABLE acessorios(
    acessorios_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    acessorios_headset VARCHAR(255) NOT NULL,
    acessorios_controle VARCHAR(255) NOT NULL,
    acessorios_mouse VARCHAR(255) NOT NULL,
    acessorios_teclado VARCHAR(255) NOT NULL,
    acessorios_microfone VARCHAR(255) NOT NULL
    FOREIGN KEY (acessorios_id) REFERENCES usuario (usuario_id)
);

-- Cria a tabela do carrinho.
CREATE TABLE carrinho (
    carrinho_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    carrinho_loot INT,
    confime_user INT,
    FOREIGN KEY (carrinho_loot) REFERENCES games (games_id),
    FOREIGN KEY (carrinho_loot) REFERENCES acessorios (acessorios_id),
    FOREIGN KEY (confime_user) REFERENCES usuario (usuario_id)
);

-- Cria a tabela dos funcionarios.
CREATE TABLE Funcionario(
    funcionario_id INT PRIMARY KEY AUTO_INCREMENT,
    funcionario_CPF VARCHAR(12) NOT NULL,
    funcionario_nome VARCHAR(60) NOT NULL,
    funcionario_matricula VARCHAR(20) NOT NULL,
    funcionario_telefone FLOAT NOT NULL,
    funcionario_cargo VARCHAR(60) NOT NULL
);

-- Cria a tabela de pagamentos.
CREATE TABLE pagamento(
    pagamento_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    pagamento_credito VARCHAR(100) NOT NULL,
    pagamento_debito VARCHAR (100) NOT NULL,
    pagamento_dinheiro FLOAT NOT NULL,
    pagamento_pix VARCHAR(255) NOT NULL,
    FOREIGN KEY (pagamento_id) REFERENCES Funcionario (funcionario_id)
);
