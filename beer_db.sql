CREATE DATABASE beer_db;

CREATE DATABASE IF NOT EXISTS beer_db;

USE  beer_db;

CREATE TABLE tbl_blog 
    (firstname VARCHAR(50) NOT NULL,
     lastname VARCHAR(50) NOT NULL,
     email VARCHAR (100)NOT NULL,
     address VARCHAR(100)NOT NULL,
     city VARCHAR (50)NOT NULL,
     state VARCHAR (2)NOT NULL,
     zip int (5)NOT NULL,
     password VARCHAR(255)NOT NULL,
     user_ID  int(6)  NOT NULL AUTO_INCREMENT PRIMARY KEY);

CREATE TABLE tbl_Articles 
    (email VARCHAR(100) NOT NULL,
     title VARCHAR(50) NOT NULL,
     textContent VARCHAR (100)NOT NULL,
     image VARCHAR (100)NOT NULL,
     removable VARCHAR (50)NOT NULL,
     user_ID  int(6)  NOT NULL AUTO_INCREMENT PRIMARY KEY);
