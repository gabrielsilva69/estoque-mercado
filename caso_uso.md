# Caso de Uso — Sistema de Gestão de Estoque

## Atores

### Funcionário
Responsável por controlar os produtos do estoque.

## Caso de uso principal

**Gerenciar produtos**

O funcionário pode realizar as seguintes ações:

- Cadastrar produto
- Visualizar produtos
- Editar produto
- Excluir produto

## Fluxo de cadastro

1. O funcionário acessa a opção de cadastro.
2. Informa os dados do produto.
3. O sistema valida os dados.
4. O sistema utiliza Prepared Statement.
5. O produto é salvo no banco de dados.
6. O sistema retorna para a lista de produtos.

## Fluxo de edição

1. O funcionário seleciona um produto.
2. O sistema apresenta os dados cadastrados.
3. O funcionário altera as informações.
4. O sistema valida os dados.
5. O sistema atualiza o produto no banco.

## Fluxo de exclusão

1. O funcionário seleciona a opção excluir.
2. O sistema solicita confirmação.
3. O funcionário confirma a exclusão.
4. O sistema remove o produto utilizando Prepared Statement.
5. A lista é atualizada.

## Fluxo de visualização

1. O funcionário acessa a página inicial.
2. O sistema consulta os produtos cadastrados.
3. Os produtos são apresentados em uma tabela.