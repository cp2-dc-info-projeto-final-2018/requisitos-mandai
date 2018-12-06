CREATE TABLE cadastro(
matricula VARCHAR(9) NOT NULL,
nome VARCHAR(50) NOT NULL,
email VARCHAR(100) NOT NULL,
senha VARCHAR(60) NOT NULL,
alertasEmail BOOLEAN NOT NULL,
cpf VARCHAR(11) NOT NULL,
escola VARCHAR(50) NOT NULL,
estado VARCHAR(50) NOT NULL,
cidade VARCHAR (50) NOT NULL,
tipo INT NOT NULL,
PRIMARY KEY(matricula)
);

CREATE TABLE professor(
matricula_professor VARCHAR(9) NOT NULL,
PRIMARY KEY(matricula_professor),
FOREIGN KEY(matricula_professor) REFERENCES cadastro(matricula)
);

CREATE TABLE disciplina
id INT NOT NULL,
nome VARCHAR (50) NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE conteudo(
cod_conteudo INT AUTO_INCREMENT NOT NULL,
nome VARCHAR(50) NOT NULL,
arquivo VARCHAR(100) NOT NULL,
matricula_professor VARCHAR(9) NOT NULL,
mat_professor INT NOT NULL,
idDisciplina INT NOT NULL,
PRIMARY KEY(cod_conteudo),
FOREIGN KEY(matricula_professor) REFERENCES professor(matricula_professor)
);
