CREATE DATABASE book_db;

USE book_db;

CREATE TABLE book_form (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  email VARCHAR(255),
  phone VARCHAR(15),
  address VARCHAR(255),
  location VARCHAR(255),
  guests INT,
  arrivals DATE,
  leaving DATE
);

