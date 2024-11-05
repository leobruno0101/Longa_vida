create database longa_vida;

use longa_vida;

create table plano(
       numero int primary key auto_increment,
       descricao char(255),
       valor decimal(10,2)
);

create table associado(
       codigo int primary key auto_increment,
       plano_numero int,
       nome char(45) not null,
       endereco char(45) not null,
       cidade char(45) not null,
       estado char(2) not null,
       cep char(10) not null,
       CONSTRAINT fk_plano_numero FOREIGN KEY (plano_numero)
       REFERENCES plano(numero)
);

update plano set descricao = '', valor = '' where numero = 1;

delete from plano where numero = 1;