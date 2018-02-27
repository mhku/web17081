/*
重新创建数据库：jd
进入数据库：jd
创建一个保存用户信息的表： user
*/

#丢弃数据库(如果存在的话)jd
DROP DATABASE IF EXISTS jd;
#创建数据库jd，使用字符集UTF8
CREATE DATABASE jd CHARSET=UTF8;
#进入数据库jd
USE jd;

#创建保存用户信息的表
CREATE TABLE user(
  id INT, 
  uname VARCHAR(6), 
  upwd VARCHAR(9)
);

#向用户表中插入一行数据
INSERT INTO user VALUES(10, 'tom', '123456');
INSERT INTO user VALUES(15, 'mary', '456789');


#查询用户表中所有的数据
#SELECT  *  FROM   user;


#删除表中的所有行
#DELETE FROM user;
#删除用户编号等于10的记录行
#DELETE FROM user WHERE id=10;

#修改表中的所有行
#UPDATE user SET uname='jerry', upwd='999';
#修改编号为15的用户名为maria，密码为999999
UPDATE user 
SET uname='maria', upwd='999999'  
WHERE id=15;


