CREATE DATABASE Cadastro;
USE Cadastro;

CREATE TABLE Cliente(
	 idCliente int not null primary key auto_increment,
	 Nome VARCHAR(50) not null,
     Email VARCHAR(30) not null,
	 DataNasc DATE not null,
     Telefone VARCHAR(14) not null,
     Senha VARCHAR(25) not null
 ) Engine = InnoDB;
 
 
