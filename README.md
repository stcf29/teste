Prezados, segue em anexo neste arquivo a documentação necessária para o teste.
Todo o projeto foi implementado utilizando Laravel, PostgreSQL(pgAdmin4) e Postman para testes.

1 - procedimentos:

Clonar o projeto localizado no diretório do git: https://github.com/stcf29/teste-motocaSystems-backEnd e baixar o projeto.

Após clonar o projeto, editar o arquivo env com os dados abaixo, para configurar a conexão com a base de dados:DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=motoca
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

Lembrando que o usuário e senha são os mesmos por padrão do banco pgAdmin4.

Criar um banco de dados com o nome "motoca"

Abrir o cmd na pasta do projeto já clonado na máquina e utilizar os comandos 'composer update' e 'php artisan migrate'
para criar as tabelas e migrations na base de dados utilizada.

Rodar o comando 'php artisan save' para executar o projeto.

2 - Testes: Segue abaixo as requisições utilizadas para 'Categorias' e 'Produtos':
2.1 - Teste para Produtos:

Requisição do tipo GET para listar todos os produtos
http://localhost:8000/produtos


Requisição do tipo POST para registrar um novo produto:
http://localhost:8000/produtos
JSON:
{
    "nome": "Calça",
    "descricao": "Calça tam P",
    "preco": 140.00,
    "categoria_id": 1
}

Requisição do tipo GET para listar um produto por meio do seu id:
http://localhost:8000/produtos/{id}

Requisição do tipo PUT para atualizar os dados de um produto por meio do seu id:
http://localhost:8000/produtos/{id}
JSON:
{
    "nome": "Nome do Produto",
    "descricao": "Descrição do Produto",
    "preco": 100.00,
    "categoria_id": 1
}

Requisição do tipo DELETE para deletar um produto por meio do seu id:
http://localhost:8000/produtos/{id}


2.2 - Teste para Categorias: Segue abaixo as requisiçõe utilizadas para 'Categorias':

Requisição do tipo GET para listar todos as categorias
http://localhost:8000/categorias


Requisição do tipo POST para registrar uma nova categorias:
http://localhost:8000/categorias
JSON:
{
    "nome": "Calçados"
}

Requisição do tipo GET para listar uma categorias por meio de sua id:
http://localhost:8000/categorias/{id}

Requisição do tipo PUT para atualizar os dados de uma categorias por meio de sua id:
http://localhost:8000/categorias/{id}
JSON:
{
    "nome": "Categoria Atualizada"
}

Requisição do tipo DELETE para deletar uma categorias por meio de sua id:
http://localhost:8000/categorias/{id}

Obs: registrar primeiro a categoria, depois o produto.

Por email também será enviado o arquivo do 'motoca-test.postman_collection', com as requisições para ser utilizado no POSTMAN.