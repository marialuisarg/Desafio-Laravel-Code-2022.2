# Desafio de Laravel - Code Junior 2022.2

| **Sumário** |
|-------------|
| [Objetivos do repositorio](#objetivos-do-repositorio) |
| [Proposito do desafio](#proposito-do-desafio) |
| [Link para o desafio](#link-para-o-desafio) |
| [Link para a trilha de Laravel](#link-para-a-trilha-de-laravel) |
| [Como executar o projeto inicial](#como-executar-o-projeto-inicial) |
| [Como configurar o env para envio de email](#como-configurar-o-env-para-envio-de-email) |


## Objetivos do repositorio
Objetivos do repositorio: ..................;

## Objetivos do repositorio
Proposito do desafio: ......................; 
<br>

## Link para o desafio
Link para o desafio: .......................;
<br>

## Link para a trilha de Laravel
Link para a trilha de Laravel: https://drive.google.com/drive/folders/16U7EIQ58v3ZgeTE-Eh3ivZ_lKretVEFc?usp=sharing
<br>

## Como executar o projeto inicial
\* É necessário ter o _PHP 8.1+_ e o _Laravel 9_ instalados.
1. Abra o Terminal na Pasta do Projeto;
2. Instale as dependências necessárias: `composer install`;
3. Atualize as dependências: `composer update`;
4. Rode o comando `php artisan storage:link` para linkar a pasta de storage com a pasta public;
5. Crie um arquivo .env na pasta raiz e após isso copie o conteudo do .env.example para dentro do arquivo .env;
6. Crie uma key com `php artisan key:generate`. A key servira para as hashes;
7. Crie um banco de dados `sql` com o nome de `laravel_desafio_code`;
8. Rode as migrations com o comando php artisan migrate;
9. Instale o npm com `npm install` e depois rode `npm run dev` e `npm run build`;
10. Rode o comando: `php artisan serve` para iniciar o servidor;

## Como configurar o .env para envio de email
\* Essa configuração é primordial para o sistema, uma vez que um usuario cadastrado só pode utilizar o sistema após verificar o email
1. Crie uma conta no site https://mailtrap.io/
2. Após realizar o login, em MyInbox => Integrations, altere de cURL para Laravel 7+
3. Copie o conteúdo após a alteração e substitua os campos: <br>
MAIL_MAILER=smtp
<br>
MAIL_HOST=mailhog
<br>
MAIL_PORT=1025
<br>
MAIL_USERNAME=null
<br>
MAIL_PASSWORD=null
<br>
MAIL_ENCRYPTION=null
<br>
pelo conteúdo copiado 
