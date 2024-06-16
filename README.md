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

2 - Testes:

Segue abaixo as requisiçõe utilizadas para 'Categorias' e 'Produtos':

