CREATE TABLE CADASTRO (
Cod_cadastro INT PRIMARY KEY NOT NULL, 
Nome VARCHAR (50),
Sobrenome VARCHAR (50),
Senha VARCHAR (20),
Email VARCHAR (50),
CPF VARCHAR (11),
Escola VARCHAR (50),
Cidade VARCHAR (50),
Estado VARCHAR (50)
);

CREATE TABLE  ALUNOCP2 (
Cod_aluno INT PRIMARY KEY NOT NULL,
Nome VARCHAR (50), 
Sobrenome VARCHAR (50)
);


CREATE TABLE PROFESSOR (
Cod_professor INT PRIMARY KEY NOT NULL,
Nome VARCHAR (50),
Sobrenome VARCHAR (50)
);

CREATE TABLE USUARIO (
Cod_usuario INT PRIMARY KEY NOT NULL,
Nome VARCHAR (50),
Sobrenome VARCHAR (50)
);

CREATE TABLE CONTEUDO (
Cod_conteudo INT PRIMARY KEY NOT NULL,
Nome VARCHAR (50),
Nivelamento VARCHAR (10),
Comentarios VARCHAR (500),
Avaliacao INT NOT NULL,
Especificar_materia VARCHAR (30), 
);
