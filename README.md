<h1 align="center">
    SCHOOL
</h1>

### :page_with_curl: Projeto
- Projeto realizado a partir de um trabalho da faculdade.
- Este repositório é CRUD (Create, Read, Update, Delete) feito em PHP com a utilização do Framework Laravel.

### :rocket: Como Utilizar
- Clonar o projeto: git clone ```https://github.com/vitorserrano/school.git```
- Dentro da pasta onde foi clonado executar: ```composer install```
- Criar o database com o nome "school" - utf8mb4_unicode_ci 
- Criar .env e alterar database: ```DB_DATABASE=school``

### :page_facing_up: Anotações Importantes
1. `php artisan make:controller StudentController --resource`
- Irá criar o arquivo StudentController dentro de App\Http\Controller
2. `php artisan make:model Models\\ModelStudent -m `
- Este comando irá criar uma pasta "Models" e dentro um arquivo "ModelStudent" 
- Também irá criar a migration com o comando `-m`
3. `php artisan serve` - Executa o projeto
4. `php artisan migration` - Cria as migrations

### :heavy_check_mark: Resultado (Home)
<h1 align="center">
    <img src="https://user-images.githubusercontent.com/51726945/77269194-eb75ba00-6c86-11ea-847e-a1a35e413643.png">
</h1>

### :heavy_check_mark: Resultado (Listagem)
<h1 align="center">
    <img src="https://user-images.githubusercontent.com/51726945/77269458-ae5df780-6c87-11ea-8b77-abbd1b13cf89.png">
</h1>

### :heavy_check_mark: Resultado (Formulário)
<p> O Formulário é utilizado para o method create, update e show.</p>
<h1 align="center">
    <img src="https://user-images.githubusercontent.com/51726945/77269533-e5340d80-6c87-11ea-9d94-9a5cc56b00c9.png">
</h1>

### :x: Erro durante o desenvolvimento
- Erro ao executar "php artisan migration"
- Foi executado este comando: `sudo apt-get install php5.6-mysql/php7.2-mysql` (Linuxs)


