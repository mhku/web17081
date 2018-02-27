/*
列约束
*/

SET NAMES UTF8;
DROP DATABASE IF EXISTS danei;
CREATE DATABASE danei CHARSET=UTF8;
USE danei;

#员工信息表
CREATE TABLE emp(
  eid INT PRIMARY KEY,
  ename VARCHAR(4),
  sex CHAR(1),
  salary DECIMAL(8,2),
  age TINYINT,
  hireDate DATE,
  isMarried BOOL
);
#插入数据行
INSERT INTO emp VALUES(4, '大旭', '男', 5000, -20, '2010-1-1', FALSE);

INSERT INTO emp VALUES(2, '东东', '男', 6000, 25, '3010-1-2', TRUE);

INSERT INTO emp VALUES(1, '涛涛', '国', 7000, 30, '2010-1-3', 1);

INSERT INTO emp VALUES(3, '磊磊', '女', 8000, 35, '2010-1-4', 0);


