CREATE DATABASE php0112

DROP DATABASE php0112

CREATE TABLE `users` ( 
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'khoa chinh' , 
    `username` VARCHAR(20) NOT NULL DEFAULT 'admin' , 
    `email` VARCHAR(50) NULL DEFAULT NULL COMMENT 'email...' , 
    `fullname` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL , 
    `password` VARCHAR(100) NULL DEFAULT NULL , 
    `birthdate` DATE NULL DEFAULT NULL , 
    `created_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    PRIMARY KEY (`id`), 
    UNIQUE `unique` (`email`)
)

CREATE TABLE bill(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    total DOUBLE DEFAULT 0,
    date_order DATETIME NULL,
    PRIMARY KEY (id)
)






ALTER TABLE `users` CHANGE `id` `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'khoa chinh';

ALTER TABLE bill CHANGE date_order date_order  DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP

ALTER TABLE `bill` CHANGE `date_order` `date_order` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP;

ALTER TABLE bill
ADD quantity INT(11) DEFAULT 0

ALTER TABLE `users` ADD `gender` VARCHAR(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'nam' AFTER `fullname`;

-- https://www.w3resource.com/mysql/mysql-tutorials.php

users                 bill
id                     id
                     user_id



bill_id
1 huong 123 LTR admin 12/12/2018    11
1 huong                             12

11 100 2 12/12/2016 1
12 400 4 


ALTER TABLE `bill` 
ADD `user_id` INT(10) UNSIGNED NOT NULL AFTER `quantity`;


ALTER TABLE bill
ADD FOREIGN KEY (user_id) REFERENCES users(id)