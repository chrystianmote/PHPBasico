CREATE DATABASE dbESTUDO;

USE dbestudo;

CREATE TABLE produto
(
  idProduto int primary key,
  nome varchar(45) not null,
  categoria varchar(20) not null,
  preco numeric(5,2) not null,
  quant int,
  fornecedor varchar(45) not null,
  validade date
);

INSERT INTO produto values
(
  1,
  'Tomate',
  'Fruta',
  2.8,
  100,
  'Casa da Fruta',
  '2015-09-24'
);

INSERT INTO produto values
(
  2,
  'Picanha',
  'Carnes',
  37.5,
  50,
  'Açougue do Tio',
  '2016-03-24'
);

INSERT INTO produto values
(
  3,
  'Carne de hamburguer',
  'Carnes',
  10.0,
  150,
  'Açougue do Tio',
  '2015-12-26'
);

INSERT INTO produto values
(
  4,
  'Peito de Frango com Osso',
  'Carnes',
  8.2,
  250,
  'Perdigão',
  '2015-12-26'
);

INSERT INTO produto values
(
  5,
  'Macarrão',
  'Massas',
  3.0,
  50,
  'Adria',
  '2016-02-25'
);

INSERT INTO produto values
(
  6,
  'Bacon',
  'Carnes',
  12.0,
  300,
  'Frisa',
  '2015-12-26'
);

INSERT INTO produto values
(
  7,
  'Filé de bacalhau',
  'Peixes',
  67.9,
  100,
  'Porto salgado',
  '2016-02-26'
);

INSERT INTO produto values
(
  8,
  'Apresuntado',
  'Frios',
  12.48,
  60,
  'Seara',
  '2015-12-26'
);

INSERT INTO produto values
(
  9,
  'Espino',
  'Bebidas',
  41.9,
  150,
  'Meriat',
  null
);

INSERT INTO produto values
(
  10,
  'Coca-Cola',
  'Bebidas',
  4.79,
  350,
  'Andina',
  '2016-03-17'
);

SELECT * FROM produto; /*Selecionar todos os atributos*/

SELECT nome,preco FROM produto;
















