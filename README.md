# Gestão de Estoque - Mercado

Este é um projeto simples de CRUD (Create, Read, Update, Delete) desenvolvido em PHP para controlar os produtos disponíveis no estoque de um mercado. O sistema foi projetado para rodar em um ambiente local (localhost) utilizando o XAMPP.

## Tecnologias e Pré-requisitos

- Servidor e Banco de Dados: Apache e MySQL (via XAMPP).
- Back-end: PHP para lógica de negócio e conexão com o banco de dados.
- Front-end: HTML e CSS para a estrutura e estilização da interface.
- Versionamento: Git e GitHub.

## Configuração do Banco de Dados

- Nome do Banco: `gestao_estoque`
- Tabelas Principais: `categoria` e `produto`.
- A tabela `categoria` armazena o id e a descrição da categoria.
- A tabela `produto` armazena nome, categoria, descrição, preço, quantidade em estoque e data de validade.

## Instalação

1. Instale o XAMPP e inicie o Apache e o MySQL.
2. Clone este repositório dentro da pasta `htdocs` do XAMPP.
3. Importe o arquivo `database/db.sql` no phpMyAdmin para criar o banco.
4. Confira as credenciais no arquivo `infra/conexao.php`.
5. Acesse o projeto pelo navegador em `http://localhost/nome-da-pasta/`.

## Configuração de Conexão

As credenciais de acesso ao banco de dados estão configuradas no arquivo `infra/conexao.php`.

- Host: localhost
- Usuário: root
- Senha: (em branco)
- Porta: 3306 (usado a 6608 caso não funcione)

## Funcionalidades (CRUD)

O sistema implementa as quatro operações básicas de gerenciamento de dados, todas com Prepared Statements:

- **Create (Cadastrar):** Formulário na página principal (`index.php`) que envia dados via POST para `public/cadastrar.php`, passando pela validação em `public/validacao.php` e inserindo um novo produto no banco.
- **Read (Listar):** A página principal realiza uma consulta SQL (JOIN entre as tabelas `produto` e `categoria`) e exibe os resultados na tabela.
- **Update (Editar):** Acessível pelo link "Editar" na tabela. Redireciona para `public/editar.php`, que carrega os dados do produto em um formulário. As alterações são enviadas para `public/atualizar.php`, que realiza o UPDATE no banco.
- **Delete (Excluir):** Acessível pelo link "Excluir" na tabela. Envia o ID do produto via GET para `public/excluir.php`, que executa o comando DELETE e remove o registro.

## Caso de Uso

A documentação do caso de uso (ator e ações) está em `docs/diagramaCasoUso.md`, junto com o link e a imagem do diagrama.

- Ator: Funcionário do mercado.
- Ações: cadastrar, listar, editar e excluir produtos.