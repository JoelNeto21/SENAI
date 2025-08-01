create database pizzaria; 

use pizzaria;

-- Cadastro de Tabelas --
create table pizzaria (
	id_pizzaria int AUTO_INCREMENT PRIMARY KEY,
	cnpj_pizzaria int NOT NULL,
	nome_pizzaria varchar(20) NOT NULL,
	telefone_pizzaria int
);

create table cliente (
	id_cliente int AUTO_INCREMENT PRIMARY KEY,
	cpf_cliente int NOT NULL,
	nome_cliente varchar(20),
	endereco_cliente varchar(150) NOT NULL
);

create table pedido (
	id_pedido int AUTO_INCREMENT PRIMARY KEY,
	sabor_pizza int NOT NULL,
	horario_pedido datetime NOT NULL,
	endereco_pedido varchar(150) NOT NULL
);