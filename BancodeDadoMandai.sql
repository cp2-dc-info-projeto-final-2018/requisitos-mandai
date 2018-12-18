CREATE TABLE cadastro(
matricula VARCHAR(9) NOT NULL,
nome VARCHAR(50) NOT NULL,
email VARCHAR(100) NOT NULL,
senha VARCHAR(60) NOT NULL,
tipo INT NOT NULL,
PRIMARY KEY(matricula)
);

CREATE TABLE disciplina
(id INT AUTO_INCREMENT NOT NULL,
nome VARCHAR (20) NOT NULL UNIQUE,
PRIMARY KEY (id)
);

CREATE TABLE professor(
matricula_professor VARCHAR(9) NOT NULL,
idDisciplina INT NOT NULL,
PRIMARY KEY(matricula_professor),
FOREIGN KEY(matricula_professor) REFERENCES cadastro(matricula),
FOREIGN KEY(idDisciplina) REFERENCES disciplina(id)
);

CREATE TABLE conteudo(
cod_conteudo INT AUTO_INCREMENT NOT NULL,
nome VARCHAR(50) NOT NULL,
arquivo VARCHAR(100) NOT NULL,
matricula_professor VARCHAR(9) NOT NULL,
idDisciplina INT NOT NULL,
PRIMARY KEY(cod_conteudo),
FOREIGN KEY(matricula_professor) REFERENCES professor(matricula_professor),
FOREIGN KEY(idDisciplina) REFERENCES disciplina(id)
);


