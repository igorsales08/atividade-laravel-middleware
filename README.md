<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



# 🔐 Atividade Laravel — Controller e Middleware

## 📌 Sobre o projeto

Atividade desenvolvida em Laravel com o objetivo de demonstrar a utilização de **Controller** e **Middleware** para controlar o acesso a uma página.

O Middleware verifica se o usuário possui permissão para acessar o site. Como a permissão está definida como `false`, o acesso é bloqueado e uma mensagem é apresentada na View.

---

## 🛠️ Tecnologias utilizadas

- PHP
- Laravel
- Composer
- HTML5
- CSS3

---

## 📂 Estrutura principal

```text
app/
├── Http/
│   ├── Controllers/
│   │   └── AcessoController.php
│   └── Middleware/
│       └── VerificarPermissao.php

bootstrap/
└── app.php

resources/
└── views/
    └── acesso.blade.php

routes/
└── web.php
```

---

## 🎯 Funcionamento

O funcionamento da aplicação ocorre da seguinte forma:

1. O usuário acessa a rota `/acesso`.
2. A rota chama o `AcessoController`.
3. Antes de executar o Controller, o Middleware `VerificarPermissao` é executado.
4. O Middleware verifica se o usuário possui permissão.
5. Como a variável `$temPermissao` está definida como `false`, o acesso é bloqueado.
6. A View `acesso.blade.php` é exibida com a mensagem:

> **Você não tem permissão para acessar este site.**  
> **Favor entrar em contato com o administrador.**

---

## 🔒 Middleware

O Middleware utilizado no projeto é:

```text
app/Http/Middleware/VerificarPermissao.php
```

Sua função é verificar a permissão de acesso antes que a requisição chegue ao Controller.

Quando não existe permissão, o Middleware retorna a View de acesso negado com o código HTTP **403 - Forbidden**.

---

## 🎮 Controller

O Controller utilizado é:

```text
app/Http/Controllers/AcessoController.php
```

O Controller é responsável por retornar a View da página.

---

## 🌐 Rota

A rota utilizada é:

```text
GET /acesso
```

Ela está protegida pelo Middleware `permissao`.

---

## ⚙️ Registro do Middleware

O Middleware foi registrado como um alias no arquivo:

```text
bootstrap/app.php
```

Alias utilizado:

```text
permissao
```

---

## ▶️ Execução

Para executar o projeto localmente:

```bash
php artisan serve
```

Depois, acessar:

```text
http://127.0.0.1:8000/acesso
```

---

## 📸 Evidências da execução


### Acesso negado pelo Middleware

<img width="1347" height="680" alt="image" src="https://github.com/user-attachments/assets/e0f29f1d-8f91-4f43-8ce7-8f27a9d0b817" />




## 📋 Resultado

A aplicação demonstra o funcionamento de um Middleware no Laravel, impedindo o acesso quando o usuário não possui a permissão necessária e exibindo uma mensagem informativa na View.

## 👨‍💻 Desenvolvedor

**Igor Sales Moreira**
