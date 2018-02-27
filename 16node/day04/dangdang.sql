SET NAMES UTF8;
DROP DATABASE IF EXISTS dangdang;
CREATE DATABASE dangdang CHARSET=UTF8;
USE dangdang;
CREATE TABLE book(
  bid INT PRIMARY KEY AUTO_INCREMENT,	#部门编号，自增主键
  title	VARCHAR(32),	#部门名称
  price FLOAT,
  pubDate DATATIME
);
CREATE TABLE user(
  uid   INT PRIMARY KEY AUTO_INCREMENT,
   uname VARCHAR(25) NOT NULL DEFAULT '',
   upwd VARCHAR(32) NOT NULL DEFAULT ''
);
INSERT INTO book VALUES(null,'三国演义1',100,'2001-01-23');
INSERT INTO book VALUES(null,'三国演义2',120,'2002-02-12');
INSERT INTO book VALUES(null,'三国演义3',130,'2003-03-12');
INSERT INTO book VALUES(null,'三国演义4',140,'2004-06-22');
INSERT INTO user VALUES(null,'tom',md5('123'));
INSERT INTO user VALUES(null,'kk',md5('123'));
INSERT INTO user VALUES(null,'jerck',md5('123'));
#为图书名称添加索引对象
ALTER TABLE book ADD INDEX (name);
#如果网络有图书搜索
#[三国]
# SELECT * FROM book WHERE name LIKE '三国';