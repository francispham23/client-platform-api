<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Documentation

## Postman

### Check `POST` method

![alt text](https://res.cloudinary.com/ddz8cmo2p/image/upload/v1741724868/Github/post-method_qzwkax.png)

### Register User

![alt text](https://res.cloudinary.com/ddz8cmo2p/image/upload/v1741729723/Github/register-user_zzknjz.png)

### Logout User (when making requests using API tokens, the token should be included in the Authorization header as a Bearer token)

![alt text](https://res.cloudinary.com/ddz8cmo2p/image/upload/v1741731214/Github/logout-user_adtvvb.png)

## Commands

### Setup Laravel

Create and run Laravel App with MySQL

```bash
laravel new client-platform
cd client-platform/
npm install && npm run build
composer run dev
```

### Setup Laravel API

```bash
php artisan install:api
```

### Authentication

```bash
# Create Auth Controller:
php artisan make:controller AuthController

# Check All Routes
php artisan route:list

# Run server
php artisan serve
```
