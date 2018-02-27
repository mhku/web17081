/*
编写一个SQL脚本，重新创建数据库xuezi，
创建表user（uid, uname, upwd, avatar-用户头像, score），
试着插入4行数据，并查看
*/

SET NAMES UTF8;
DROP DATABASE IF EXISTS xuezi;
CREATE DATABASE xuezi CHARSET=UTF8;
USE xuezi;

CREATE TABLE user(
  uid INT PRIMARY KEY,
  uname VARCHAR(32) UNIQUE NOT NULL,
  upwd VARCHAR(32) NOT NULL,
  avatar VARCHAR(128)   DEFAULT   'img/default.png',
  score INT
);
INSERT INTO user VALUES(5, 'tom', '123', 'img/5.jpg', 11);
INSERT INTO user VALUES(2, 'mary', '123', DEFAULT, 12);
INSERT INTO user VALUES(1, 'joe', '123', 'img/1.jpg', 13);
INSERT INTO user VALUES(4, 'king', '123', 'img/4.jpg', 14);
INSERT INTO user(uid, uname) VALUES(6, 'jerry');