#设置mysql.exe连接mysqld.exe所用字符集为UTF8
SET NAMES UTF8;
#丢弃数据库xuezi，如果存在的话
DROP DATABASE IF EXISTS xuezi;
#创建数据库xuezi，字符集为UTF8
CREATE DATABASE xuezi CHARSET=UTF8;
#进入数据库xuezi
USE xuezi;

#创建笔记本型号/家族/系列表
CREATE TABLE xz_laptop_family(
  fid INT PRIMARY KEY  AUTO_INCREMENT  ,
  fname VARCHAR(32) NOT NULL,
  laptopCount INT	#属于该型号的笔记本的数量
);
INSERT INTO xz_laptop_family VALUES(10, '联想E470', 3);
INSERT INTO xz_laptop_family VALUES(20, '戴尔燃7000', 2);
INSERT INTO xz_laptop_family VALUES(30, 'MacBookAir', 2);

#创建笔记本信息表
CREATE TABLE xz_laptop(
  lid INT PRIMARY KEY AUTO_INCREMENT,
  pic VARCHAR(128) NOT NULL,
  title VARCHAR(128) NOT NULL,
  price DECIMAL(7,2) DEFAULT 99999.99,
  spec VARCHAR(64) NOT NULL,
  shelfTime BIGINT,	#推荐使用大整数表示日期时间
  isOnsale BOOL,
  familyId INT,
  FOREIGN KEY(familyId) REFERENCES xz_laptop_family(fid)
);
INSERT INTO xz_laptop 
VALUES(NULL,'1.jpg','标题-1', 5001, 
'规格-1', 1501234567891, TRUE, 10);

INSERT INTO xz_laptop 
VALUES(NULL,'2.jpg','标题-2', 5002, 
'规格-2', 1502234567892, FALSE, 10);

INSERT INTO xz_laptop 
VALUES(NULL,'3.jpg','标题-3', 5003, 
'规格-3', 1503234567893, TRUE, 10);

INSERT INTO xz_laptop 
VALUES(NULL,'4.jpg','标题-4', 5004, 
'规格-4', 1504234567890, TRUE, 20);

INSERT INTO xz_laptop 
VALUES(NULL,'5.jpg','标题-5', 5005, 
'规格-5', 1505234567890, FALSE, 20);

INSERT INTO xz_laptop 
VALUES(NULL,'6.jpg','标题-6', 5006, 
'规格-6', 1506234567890, TRUE, 30);

INSERT INTO xz_laptop 
VALUES(NULL,'7.jpg','标题-7', 5007, 
'规格-7', 1507234567890, TRUE, 30);	


/*删除编号为4的笔记本，对应型号表中笔记本数量-1——2条SQL*
DELETE FROM xz_laptop WHERE lid=4;   #对应的型号编号为20

UPDATE xz_laptop_family 
SET laptopCount=laptopCount-1
WHERE fid=20;


/*把编号为2的笔记本的型号编号由10改为30——3条SQL*/
UPDATE xz_laptop SET familyId=30  WHERE lid=2;
#让型号编号为10的笔记本数量-1
UPDATE xz_laptop_family 
SET laptopCount=laptopCount-1 WHERE fid=10;
#让型号编号为30的笔记本数量+1
UPDATE xz_laptop_family 
SET laptopCount=laptopCount+1 WHERE fid=30;