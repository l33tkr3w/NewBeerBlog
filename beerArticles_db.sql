CREATE DATABASE beerArticles_db;

CREATE DATABASE IF NOT EXISTS beerArticles_db;

USE  beerArticles_db;

CREATE TABLE tbl_Articles 
    (email VARCHAR(100) NOT NULL,
     title VARCHAR(50) NOT NULL,
     textContent VARCHAR (100)NOT NULL,
     image VARCHAR (100)NOT NULL,
     removable VARCHAR (50)NOT NULL,
     user_ID  int(6)  NOT NULL AUTO_INCREMENT PRIMARY KEY);

