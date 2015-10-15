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

INSERT INTO produto values
(
  11,
  'Default',
  'Default',
  0,
  0,
  'Default',
  '2016-03-17'
);


INSERT INTO produto values
(
  12,
  'Ervilha',
  'Grãos',
  2.2,
  200,
  'Default',
  '2014-03-17'
);

SELECT * FROM produto; /*Selecionar todos os atributos*/

SELECT nome, Min(preco) FROM produto;

SELECT nome as 'Nome do Produto',preco, quant, (preco*quant) as 'Total' FROM produto ;


SELECT nome,preco FROM produto where (preco <= 10);

SELECT * FROM produto WHERE (categoria='carnes');

SELECT * FROM produto WHERE quant not between 80 and 200;

SELECT * FROM produto WHERE categoria in ('Frios','Bebidas');

SELECT * FROM produto where (month(validade) = 09 and year(validade) = 2015);

SELECT * FROM produto WHERE nome LIKE 'P%';

SELECT categoria, Min(preco) AS 'Menor Valor' 
FROM produto 
WHERE categoria = 'Frios' OR categoria = 'Bebidas'
GROUP BY categoria;

SELECT * FROM produto where (month(validade) = 12 AND year(validade) = 2015 AND categoria='Carnes');

SELECT categoria, sum(quant) as 'Quantidade Total', count(quant) as 'Total de Itens' 
FROM produto  
GROUP BY categoria
HAVING sum(quant) < 500 ;

SELECT categoria, sum(quant) as 'Quantidade Total', count(quant) as 'Total de Itens', SUM(quant * preco) as 'Valor do estoque'
FROM produto  
GROUP BY categoria;

USE dbestudo;

/*Adicionando o campo idFornecedor*/
ALTER TABLE produto 
ADD idFornecedor int;

UPDATE produto 
SET idFornecedor=1
WHERE fornecedor='Casa da Fruta';

UPDATE produto 
SET idFornecedor=2
WHERE fornecedor='Açougue do Tio';

UPDATE produto 
SET idFornecedor=3
WHERE fornecedor='Perdigão';

UPDATE produto 
SET idFornecedor=4
WHERE fornecedor='Adria';

UPDATE produto 
SET idFornecedor=5
WHERE fornecedor='Frisa';

UPDATE produto 
SET idFornecedor=6
WHERE fornecedor='Porto salgado';

UPDATE produto 
SET idFornecedor=7
WHERE fornecedor='Seara';

UPDATE produto 
SET idFornecedor=8
WHERE fornecedor='Meriat';

UPDATE produto 
SET idFornecedor=9
WHERE fornecedor='Andina';

/*Removendo o campo Fornecedor*/
ALTER TABLE produto
DROP COLUMN fornecedor;

CREATE TABLE fornecedor
(
  idFornecedor int primary Key,
  nome varchar(45) not null,
  telefone varchar(15),
  email varchar(60),
  idEndereco int
);

INSERT INTO fornecedor values
(
  1,
  'Casa da Fruta',
  '+55273030-2020',
  'contato@casadafruta.com.br',
  100
);

INSERT INTO fornecedor values
(
  2,
  'Açougue do Tio',
  '+55273030-3030',
  'contato@acouguedotio.com.br',
  200
);

INSERT INTO fornecedor values
(
  3,
  'Perdigão',
  '+55273030-4040',
  'contato@perdigao.com.br',
  300
);

INSERT INTO fornecedor values
(
  4,
  'Adria',
  '+55273030-5050',
  'contato@adria.com.br',
  400
);

INSERT INTO fornecedor values
(
  5,
  'Frisa',
  '+55273030-6060',
  'contato@frisa.com.br',
  500
);

INSERT INTO fornecedor values
(
  6,
  'Porto Salgado',
  '+55273030-7070',
  'contato@portosalgado.com.br',
  600
);

INSERT INTO fornecedor values
(
  7,
  'Seara',
  '+55273030-8080',
  'contato@seara.com.br',
  700
);

INSERT INTO fornecedor values
(
  8,
  'Meriat',
  '+55273030-9090',
  'contato@meriat.com.br',
  800
);

INSERT INTO fornecedor values
(
  9,
  'Andina',
  '+55273030-1010',
  'contato@andina.com.br',
  900
);

select * from fornecedor;


SELECT produto.nome AS 'Nome do Produto', produto.preco AS 'Preço Unitário',
fornecedor.nomeFornecedor AS 'Fornecedor', fornecedor.telefone AS 'Telefone do Fornecedor'
FROM produto, fornecedor
WHERE produto.idFornecedor = fornecedor.idFornecedor;


SELECT p.nome AS 'Nome do Produto', 
f.nomeFornecedor AS 'Fornecedor' 
FROM produto p, fornecedor f
WHERE (f.idFornecedor = p.idFornecedor) 
AND (f.nomeFornecedor = 'meriat');

SELECT p.* , 
f.nomeFornecedor AS 'Fornecedor' 
FROM produto p, fornecedor f
WHERE (f.idFornecedor = p.idFornecedor) 
AND (f.nomeFornecedor = 'meriat');

SELECT * FROM produto ORDER BY  nome DESC; /*ASC é ascendente e DESC é decrescente*/

SELECT * FROM produto ORDER BY  categoria, quant ASC;

SELECT f.nomeFornecedor AS 'Fornecedor' , count(p.idfornecedor) AS 'Produtos Fornecidos'
FROM produto p, fornecedor f 
WHERE (f.idFornecedor = p.idFornecedor) 
GROUP BY f.nomefornecedor;

SELECT p.categoria as 'Nome', count(*) as 'Quantidade'
FROM produto p
GROUP BY p.categoria;

INSERT INTO produto values
(
  12,
  'Ervilha',
  'Grãos',
  2.2,
  200,
  '2014-03-17',
  1000
);

SELECT * FROM produto;

UPDATE produto set idFornecedor=4
WHERE idProduto=11;

UPDATE produto set validade='2016-05-25'
WHERE idProduto=11;

SELECT * FROM fornecedor;

ALTER TABLE produto ADD CONSTRAINT fk_fornecedor_produto 
 foreign key (idFornecedor) references fornecedor (idFornecedor);
 
 INSERT INTO produto values
(
  13,
  'Milho',
  'Grãos',
  1.2,
  400,
  '2016-05-25',
  4
);
