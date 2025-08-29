CREATE DATABASE IF NOT EXISTS AVALIATIVA;
USE AVALIATIVA;

CREATE TABLE Instituicao (
    Icodigo INT AUTO_INCREMENT,
    nome VARCHAR(255),
PRIMARY KEY(Icodigo));

CREATE TABLE Fornecedor (
    Fcodigo INT AUTO_INCREMENT,
    Fnome VARCHAR(255),
    Status ENUM('Ativo', 'Inativo', 'Suspenso') DEFAULT 'Ativo',
    Cidade VARCHAR(100),
PRIMARY KEY(Fcodigo));

CREATE TABLE Peca (
    Pcodigo INT AUTO_INCREMENT,
    Pnome VARCHAR(255) NOT NULL,
    Cor VARCHAR(50) NOT NULL,
    Peso DECIMAL(10,2) NOT NULL,
    Cidade VARCHAR(100) NOT NULL,
PRIMARY KEY(Pcodigo));

CREATE TABLE Projeto (
    PRcod INT AUTO_INCREMENT,
    PRnome VARCHAR(255),
    Cidade VARCHAR(100),
    Icodigo INT NOT NULL,
    FOREIGN KEY (Icodigo) REFERENCES Instituicao(Icodigo),
PRIMARY KEY(PRcod));

-- @Relation
CREATE TABLE Fornecimento (
	CodFornecimento INT AUTO_INCREMENT,
	Quantidade INT NOT NULL,
    Fcodigo INT NOT NULL,
    Pcodigo INT NOT NULL,
    PRcod INT NOT NULL,
    FOREIGN KEY (Fcodigo) REFERENCES Fornecedor(Fcodigo),
    FOREIGN KEY (Pcodigo) REFERENCES Peca(Pcodigo),
    FOREIGN KEY (PRcod) REFERENCES Projeto(PRcod),
PRIMARY KEY(CodFornecimento));

-- -----------------------------------------------------------

CREATE TABLE Cidade (
    Ccod INT AUTO_INCREMENT,
    Cnome VARCHAR(100) NOT NULL,
    uf CHAR(2) DEFAULT 'SP',
PRIMARY KEY(Ccod));

ALTER TABLE Projeto 
	DROP FOREIGN KEY projeto_ibfk_1; 	#[nome_da_tabela_filha]_[ibfk]_[número]

DROP TABLE Instituicao;

ALTER TABLE Fornecedor 
	ADD Fone VARCHAR(20);
    
ALTER TABLE Fornecedor 
	CHANGE Fcodigo Fcod INT AUTO_INCREMENT;
       
ALTER TABLE Fornecedor 
	CHANGE Cidade Ccod INT,
    ADD FOREIGN KEY (Ccod) REFERENCES Cidade(Ccod);

ALTER TABLE Peca 
	CHANGE Cidade Ccod INT,
    ADD FOREIGN KEY (Ccod) REFERENCES Cidade(Ccod);
    
ALTER TABLE Projeto 
	CHANGE Cidade Ccod INT,
    ADD FOREIGN KEY (Ccod) REFERENCES Cidade(Ccod);
    