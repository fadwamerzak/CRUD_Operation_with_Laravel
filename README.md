<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



# Laravel CRUD App

![Laravel](https://img.shields.io/badge/Laravel-10.x-red)
![PHP](https://img.shields.io/badge/PHP-%3E%3D%208.1-blue)
![License](https://img.shields.io/badge/License-MIT-green)

This project is a simple CRUD (Create, Read, Update, Delete) application built with the Laravel framework, using phpMyAdmin and XAMPP for database management.

## ✨ Features

- **Create, Read, Update, and Delete operations**
- **View functionality for displaying data**
- Utilizes Laravel's MVC architecture

## 📋 Requirements

- **PHP**: Version 8.1 or higher
- **Composer**: Latest version

## 🚀 Installation

### 1. Setting up the Database

- Open XAMPP and start Apache and MySQL.
- Access phpMyAdmin via [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
- Create a new database named `dbschool`.

### 2. Configuring Laravel

1. Clone the repository to your local machine.
2. Navigate to the project directory in your terminal.
3. Copy `.env.example` to `.env` and update the following database configuration:

   ```ini
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=dbschool
   DB_USERNAME=root
   DB_PASSWORD=

