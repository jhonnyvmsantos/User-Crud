CREATE DATABASE user_db;

USE user_db;

CREATE TABLE tbl_user (
	user_id INT PRIMARY KEY,
    user_name VARCHAR(50),
    user_email VARCHAR(100) UNIQUE,
    user_password VARCHAR(100)
);