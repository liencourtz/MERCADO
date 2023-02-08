create database Mercado;

use Mercado;


create table Cliente(
 codigo int(10) not null primary key auto_increment,
 cpf varchar(45) not null,
 nome varchar(45) not null,
 telefone varchar(15) not null,
 genero varchar(45) not null,
 compra int(20) not null,
 gasto decimal(10,2) not null

)engine=InnoDB;

create table Funcionario(
 codigo int(10) not null primary key auto_increment,
 cpf varchar(45) not null ,
 nome varchar(45) not null,
 telefone varchar(15) not null,
 genero varchar(45) not null,
 cargo varchar(45) not null,
 salario decimal(10,2) not null
 
)engine=InnoDB;

create table Endereco(
codigo int(10) not null primary key auto_increment,
enderec varchar(45) not null,
num int(10) not null,
cidade varchar(45) not null,
estado varchar(45) not null,
cep varchar(9)
)engine=InnoDB;

create table Estoque(
codigo int(100) not null primary key auto_increment,
produto varchar(45) not null,
qnt int(100) not null,
val decimal(10,2) not null

)engine=InnoDB;


drop table Funcionario;

select * from Cliente;