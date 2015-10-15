use dbestudo;

UPDATE produto set preco = preco * 1.10
where categoria != 'Carnes';
 
 select preco from produto;
 
 UPDATE produto set preco = preco * 1.20
where categoria = 'Carnes';
 
  UPDATE fornecedor set idFornecedor = 20
where idFornecedor = 2;


CREATE TABLE Cliente 
(
	idCliente int not null,
    nome varchar (45) not null,
    telefone varchar(15),
    constraint pk_cliente primary key (idCliente)    
);

CREATE TABLE Compra
(
	idCompra int not null auto_increment,
    nomeProduto varchar(45) not null,
    preco decimal(5,2) not null,
    quant int default 1 not null,
    dataCompra date not null,
    idCliente int not null,
    
    constraint pk_idCompra primary key (idCompra),
    constraint fk_Cliente foreign key(idCliente) references Cliente (idCliente) on delete cascade on update cascade
    
);
 
 insert into Cliente values(1,'Fulano da Silva','+55273030-2020');
 insert into Cliente values(2,'Cicrano de Souza','+55273030-2525');
 insert into Cliente values(3,'Beltrano dos Santos','+55273030-3535');
 
 
ALTER TABLE Compra modify preco decimal(9,2) not null;

delete from compra;

insert into Compra (nomeProduto,preco,quant,dataCompra,idCliente) values('Smartphone iPhone 6S',6000.00, 2,'2015-09-22',1);
insert into Compra (nomeProduto,preco,quant,dataCompra,idCliente) values('Smartphone Moto X',1500.00, 3,'2015-09-22',1);
insert into Compra (nomeProduto,preco,quant,dataCompra,idCliente) values("Smart TV Samsung 68' 4K",15000.00, 2,'2015-09-22',2);
insert into Compra (nomeProduto,preco,quant,dataCompra,idCliente) values('Ferro de Passar Roupa a Vapor',69.90, 1,'2015-09-22',3);


select * from compra;

delete from Cliente where idCliente = 2;

select * from compra;

update cliente set idCliente = 10 where idCliente = 1;

 
 