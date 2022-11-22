<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# <p align="center"> Orbital Test </p>

# Backend Developer
Para esse teste, você deve criar uma aplicação com autenticação e cadastro de produtos com campos básicos como Nome, Imagem, Categoria e Descrição.

## Requisitos
- Código bem escrito
- Autenticação utilizando JWT
- Endpoints para login, consulta e inserção de produtos

## Extras
- Laravel
- Aplicação em Vue.js consumindo os endpoints (aumentará bem sua pontuação)
- Escrever pelo menos um teste

## Informações
- Disponibilizar URL com as credenciais para a visualização do teste
- O código desenvolvido deve ser disponibilizado em um repositório
- Você pode utilizar Bootstrap, Bulma ou algum outro framework que se sinta confortável
- O layout não te fará perder pontos, mas crie uma aplicação agradável 
- <a href="https://gitlab.com/orbital-code/orbital/tests/backend-developer/-/tree/master/">Link do repositório original  (GitLab) </a>

## Como rodar o projeto
- Clone o repo
- Acesse a pasta "orbital_challenge"
```
cd orbital_challenge
```
- Gerar os packages
```
composer install
```
- Gerar o .env
```
cp .env.example .env
```
- Gerar a chave da aplicação e do jwt
```
php artisan key:generate
php artisan jwt:secret
```
- Configurar o seu .env com seu banco de dados
- Rodar as migrations
```
php arisan migrate
```
- Adicionar usuário teste para acesso (email: test@example.com | senha: secret)
```
php artisan db:seed
```
- Por fim, servir a aplicação
```
php artisan serve
```

## EndPoints
- /api/auth/login (POST)
  - endpoint para o usuário logar no sistema com email e senha e em caso de sucesso reotorna o token
- /api/auth/me (POST)
  - endpoint para receber as informações do usário logado passando o token no header da requisição
- /api/auth/refresh (POST)
  - endpoint para gerar outro token para o usuário passando o token atual pelo header
- /api/auth/logout (POST)
  -  endpoint para deslogar o usuário, invalida o token do mesmo
- /api/v1/products (GET)
  - retorna todos os produtos cadastrados no banco de dados
- /api/v1/product (POST)
  - Recebe os parametros dos produtos valida e grava no banco de dados
