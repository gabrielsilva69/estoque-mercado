# Sistema de Gestão de Estoque

## Objetivo

O Sistema de Gestão de Estoque foi desenvolvido para auxiliar um mercado no controle de seus produtos. O sistema permite cadastrar, visualizar, editar e excluir produtos do estoque.

## Tecnologias utilizadas

- PHP
- MySQL
- HTML
- CSS
- XAMPP
- Git e GitHub

## Requisitos

- XAMPP instalado
- Apache funcionando
- MySQL funcionando
- Navegador
- Git para versionamento

## Instalação

1. Instalar o XAMPP.
2. Iniciar o Apache e o MySQL.
3. Colocar a pasta do projeto dentro de:

`C:\xampp\htdocs\`

4. Abrir o phpMyAdmin.
5. Criar o banco utilizando o arquivo `banco.sql`.
6. Conferir os dados da conexão no arquivo `conexao.php`.
7. Acessar o sistema pelo navegador.

Exemplo:

`http://localhost/estoque-mercado/`

## Banco de dados

O banco possui a tabela `produtos`.

### Tabela produtos

| Campo | Tipo | Descrição |
|---|---|---|
| id | INT | Identificador do produto |
| nome | VARCHAR(100) | Nome do produto |
| categoria | VARCHAR(50) | Categoria |
| descricao | TEXT | Descrição do produto |
| preco | DECIMAL(10,2) | Preço |
| quantidade | INT | Quantidade em estoque |
| validade | DATE | Data de validade |

## Funcionalidades

### Cadastrar produto
Permite adicionar um novo produto informando nome, categoria, descrição, preço, quantidade e validade.

### Visualizar produtos
Exibe todos os produtos cadastrados no banco de dados.

### Editar produto
Permite alterar os dados de um produto já cadastrado.

### Excluir produto
Permite remover um produto do estoque após confirmação.

## Segurança

As operações de inserção, alteração, consulta por ID e exclusão utilizam Prepared Statements para evitar problemas de SQL Injection.

Também são realizadas validações básicas dos dados recebidos pelos formulários.

## Estrutura

- `index.php` — lista os produtos.
- `cadastrar.php` — formulário de cadastro.
- `salvar.php` — salva o produto no banco.
- `editar.php` — formulário de edição.
- `atualizar.php` — atualiza o produto.
- `excluir.php` — exclui o produto.
- `conexao.php` — conexão com o banco.
- `banco.sql` — criação do banco e da tabela.
- `caso_uso.md` — documentação do caso de uso.
- `style.css` — estilos do sistema.