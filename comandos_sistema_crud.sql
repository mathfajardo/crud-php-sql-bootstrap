-- criando db
CREATE DATABASE sistema_crud;

-- selecionando db
USE sistema_crud;

-- criando a tabela do sistema
CREATE TABLE IF NOT EXISTS dados (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50),
    idade INT,
    altura DECIMAL(3,2),
    nacionalidade VARCHAR(50),
    profissao VARCHAR(50)
);


