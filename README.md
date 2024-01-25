<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

# Laravel Multi-Auth API

This Laravel project implements multi-authentication for different user types. It includes authentication for regular users and administrators.

## Getting Started

Follow these instructions to set up and run the project locally.

### Prerequisites

-   PHP >= 8.2
-   Composer
-   Laravel CLI
-   MySQL or another supported database

### Installation

1. Clone the repository:

    ```bash
    git clone https://github.com/muzzi0912/Laravel-Multi-Auth-API.git
    ```

2. Change into the project directory:

    ```bash
    cd laravel-multi-auth-api
    ```

3. Install dependencies:

    ```bash
    composer install
    ```

4. Copy the environment file:

    ```bash
    cp .env.example .env
    ```

5. Generate application key:

    ```bash
    php artisan key:generate
    ```

6. Configure your database in the `.env` file.

7. Run migrations:

    ```bash
    php artisan migrate
    ```

8. (Optional) Seed the database:

    ```bash
    php artisan db:seed
    ```

### Usage

1. Start the development server:

    ```bash
    php artisan serve
    ```

2. Open your browser and navigate to `http://localhost:8000`.

### API Endpoints

### Customization

-   You can customize guards, middleware, and routes in the `config/auth.php` file.
-   Adjust middleware in the route files (`routes/api.php`, `routes/web.php`) based on your requirements.

## Contributing

If you'd like to contribute, please fork the repository and create a pull request. You can also open an issue for discussions.

## Thanks.
