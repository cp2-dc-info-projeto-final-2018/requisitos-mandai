# Especificação de Casos de Uso

## Sumário


# CDU 01 - Solicitação de Conteúdo
 
 Atores: Aluno normal, Aluno cp2 e Professor.
 
 Pré-Condições: Usuário deverá ser cadastrado. 
 
 Fluxo principal:
	
	1. O aluno deverá acessar a janela de solicitação de conteúdos.
    2. O aluno irá selecionar a matéria desejada.
	3. O aluno irá adcionar título e subtítulo.
	4. O aluno irá fazer upload do material desejado.
	5. O professor irá acessar o material solicitado.
	6. O professor irá aprovar/reprovar o material solicitado.
	
# CDU 02 - Upload de Conteúdo

Atores: Professor

Pré-condições: O professor deverá estar cadastrado com sua devida identificação.

Fluxo principal:
	
	1. O professor irá acessar sua matéria desejada.
	2. O professor irá adcionar título e subtítulo do material.
	3. O professor irá fazer upload do material desejado.
	
# CDU 03 - Comentar Conteúdo

Atores: Professor, Aluno normal, Aluno cp2

Pré-Condições: O professor e os alunos deverão estar cadastrados para ter a opção de comentar conteúdo.

Fluxo principal:

	1. O usuário acessará o compartimento da matéria desejada.
	2. O usuário acessará o conteúdo postado.
	3. O usuário terá liberdade de comentar/curtir ou não o conteúdo.

# CDU 04 - Cadastrar

Atores: Aluno normal. 

Pré requisitos: Não há

Fluxo principal: 

	1. O user irá acessar a página de cadastro.
	2. Irá preencher os dados.
	3. Autenticar seu cadastro.

# CDU 05 - Autenticar

Atores: Aluno normal. 

Pré requisitos: O aluno deverá ter efetuado seu cadastro.

Fluxo principal: 

	1. O aluno vai acessar o seu e-mail.
	2. O aluno vai confirmar seu cadastro.

# CDU 06 - Acesso a conteúdo dividido em tópicos

Atores: Aluno normal. 

Pré requisitos: Não há.

Fluxo principal: 

	1. O aluno acessará o site.

# CDU 07 - Visualizar notificações

Atores: Aluno Cp2, Aluno normal, Professor Cp2. 

Pré requisitos: Estar cadastrado.

Fluxo principal: 

	1. O usuário acessará o compartimento de notificações.

# CDU 08 - Upload de Conteúdo

Atores: Professor Cp2. 

Pré requisitos: Estar cadastrado.

Fluxo principal: 

	1. O professor acessará o menu da matéria desejada.
	2. O professor acessará o compartimento de uploads.
	3. O professor colocará títulos e subtítulos.
	4. O professor realizará os uploads.

# CDU 09 - Solicitação de Cadastro

Atores: Aluno Cp2, Professor Cp2. 

Pré requisitos: Não há.

Fluxo principal: 

	1. O usuário entrará no compartimento de cadastro.
	2. O usuário irá preencher seus dados.
	3. O usuário irá se identificar como Aluno Cp2/Professor Cp2.
	4. Caso seja Aluno Cp2, irá aguardar a aprovação do Professor Cp2.
	5. Caso seja Professor Cp2, irá aguardar a aprovação do Administrador.

# CDU 10 - Aprovação de Cadastro

Atores: Administrador e Professor Cp2. 

Pré requisitos: Estar cadastrado como Professor Cp2.

Fluxo principal: 

	1. O Professor Cp2 acessará o compartimento de aprovação de cadastros.
	2. O professor Cp2 aprovará ou não o cadastro do usuário.
	3. O administrador aprovará o cadastro do professor.