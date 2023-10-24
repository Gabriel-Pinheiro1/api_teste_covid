# api_teste_covid
 Uma api para relatar a porcetagem de chance de um paciente estar contaminado com COVID_19

 ##  Como rodar ?

Instale as dependências do projeto:
````
composer install
````

Copie o arquivo .env.example para um novo arquivo '.env' e gere a chave encriptografada:
````
php artisan key:generate
````

Faça a conexão com o banco de dados ( neste projeto foi utilizado o MySQL como banco, na porta 3306 e host localhost).

E rode as migrations:
````
php artisan migrate
````

Crie um link simbólico para criar uma referência da pasta "storage" na pasta "Public":

````
php artisan storage:link
````
Agora é so executar o servidor embutido do Laravel, que rodará o projeto na porta 8000:

````
php artisan serve
````
