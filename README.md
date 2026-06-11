# Bookstore Web Application

A simple PHP bookstore management system where users can browse books, add items to cart, and view purchase history.

**Author:** [AtchayaR2005](https://github.com/AtchayaR2005)

## Features

- User login system
- Browse available books with title, author, and price
- Add books to cart
- View cart total
- Purchase history page
- Responsive styled UI

## Tech Stack

- PHP
- MySQL
- HTML / CSS

## Requirements

- PHP 7.4 or higher
- MySQL (XAMPP / WAMP recommended)
- Web browser

## Setup Instructions

### 1. Clone the repository

```bash
git clone https://github.com/AtchayaR2005/bookstore.git
cd bookstore
```

### 2. Copy project to web server

Place the folder inside your web server directory:

- XAMPP: `C:\xampp\htdocs\bookstore`
- WAMP: `C:\wamp64\www\bookstore`

### 3. Create the database

Open phpMyAdmin or MySQL command line and run:

```sql
CREATE DATABASE bookstore;
USE bookstore;

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL
);

CREATE TABLE cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book_id INT NOT NULL,
    FOREIGN KEY (book_id) REFERENCES books(id)
);

INSERT INTO books (title, author, price) VALUES
('The Alchemist', 'Paulo Coelho', 350.00),
('Atomic Habits', 'James Clear', 499.00),
('Wings of Fire', 'APJ Abdul Kalam', 299.00),
('Rich Dad Poor Dad', 'Robert Kiyosaki', 399.00);
```

Or import the included `database.sql` file.

### 4. Configure database connection

Edit `config.php` if your MySQL credentials are different:

```php
$conn = new mysqli("localhost", "root", "", "bookstore");
```

### 5. Run the application

Start Apache and MySQL, then open:

```
http://localhost/bookstore
```

## Login Credentials

| Username | Password |
|----------|----------|
| admin    | admin    |

## Project Structure

```
bookstore/
├── index.php      # Login page
├── home.php       # Home dashboard
├── books.php      # Book listing
├── cart.php       # Shopping cart
├── history.php    # Purchase history
├── logout.php     # Logout handler
├── config.php     # Database connection
├── database.sql   # Database setup script
└── assets/css/    # Stylesheets
```

## Usage

1. Login with admin credentials
2. Go to **Books** and add items to cart
3. Open **Cart** to view selected books and total
4. Check **History** after browsing

## License

This project is for educational purposes.
