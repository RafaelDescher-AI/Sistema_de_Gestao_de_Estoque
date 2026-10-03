
# Caso de Uso - Gestão de Estoque - Mercado

## Ator

- **Funcionário do mercado:** responsável por controlar os produtos do estoque. É o único usuário do sistema.

## Ações do ator

- **Cadastrar produto:** informa nome, categoria, descrição, preço, quantidade e data de validade para adicionar um novo produto.
- **Listar produtos:** visualiza todos os produtos cadastrados na tabela da página principal.
- **Editar produto:** altera os dados de um produto já cadastrado.
- **Excluir produto:** remove um produto do estoque.

## Regras de validação

Ao cadastrar ou editar, o sistema valida os dados: preço e quantidade não podem ser negativos e a data de validade é obrigatória. Se algum dado for inválido, o sistema exibe um alerta e volta ao formulário.

link do draw.io:
https://drive.google.com/file/d/1yV0X-2oVHX8CTD9N21B6zNGPSd2gFK-S/view?usp=sharing