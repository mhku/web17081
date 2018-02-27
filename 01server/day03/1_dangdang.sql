#设置mysql.exe连接mysqld.exe所用的字符集
SET NAMES UTF8;

#丢弃数据库dangdang
DROP DATABASE IF EXISTS dangdang;
#创建数据库dangdang
CREATE DATABASE dangdang CHARSET=UTF8;
#进入数据库
USE dangdang;

#创建表
CREATE TABLE book(				
  bid INT,
  pic VARCHAR(128),
  title VARCHAR(64),
  price INT,			#此处应该使用小数类型
  birthday VARCHAR(16),		#此处应该使用日期类型
  isOverPrice VARCHAR(1)	#此次应该使用布尔类型
);
#插入数据行
INSERT INTO book VALUES(1, 'img/1.jpg', '西游记', 22, '2015-10-01', '是');
INSERT INTO book VALUES(2, 'img/2.jpg', '三国志', 23, '2015-10-02', '否');
INSERT INTO book VALUES(3, 'img/3.jpg', 'ShuiHu', 24, '2015-10-03', 'Y');
INSERT INTO book VALUES(4, 'img/4.jpg', 'HongLou', 25.5, '2015-10-04', 'N');
#删除数据行
DELETE FROM book WHERE bid=2;			
#修改数据行
UPDATE book 
SET pic='img/33.jpg',title='水浒传',
    price=224,birthday='2017-10-03',isOverPrice='是'
WHERE bid=3;


#SELECT * FROM book;

