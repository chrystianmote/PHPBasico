create database dbGourmet;

use dbGourmet;

CREATE TABLE tbl_Pedido (
 idPedido INT NOT NULL ,
 idMesa INT NOT NULL ,
 idFidelidade INT NOT NULL   ,
 DataPedido DATE NOT NULL ,
 Hora TIME NOT NULL ,
 StatusPedido VARCHAR(10) NOT NULL ,
 PRIMARY KEY ( idPedido ) 
);


CREATE TABLE  tbl_MenuIngredientes (
 idMenu INT NOT NULL ,
 Ingrediente VARCHAR(45) NOT NULL ,
 PRIMARY KEY ( idMenu, Ingrediente )
);


CREATE TABLE  tbl_Fidelidade (
 idFidelidade INT NOT NULL,
 idPrivilegio INT NOT NULL ,
 Cliente VARCHAR(45) NOT NULL ,
 DataCadastro DATE NOT NULL ,
 Email VARCHAR(60) NOT NULL UNIQUE,
 Pontos INT NOT NULL ,
 Usuario VARCHAR(15) NOT NULL UNIQUE ,
 Senha VARCHAR(45) NOT NULL ,
 PRIMARY KEY ( idFidelidade ) 
);



CREATE TABLE  tbl_ItemPedido (
 idItem INT NOT NULL,
 idPedido INT NOT NULL ,
 idMenu INT NOT NULL ,
 Quantidade INT NOT NULL ,
 Preco DECIMAL(9,2) NOT NULL ,
 HoraEntrega TIME NULL ,
 PRIMARY KEY ( idItem ) 
);


CREATE TABLE  tbl_Privilegio (
 idPrivilegio INT NOT NULL,
 Privilegio VARCHAR(10) NOT NULL ,
 Descricao VARCHAR(45) NOT NULL ,
 PRIMARY KEY ( idPrivilegio ) 
);


CREATE TABLE tbl_Menu (
 idMenu INT NOT NULL ,
 Nome VARCHAR(45) NOT NULL ,
 Categoria VARCHAR(20) NOT NULL ,
 Preco DECIMAL(9,2) NOT NULL ,
 Tempo VARCHAR(10) NOT NULL ,
 Pontos INT NOT NULL ,
 PRIMARY KEY ( idMenu ) 
);

/* um pedido para muitos */
alter table tbl_itemPedido
add constraint fk_tbl_pedido 
foreign key (idPedido) 
references tbl_Pedido (idPedido); 

alter table tbl_menuIngredientes
add constraint fk_tbl_menu 
foreign key (idMenu) 
references tbl_menu (idMenu); 

alter table tbl_pedido
add constraint fk_tbl_fidelidade 
foreign key (idFidelidade) 
references tbl_Fidelidade (idFidelidade);

alter table tbl_fidelidade
add constraint fk_tbl_privilegio 
foreign key (idPrivilegio) 
references tbl_Privilegio (idPrivilegio);

alter table tbl_itempedido
add constraint fk_tbl_menu_ItemPedido
foreign key (idMenu) 
references tbl_Menu (idMenu);

use dbgourmet;
alter table tbl_pedido modify idFidelidade int null;

