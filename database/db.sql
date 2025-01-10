CREATE DATABASE user_db;

USE user_db;

# DROP DATABASE user_db;

CREATE TABLE tbl_user (
	user_id INT PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(50),
    user_email VARCHAR(100) UNIQUE,
    user_password VARCHAR(100)
);

SELECT * FROM tbl_user;