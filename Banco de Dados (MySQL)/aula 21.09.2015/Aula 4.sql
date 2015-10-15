use dbestudo;

create table endereco(
idEndereco int not null ,
logradouro varchar(100) not null,
bairro varchar(30) not null,
cidade varchar(30) not null,
uf varchar(2) not null,
cep varchar(100) null,
idFornecedor int not null,

CONSTRAINT pk_idFornecedor_endereco PRIMARY KEY (idEndereco),
CONSTRAINT fk_idFornecedor_endereco FOREIGN KEY (idFornecedor) REFERENCES fornecedor (idFornecedor)

);
 INSERT INTO endereco VALUES
(
  100,
  'RUA DESEMBARGADOR SANTOS NEVES, 1114',
  'VILA NOVA',
  'VILA VELHA',
  'ES',
  '29101-230',
  1
);

INSERT INTO endereco VALUES
(
  200,
  'RUA JOAO JOAQUIM DA MOTTA, 1000',
  'PRAIA DA COSTA',
  'VILA VELHA',
  'ES',
  '29109-200',
  2
);

INSERT INTO endereco VALUES
(
  300,
  'AV. CARLOS LINDEMBERG, 225',
  'IBES',
  'VILA VELHA',
  'ES',
  '29100-130',
  3
);

INSERT INTO endereco VALUES
(
  400,
  'ALAMEDA NOVA, 10',
  'SOVACO DA COBRA',
  'SERRA',
  'ES',
  '29160-201',
  4
);

INSERT INTO endereco VALUES
(
  500,
  'TRAVESSA DO TRANCO, 7',
  'NOVA ALMEIDA',
  'SERRA',
  'ES',
  '29160-230',
  5
);

INSERT INTO endereco VALUES
(
  600,
  'RUA SETE DE SETEMBRO, 1010',
  'CENTRO',
  'VITÓRIA',
  'ES',
  '29100-100',
  6
);

INSERT INTO endereco VALUES
(
  700,
  'RODOVIA SERAFIM DERENZE, 758',
  'MARUÍPE',
  'VITÓRIA',
  'ES',
  '29100-200',
  7
);

INSERT INTO endereco VALUES
(
  800,
  'AV. EXPEDITO GARCIA, 15',
  'CAMPO GRANDE',
  'CARIACICA',
  'ES',
  '29050-110',
  8
);

INSERT INTO endereco VALUES
(
  900,
  'AV. NOSSA SENHORA DA PENHA, 1500',
  'BARRO VERMELHO',
  'VITÓRIA',
  'ES',
  '29100-250',
  9
);

INSERT INTO endereco VALUES
(
  1000,
  'RUA DEPUTADO RETO JUNIOR, 48',
  'CENTRO',
  'BICAS',
  'MG',
  '36600-100',
  1
);


select f.nomeFornecedor,f.telefone, e.*
from fornecedor f, endereco e
where (e.idFornecedor = f.idFornecedor) and (e.cidade = 'Vitória');

select f.nomeFornecedor,f.telefone, concat(e.logradouro,' - ', e.bairro ,' - ', e.cidade ,', ', e.uf ) as 'Logradouro Completo', p.nome
from fornecedor f, endereco e, produto p
where (e.idFornecedor = f.idFornecedor) and (p.idFornecedor = f.idFornecedor) and (p.nome = 'bacon');

select p.* , f.nomeFornecedor 
from produto p, fornecedor f 
where (p.idFornecedor = f.idFornecedor)  and ( p.nome = 'bacon');

select p.* 
from produto p, endereco e 
where (p.idFornecedor = e.idFornecedor)  and ( e.cidade in('Vila Velha', 'Cariacica'));

select p.* 
from produto p, endereco e 
where (p.idFornecedor = e.idFornecedor)  
and (e.cidade = 'Vila Velha' OR e.cidade = 'Cariacica');

select f.nomeFornecedor, p.nome
from produto p, endereco e , fornecedor f
where (p.idFornecedor = f.idFornecedor)  
and (e.idFornecedor = f.idFornecedor)  
and (p.nome = 'tomate' or e.uf != 'es')
group by f.nomeFornecedor ;

alter table fornecedor drop idEndereco;

commit;

UPDATE produto set preco = preco * 1.10
where categoria != 'Carnes';
