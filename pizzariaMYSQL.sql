create pizzaria,
use pizzaria

create table cardapio (
idcardapio int not null auto_increment,
Nome varchar(200) not null,
ingred varchar(200) not null,
valor varchar(15) not null,
primary key (idcardapio)
);
select * from cardapio;

create table pedido (
idpedido int not null auto_increment,
nomecliente varchar(200) not null,
mesa varchar(200) not null,
pizza varchar(15) not null,
primary key (idpedido)
);
select * from pedido;
