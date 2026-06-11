CREATE DATABASE IF NOT EXISTS bookstore;
USE bookstore;

CREATE TABLE IF NOT EXISTS books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL
);

CREATE TABLE IF NOT EXISTS cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book_id INT NOT NULL,
    FOREIGN KEY (book_id) REFERENCES books(id)
);

INSERT INTO books (title, author, price) VALUES
('The Alchemist', 'Paulo Coelho', 350.00),
('Atomic Habits', 'James Clear', 499.00),
('Wings of Fire', 'APJ Abdul Kalam', 299.00),
('Rich Dad Poor Dad', 'Robert Kiyosaki', 399.00);
