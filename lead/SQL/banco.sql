create database bancoprojetolpw;

use bancoprojetolpw;

create table usuario (
id int not null auto_increment,
nome varchar(100),
cpf varchar(20),
email varchar (100),
senha varchar (50),
telefone varchar (10),
primary key(id) 
);
create table categoria (
id int not null auto_increment,
nome varchar(100),
descricao varchar(20),
primary key(id) 
);
create table marca (
id_marca int auto_increment,
nome varchar(100),
cnpj varchar(20),
email varchar (100),
endereco varchar (100),
telefone varchar (10),
primary key(id_marca) 
);
create table produto (
codigo int,
nome varchar(100),
descricao varchar (100),
fornecedor varchar (50),
quantidade int,
valor float,
id_categoria int,
foreign key (id_categoria) references categoria(id),
primary key(codigo) 
);
create table fpagamento(
id int not null auto_increment,
nome varchar(45),
primary key (id)
);
create table venda(
id_venda int not null auto_increment,
id_vendedor int,
valor float,
id_fpagamento int,
foreign key (id_fpagamento) references fpagamento(id),
foreign key (id_vendedor) references usuario(id),
primary key (id_venda)
);
insert into fpagamento(id,nome) values ('','banri');


select * from usuario;

select * from produto;


select * from categoria;
select * from fpagamento;