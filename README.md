<<<<<<< HEAD
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

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# JubartData

> Plataforma web da JubartData — inteligência de dados para decisões estratégicas.

Site institucional desenvolvido em **Laravel 12** com suporte bilíngue (PT/EN), sistema de autenticação, dashboards interativos e páginas de serviços.

---

## 🚀 Tecnologias

- [Laravel 12](https://laravel.com/)
- [PHP 8.3+](https://www.php.net/)
- [Bootstrap 5.3](https://getbootstrap.com/)
- [Bootstrap Icons](https://icons.getbootstrap.com/)
- [Vite](https://vitejs.dev/)
- [Tailwind CSS v4](https://tailwindcss.com/)
- [Laravel Breeze](https://laravel.com/docs/starter-kits#laravel-breeze) (autenticação)

---

## 📋 Pré-requisitos

Antes de começar, certifique-se de ter instalado:

- [PHP 8.3+](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/)
- [Node.js 18+](https://nodejs.org/en) — baixe a versão **LTS**
- [npm](https://www.npmjs.com/) — já vem junto com o Node.js

---

## ⚙️ Instalação

### 1. Clone o repositório

```bash
git clone https://github.com/claricenunes/jubart_data.git
cd jubart_data
```

### 2. Instale as dependências PHP

```bash
composer install
```

### 3. Configure o ambiente

```bash
cp .env.example .env
php artisan key:generate
```

Edite o arquivo `.env` com as suas configurações de banco de dados:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jubart_data
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Execute as migrations

```bash
php artisan migrate
```

### 5. Instale as dependências Node.js

```bash
npm install
```

### 6. Instale o Tailwind CSS

```bash
npm install tailwindcss@latest @tailwindcss/vite@latest --save-dev
```

### 7. Compile os assets

**Para desenvolvimento** (mantém o servidor rodando e atualiza automaticamente):

```bash
npm run dev
```

**Para produção** (gera os arquivos finais):

```bash
npm run build
```

### 8. Inicie o servidor

```bash
php artisan serve
```

Acesse em: [http://127.0.0.1:8000](http://127.0.0.1:8000)

> ⚠️ Se usar `npm run dev`, mantenha os dois terminais rodando simultaneamente — um para o Laravel e outro para o Vite.

---

## 🗂️ Estrutura de Rotas

| Rota | Página |
|------|--------|
| `/` | Home (PT) |
| `/servicos` | Serviços (PT) |
| `/dashboards` | Dashboards (PT) |
| `/contato` | Contato (PT) |
| `/en` | Home (EN) |
| `/en/services` | Services (EN) |
| `/en/dashboards` | Dashboards (EN) |
| `/en/contact` | Contact (EN) |
| `/login` | Login |
| `/register` | Cadastro |
| `/dashboard` | Painel do usuário (requer login) |
| `/dashboards/painel-diario-por-loja` | Painel Diário por Loja |

---

## 🌐 Suporte Bilíngue

O site possui versão completa em **português** e **inglês**. A troca de idioma é feita pelo botão **EN/PT** no header, que redireciona para a página equivalente no outro idioma.

---

## 🔐 Autenticação

Autenticação implementada com **Laravel Breeze**. Funcionalidades disponíveis:

- Login / Logout
- Cadastro de usuário
- Recuperação de senha
- Verificação de e-mail
- Edição de perfil

---

## 📦 Comandos Úteis

```bash
# Limpar cache de rotas
php artisan route:clear

# Limpar cache de configuração
php artisan config:clear

# Listar todas as rotas
php artisan route:list

# Executar migrations
php artisan migrate

# Reverter última migration
php artisan migrate:rollback
```

---

## 🐛 Problemas Comuns

**Erro: `Vite manifest not found`**
```bash
npm run build
```

**Erro: `Can't resolve 'tailwindcss'`**
```bash
npm install tailwindcss@latest @tailwindcss/vite@latest --save-dev
npm run build
```

**Erro: `404` em todas as rotas**
```bash
php artisan route:clear
php artisan serve
```

---

## 📄 Licença

Este projeto é proprietário. Todos os direitos reservados © 2025 JubartData.
