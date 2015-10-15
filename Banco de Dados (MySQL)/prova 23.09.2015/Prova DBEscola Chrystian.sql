create database dbescola;

use dbescola;

CREATE TABLE Curso (
 codigoCurso 		INT  			NOT NULL,
 nomeCurso 			VARCHAR(45) 	NOT NULL,
 dataInicio 		DATE  				NULL,
 dataTermino 		DATE  				NULL,
 statusCurso 		VARCHAR(15)  		NULL,
 codigoProfessor 	INT 			NOT NULL,
 
 PRIMARY KEY ( codigoCurso ) 
);
 
 
CREATE TABLE Matricula (
 codigoMatricula 	INT 			NOT NULL,
 codigoAluno 		INT 			NOT NULL,
 codigoCurso 		INT 			NOT NULL,
 dataMatricula 		DATE 			NOT NULL,
 statusMatricula 	VARCHAR(15) 	NOT NULL,

 PRIMARY KEY ( codigoMatricula ) 
);


CREATE TABLE Professor (
 codigoProfessor 	INT 			NOT NULL,
 nomeProfessor 		VARCHAR(45) 	NOT NULL,
 endProfessor 		VARCHAR(45) 		NULL,
 cidProfessor 		VARCHAR(30) 		NULL,
 estProfessor 		VARCHAR(2) 			NULL,
 cepProfessor 		VARCHAR(9) 			NULL,
 telProfessor 		VARCHAR(15) 	NOT NULL,
 emailProfessor 	VARCHAR(60) 	NOT NULL,
 
 PRIMARY KEY ( codigoProfessor ) 
);

CREATE TABLE Aluno (
 codigoAluno 		INT 			NOT NULL,
 nomeAluno 			VARCHAR(45) 	NOT NULL,
 endAluno 			VARCHAR(45) 		NULL,
 cidAluno 			VARCHAR(30) 		NULL,
 estAluno 			VARCHAR(2) 			NULL,
 cepAluno 			VARCHAR(9) 			NULL,
 telAluno 			VARCHAR(15) 	NOT NULL,
 nascimentoAluno	DATE			NOT NULL,
 responsavelAluno 	VARCHAR(45) 	NOT NULL,
 statusAluno		VARCHAR(15) 	NOT NULL,
 
 PRIMARY KEY (codigoAluno) 
);

ALTER TABLE Matricula
ADD CONSTRAINT fk_Curso 
FOREIGN KEY(codigoCurso) 
REFERENCES Curso (codigoCurso);

ALTER TABLE Curso
ADD CONSTRAINT fk_Professor 
FOREIGN KEY (codigoProfessor) 
REFERENCES Professor (codigoProfessor);

ALTER TABLE Matricula
ADD CONSTRAINT fk_Aluno 
FOREIGN KEY (codigoAluno) 
REFERENCES Aluno (codigoAluno);


INSERT INTO `dbescola`.`professor` (`codigoProfessor`, `nomeProfessor`, `endProfessor`, `cidProfessor`, `estProfessor`, `cepProfessor`, `telProfessor`, `emailProfessor`) VALUES ('1', 'Cleber Felipe', 'R. dos Mestres, 33, Cocal', 'Vila Velha', 'ES', '29100-000', '99999-8888', 'cleberfelipe@gmail.com');

INSERT INTO `dbescola`.`professor` (`codigoProfessor`, `nomeProfessor`, `endProfessor`, `cidProfessor`, `estProfessor`, `cepProfessor`, `telProfessor`, `emailProfessor`) VALUES ('2', 'Alberçando Ramani', 'Av. dos Serraquios, 77, Centro', 'Serra', 'ES', '29200-000', '98888-7777', 'albercanto@hotmail.com');

INSERT INTO `dbescola`.`professor` (`codigoProfessor`, `nomeProfessor`, `endProfessor`, `cidProfessor`, `estProfessor`, `cepProfessor`, `telProfessor`, `emailProfessor`) VALUES ('3', 'Thiago Portugal', 'R. dos Nioados, 69, Boa Vista', 'Vila Velha', 'ES', '29100-000', '97777-6666', 'thiagoportugal@gmail.com');

INSERT INTO `dbescola`.`professor` (`codigoProfessor`, `nomeProfessor`, `endProfessor`, `cidProfessor`, `estProfessor`, `cepProfessor`, `telProfessor`, `emailProfessor`) VALUES ('4', 'Daniel de Assis', 'Av. Chaplin, 45, Jardim Camburi', 'Vitoria', 'ES', '29000-000', '96666-5555', 'danielassis@gmail.com');


INSERT INTO `dbescola`.`aluno` (`codigoAluno`, `nomeAluno`, `endAluno`, `cidAluno`, `estAluno`, `cepAluno`, `telAluno`, `nascimentoAluno`, `responsavelAluno`, `statusAluno`) VALUES ('1', 'Mariana da Silva', 'Rua dos Guararas, 23, Centro', 'Vitoria', 'ES', '29000-000', '3030-2323', '1980/10/10', 'Antonio Jose', 'Ativo');

INSERT INTO `dbescola`.`aluno` (`codigoAluno`, `nomeAluno`, `endAluno`, `cidAluno`, `estAluno`, `cepAluno`, `telAluno`, `nascimentoAluno`, `responsavelAluno`, `statusAluno`) VALUES ('2', 'Joao dos Santos', 'Av. dos Amores, 34, Coqueiral', 'Vila Velha', 'ES', '29100-000', '3320-0202', '1998/01/12', 'Martha Silva', 'Ativo');

INSERT INTO `dbescola`.`aluno` (`codigoAluno`, `nomeAluno`, `endAluno`, `cidAluno`, `estAluno`, `cepAluno`, `telAluno`, `nascimentoAluno`, `responsavelAluno`, `statusAluno`) VALUES ('3', 'Claudio Santana', 'R. das Amoras, 222, Cobilandia', 'Vila Velha', 'ES', '29100-001', '3232-2020', '1985/02/02', 'Otavio de Moraes', 'Ativo');

INSERT INTO `dbescola`.`aluno` (`codigoAluno`, `nomeAluno`, `endAluno`, `cidAluno`, `estAluno`, `cepAluno`, `telAluno`, `nascimentoAluno`, `responsavelAluno`, `statusAluno`) VALUES ('4', 'Sandra Gonçalves', 'R. dos Laranjais, 45, Serra Dourada', 'Serra', 'ES', '29200-000', '3212-2565', '1999/08/24', 'Mariana Santos', 'Ativo');

INSERT INTO `dbescola`.`aluno` (`codigoAluno`, `nomeAluno`, `endAluno`, `cidAluno`, `estAluno`, `cepAluno`, `telAluno`, `nascimentoAluno`, `responsavelAluno`, `statusAluno`) VALUES ('5', 'Francisco Fernandes', 'Av. das Acacias, 445, Mata da Praia', 'Vitoria', 'ES', '29000-000', '3200-2323', '1980/02/15', 'Jeferson Souza', 'Ativo');

INSERT INTO `dbescola`.`aluno` (`codigoAluno`, `nomeAluno`, `endAluno`, `cidAluno`, `estAluno`, `cepAluno`, `telAluno`, `nascimentoAluno`, `responsavelAluno`, `statusAluno`) VALUES ('6', 'Alexia Silveira', 'R. Mamonas, 44, Bento Ferreira', 'Vitoria', 'ES', '29000-000', '3200-1010', '1986/12/14', 'José Fernandes', 'Reprovado');

INSERT INTO `dbescola`.`aluno` (`codigoAluno`, `nomeAluno`, `endAluno`, `cidAluno`, `estAluno`, `cepAluno`, `telAluno`, `nascimentoAluno`, `responsavelAluno`, `statusAluno`) VALUES ('7', 'Fernando Paes', 'R. Linda, 33, Centro', 'Vitoria', 'ES', '29000-000', '3219-1515', '1982-05-12', 'Manoela Santos', 'Ativo');

INSERT INTO `dbescola`.`aluno` (`codigoAluno`, `nomeAluno`, `endAluno`, `cidAluno`, `estAluno`, `cepAluno`, `telAluno`, `nascimentoAluno`, `responsavelAluno`, `statusAluno`) VALUES ('8', 'Carlos Chagas', 'Av. Polonia, 455, Centro', 'Vila Velha', 'ES', '29100-000', '3215-5987', '1975-03-10', 'Ramirez Silva', 'Reprovado');

INSERT INTO `dbescola`.`aluno` (`codigoAluno`, `nomeAluno`, `endAluno`, `cidAluno`, `estAluno`, `cepAluno`, `telAluno`, `nascimentoAluno`, `responsavelAluno`, `statusAluno`) VALUES ('9', 'Amanda Clark', 'R. dos Herois, 233, Laranjeiras', 'Serra', 'ES', '29200-000', '3256-3265', '1977-10-05', 'Ruan Santana', 'Reprovado');

INSERT INTO `dbescola`.`aluno` (`codigoAluno`, `nomeAluno`, `endAluno`, `cidAluno`, `estAluno`, `cepAluno`, `telAluno`, `nascimentoAluno`, `responsavelAluno`, `statusAluno`) VALUES ('10', 'Rogerio Souza', 'R. Apocalipse, 677, Bento Ferreira', 'Vitoria', 'ES', '29000-000', '3200-4578', '1972-01-20', 'Amelia Silva', 'Reprovado');



INSERT INTO `dbescola`.`curso` (`codigoCurso`, `nomeCurso`, `dataInicio`, `dataTermino`, `statusCurso`, `codigoProfessor`) VALUES ('1', 'Técnico em Informática', '2014/02/02', '2015/05/30', 'Andamento', '1');

INSERT INTO `dbescola`.`curso` (`codigoCurso`, `nomeCurso`, `dataInicio`, `dataTermino`, `statusCurso`, `codigoProfessor`) VALUES ('2', 'Excel Avançado', '2014/02/10', '2014/02/20', 'Concluído', '1');

INSERT INTO `dbescola`.`curso` (`codigoCurso`, `nomeCurso`, `dataInicio`, `dataTermino`, `statusCurso`, `codigoProfessor`) VALUES ('3', 'Excel Básico', '2014-03/06', '2014/03/16', 'Concluído', '1');

INSERT INTO `dbescola`.`curso` (`codigoCurso`, `nomeCurso`, `dataInicio`, `dataTermino`, `statusCurso`, `codigoProfessor`) VALUES ('4', 'Lógica de Programação', '2014/03/20', '2014/04/20', 'Cancelado', '1');

INSERT INTO `dbescola`.`curso` (`codigoCurso`, `nomeCurso`, `dataInicio`, `dataTermino`, `statusCurso`, `codigoProfessor`) VALUES ('5', 'Reparador de Computador', '2014/04/02', '2014/04/30', 'Concluído', '2');

INSERT INTO `dbescola`.`curso` (`codigoCurso`, `nomeCurso`, `dataInicio`, `dataTermino`, `statusCurso`, `codigoProfessor`) VALUES ('6', 'Montador de Computador', '2014/04/05', '2014/05/05', 'Concluído', '3');

INSERT INTO `dbescola`.`curso` (`codigoCurso`, `nomeCurso`, `dataInicio`, `dataTermino`, `statusCurso`, `codigoProfessor`) VALUES ('7', 'Lógica de Programação', '2014/04/03', '2014/05/10', 'Concluído', '1');

INSERT INTO `dbescola`.`curso` (`codigoCurso`, `nomeCurso`, `dataInicio`, `dataTermino`, `statusCurso`, `codigoProfessor`) VALUES ('8', 'Redes de Computadores', '2014/05/02', '2014/06/05', 'Concluído', '2');

INSERT INTO `dbescola`.`curso` (`codigoCurso`, `nomeCurso`, `dataInicio`, `dataTermino`, `statusCurso`, `codigoProfessor`) VALUES ('9', 'Montador de Computador', '2014/05/03', '2014/06/06', 'Concluído', '3');

INSERT INTO `dbescola`.`curso` (`codigoCurso`, `nomeCurso`, `dataInicio`, `dataTermino`, `statusCurso`, `codigoProfessor`) VALUES ('10', 'Redes de Computadores', '2014/06/03', '2014/07/05', 'Concluído', '2');

INSERT INTO `dbescola`.`curso` (`codigoCurso`, `nomeCurso`, `dataInicio`, `dataTermino`, `statusCurso`, `codigoProfessor`) VALUES ('11', 'Banco de Dados', '2014/05/15', '2014/06/20', 'Concluído', '1');

INSERT INTO `dbescola`.`curso` (`codigoCurso`, `nomeCurso`, `dataInicio`, `dataTermino`, `statusCurso`, `codigoProfessor`) VALUES ('12', 'Java JEE - Orientado a Objetos', '2014/02/02', '2014/03/25', 'Concluído', '4');

INSERT INTO `dbescola`.`curso` (`codigoCurso`, `nomeCurso`, `dataInicio`, `dataTermino`, `statusCurso`, `codigoProfessor`) VALUES ('13', 'Lógica de Programação', '2014/04/03', '2014/05/22', 'Concluído', '4');

INSERT INTO `dbescola`.`curso` (`codigoCurso`, `nomeCurso`, `dataInicio`, `dataTermino`, `statusCurso`, `codigoProfessor`) VALUES ('14', 'Java JEE - Orientado a Objetos', '2014-10-03', '2014-11-25', 'Andamento', '4');



INSERT INTO `dbescola`.`matricula` (`codigoMatricula`, `codigoAluno`, `codigoCurso`, `dataMatricula`, `statusMatricula`) VALUES ('1', '2', '1', '2013/11/03', 'Fechada');

INSERT INTO `dbescola`.`matricula` (`codigoMatricula`, `codigoAluno`, `codigoCurso`, `dataMatricula`, `statusMatricula`) VALUES ('2', '3', '1', '2013/11/04', 'Fechada');

INSERT INTO `dbescola`.`matricula` (`codigoMatricula`, `codigoAluno`, `codigoCurso`, `dataMatricula`, `statusMatricula`) VALUES ('3', '4', '1', '2013/10/01', 'Fechada');

INSERT INTO `dbescola`.`matricula` (`codigoMatricula`, `codigoAluno`, `codigoCurso`, `dataMatricula`, `statusMatricula`) VALUES ('4', '1', '4', '2014/03/10', 'Cancelada');

INSERT INTO `dbescola`.`matricula` (`codigoMatricula`, `codigoAluno`, `codigoCurso`, `dataMatricula`, `statusMatricula`) VALUES ('5', '5', '8', '2014/05/01', 'Fechada');

INSERT INTO `dbescola`.`matricula` (`codigoMatricula`, `codigoAluno`, `codigoCurso`, `dataMatricula`, `statusMatricula`) VALUES ('6', '6', '8', '2014/05/02', 'Fechada');

INSERT INTO `dbescola`.`matricula` (`codigoMatricula`, `codigoAluno`, `codigoCurso`, `dataMatricula`, `statusMatricula`) VALUES ('7', '1', '12', '2014/02/01', 'Fechada');

INSERT INTO `dbescola`.`matricula` (`codigoMatricula`, `codigoAluno`, `codigoCurso`, `dataMatricula`, `statusMatricula`) VALUES ('8', '9', '14', '2014-10-02', 'Fechada');

INSERT INTO `dbescola`.`matricula` (`codigoMatricula`, `codigoAluno`, `codigoCurso`, `dataMatricula`, `statusMatricula`) VALUES ('9', '10', '14', '2014-10-02', 'Fechada');

INSERT INTO `dbescola`.`matricula` (`codigoMatricula`, `codigoAluno`, `codigoCurso`, `dataMatricula`, `statusMatricula`) VALUES ('10', '8', '14', '2014-10-15', 'Fechada');

/*Questão A*/
SELECT c.* 
FROM Matricula m, Curso c 
WHERE m.codigoCurso = c.codigoCurso;  

/*Questão B*/
SELECT c.nomeCurso, count(m.codigoCurso) AS 'Quantidade de Matricula'
FROM Matricula m, Curso c 
WHERE m.codigoCurso = c.codigoCurso
GROUP BY c.nomeCurso; 

/*Questão C*/
SELECT c.*
FROM Curso c 
WHERE (month(c.dataInicio) = 04 OR month(c.dataInicio) = 06);

/*Questão D*/
UPDATE Curso c
SET c.statusCurso = 'Concluído' 
WHERE (month(c.dataTermino) = 11 AND year(c.dataTermino) = 2014);

SELECT c.*
FROM Curso c
WHERE (c.dataTermino between '2014-11-01' and '2014-11-30');

/*Questão E*/
DELETE 
FROM Matricula
WHERE (codigoCurso = (SELECT c.codigoCurso FROM Curso c WHERE c.statusCurso = 'Cancelado')); 

/*Questão F*/
SELECT a.*, m.dataMatricula
FROM Aluno a, Matricula m
WHERE (a.codigoAluno = m.codigoAluno)
AND (m.dataMatricula between '2014-01-02' AND '2014-12-22');

/*Questão G*/
SELECT c.*, p.nomeProfessor
FROM Curso c, Professor p
WHERE (c.codigoProfessor = p.codigoProfessor)
AND (p.nomeProfessor = 'Cleber Felipe');


/*Questão H*/
SELECT c.*,m.dataMatricula
FROM Curso c, Professor p, Matricula m
WHERE (c.codigoProfessor = p.codigoProfessor AND (p.nomeProfessor LIKE 'Alberçando %'))
AND ((m.codigoCurso = c.codigoCurso) AND ((month(m.dataMatricula) = 05) AND (year(m.dataMatricula) = 2014)));

/*Questão I*/
SELECT c.dataInicio, a.*, c.nomeCurso
FROM Curso c, Aluno a
WHERE (c.nomeCurso = 'Tecnico em Informática')
AND (year(c.dataInicio) = 2014);

/*Questão J*/
SELECT  a.*, p.nomeProfessor
FROM Curso c, Professor p, Matricula m, Aluno a
WHERE (c.codigoProfessor = p.codigoProfessor AND (p.nomeProfessor LIKE 'Daniel %'))
AND ((m.codigoCurso = c.codigoCurso) AND (a.codigoAluno = m.codigoAluno) AND (a.statusAluno = 'Reprovado'));


drop database dbEscola;
commit;