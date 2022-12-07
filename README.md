1. Considerando as informações acima, descreva como seria a comunicação entre frontend > backend > API > backend > frontend;

O frontend realiza o login de seu usuário e dá ao backend a responsabilidade de verificar os dados e gerar um token de autorização.
Sempre que o token estiver na header, o backend poderá verificá-lo, consultar na API a lista de clientes e retorná-la ao frontend.


2. Implemente uma classe que faz a recuperação do token chegando do front e consumindo uma API (fake).

Manual do projeto:
Execute "composer install" para instalar as dependências
Execute "php artisan migrate" para gerar as tabelas do banco de dados
Execute "php artisan serve" para colocar o servidor online

Use as rotas "/auth/login" e "/auth/register" para logar ou registrar um usuário. Deverão ser informados "name, email e password".

Use a rota "/index" para receber a lista de clientes. O token deverá ser passado na header para que a lista seja devolvida.

Os dados dos clientes foram publicados num JSON de teste que está online, você pode acessá-lo aqui se quiser: https://api.jsonbin.io/v3/b/638e47036a51bc4f70488d28
