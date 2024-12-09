create database crud default char set 'utf8mb4';
USE crud;
CREATE table usuarios (id INT primary key auto_increment,
						nome varchar(100) not null,
                        email varchar(100));
show databases;
