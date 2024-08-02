# Weventura

## Introduction

Weventura is a web application built with Laravel. Follow these instructions to set up and run the Weventura project on your local machine.

## Installation

Make sure you have Laravel 11 installed

### Step 1: Clone the Repository

```bash
git clone https://github.com/dimas551/weventura
cd weventura
```

### Step 2: Install Dependencies

```bash
composer install
```

### Step 3: Set Up Environment File

```bash
php -r "file_exists('.env') || copy('.env.example', '.env');"
```

### Step 4: Configure the Database

Open the `.env` file and update the database connection settings:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=weventura
DB_USERNAME=root
DB_PASSWORD=
```

### Step 5: Generate Application Key

```bash
php artisan key:generate
```

### Step 6: Run Database Migrations

```bash
php artisan migrate
```

### Step 7: Seed the Database

```bash
php artisan db:seed
```

### Step 8: Link data from storage

```bash
php artisan storage:link
```

### Step 9: Start the Development Server

```bash
php artisan serve
```

Your Weventura application should now be up and running. You can access it at `http://127.0.0.1:8000`.

### Step 10: Tes Login

```bash
Email: admin@example.com
Password: 12345678
```