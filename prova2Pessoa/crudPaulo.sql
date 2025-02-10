CREATE DATABASE crudPaulo;
USE crudPaulo;

CREATE TABLE pessoas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(15) NOT NULL
);

CREATE table usuarios (id INT primary key auto_increment,
						nome varchar(100) not null,
                        email varchar(100));
                        telefone varchar(100);
show databases;

