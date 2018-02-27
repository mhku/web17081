SET NAMES UTF8;
DROP DATABASE IF EXISTS tedu;
CREATE DATABASE tedu CHARSET=UTF8;
USE tedu;

CREATE TABLE dept(
  did INT PRIMARY KEY,
  dname VARCHAR(32)
);
INSERT INTO dept VALUES(10,'Development');
INSERT INTO dept VALUES(20,'Market');
INSERT INTO dept VALUES(30,'Operation');
INSERT INTO dept VALUES(40,'Testing');

CREATE TABLE emp(
  eid INT PRIMARY KEY AUTO_INCREMENT,
  ename VARCHAR(6),
  salary DECIMAL(8,2),
  birthday DATE,
  deptId INT
);
INSERT INTO emp VALUES(1,'TOM', 5000, '1990-1-1', 20);
INSERT INTO emp VALUES(2,'MARY', 6000, '1991-1-1', 30);
INSERT INTO emp VALUES(3,'JERRY', 5500, '1992-1-1', 10);
INSERT INTO emp VALUES(4,'SMITH', 3800, '1990-2-1', 20);
INSERT INTO emp VALUES(5,'SCOET', 8000, '1990-3-1', 30);
INSERT INTO emp VALUES(6,'TIGER', 9000, '1990-5-1', 10);
INSERT INTO emp VALUES(7,'KING', 10000, '1990-1-2', 10);
INSERT INTO emp VALUES(8,'EANE', 5500, '1990-1-3', 10);
INSERT INTO emp VALUES(9,'EILY', 6700, '1990-1-5', 20);
INSERT INTO emp VALUES(10,'ATEM', 8800, '1990-1-8', 30);
INSERT INTO emp VALUES(11,'JOE', 3000, '1990-1-10', NULL);

#查询所有员工姓名 和工资
#SELECT 列名，列名，列名 FROM 表名;
SELECT ename,salary FROM emp;

#查询第一行员工姓名,生日 和工资
SELECT ename,salary,birthday FROM emp WHERE eid=1;

#查询所有员工姓名，生日，编号
SELECT ename,birthday,eid FROM emp;
#查询所有的列
SELECT *FROM emp;
#给列取别名
#SELECT 列名 【AS】别名，列名[AS]别名 FROM 表名
#查询所有员工姓名 表头显示为姓名
SELECT ename AS 姓名 FROM emp;
#查询所有员工编号、姓名、工资列名全部用中文呈现
SELECT eid 编号, ename 姓名,salary 工资 FROM emp;
SELECT eid '编 号', ename '姓 名',salary '工 资' FROM emp;
SELECT eid `编 号`, ename `姓 名`,salary `工 资` FROM emp;
SELECT eid AS `编 号`, ename AS `姓 名`,salary AS `工 资` FROM emp;
#查询所有员工工资共有多少种
SELECT DISTINCT salary FROM emp;
#查询出每个员工姓名及其年薪
SELECT ename,salary*12 AS 年薪 FROM emp;
#公司决定给每人月薪+200，每人再加5000年终奖，查询出每个员工的姓名及其年终所拿到的所有薪水
SELECT ename,(salary+200)*12+5000 AS 年终奖 FROM emp;
#查询结果的排序
#ORDER BY 列名 [ASC|DESC],列名[ASC|DESC] --【升序|降序】
#显示所有的员工的编号、姓名，按编号降序显示
SELECT eid,ename FROM emp ORDER BY eid DESC;
#显示所有员工编号、姓名、工资、按工资由小到大排序
SELECT eid,ename,salary FROM emp ORDER BY salary ASC;
#显示所有员工编号、姓名、工资，按姓名由大到小排序
SELECT eid,ename,salary FROM emp ORDER BY ename DESC;
#显示所有员工编号、姓名、工资，按工资由小到大排序、若工资相同，再按照姓名由大到小排序
SELECT eid,ename,salary FROM emp ORDER BY salary ASC,ename DESC;
#对查询到的记录进行帅选/条件查询
#语法 SELECT ... FROM 表名 WHERE  条件
#查询出编号为8的员工的所有信息
SELECT * FROM emp WHERE eid=8;
#查询出姓名为KING的员工所有信息
SELECT * FROM emp WHERE ename='KING';
#查询出部门编号为10的员工所有信息
SELECT * FROM emp WHERE deptId=10;
#查询出工资大于等于6000的员工的所有信息--不等查询
SELECT * FROM emp WHERE salary>=6000;
#查询出不在10号部门的远的所有信息--不等查询
SELECT * FROM emp WHERE deptId!=10;
#SELECT * FROM emp WHERE deptId <> 10;
#查询所有员工1991年之后的员工信息
SELECT * FROM emp WHERE birthday>="1991-1-1";

#多条件查询
#查询出工资在6000·7000之间的员工所有信息
SELECT * FROM emp WHERE salary>=6000 AND salary<7000;
SELECT * FROM emp WHERE salary>=6000&&salary<7000;
#查询出所有在1990年出生的员工所有信息
SELECT * FROM emp WHERE birthday>="1990-1-1" AND birthday<="1990-12-31";
SELECT * FROM emp WHERE birthday BETWEEN "1990-1-1" AND "1990-12-31";
#查询所有员工工资大于8000的10号部门的所有信息
SELECT * FROM emp WHERE salary>8000 AND deptId=10;
#查询出部门编号为10或30的员工所有信息
SELECT * FROM emp WHERE deptId=10 OR deptId=30;
#查询出工资小于等于6000或者大于等于10000的员工信息
SELECT * FROM emp WHERE salary<=6000 OR salary>=10000;
#查询出工资大于8000以及在10号部门的所有员工信息
SELECT * FROM emp WHERE salary>8000 OR deptId=10;
#查询出所有1990年和1992年出生的员工所有信息
SELECT * FROM emp WHERE (birthday>="1990-1-1 " AND birthday<="1991-12-31") OR (birthday>="1992-1-1 " AND birthday<="1992-12-31");
#查询出10、30、40、号部门的员工所有信息
SELECT * FROM emp WHERE deptId=10 OR deptId=30 OR deptId=40;
SELECT * FROM emp WHERE deptId IN (10,30,40);
#查询出不在10、30、40、号部门的员工所有信息
SELECT * FROM emp WHERE NOT deptId IN (10,30,40);
#模糊查询
#查询所有姓名中带字符E的员工所有信息
SELECT * FROM emp WHERE ename LIKE '%E%';
#查询所有姓名中带字符E开头的员工所有信息
SELECT * FROM emp WHERE ename LIKE 'E%';
#查询出所有姓名倒数第二个字符是E的员工所有信息
SELECT * FROM emp WHERE ename LIKE '%E_';
#查询出姓名中包含字符E或A的员工所有信息
#SELECT * FROM emp WHERE LIKE
#查询所有员工，每页显示5条记录，要第4页
SELECT * FROM emp LIMIT 10,5;

#分页查询
#若要查询的满足条件的数据行太多，不方面一次性全部显示给用户，可以“一页一页”的显示。分页查询在
#不同的数据库中语法不同。
#  语法：
#	SELECT ...
#	FROM ...
#	WHERE ....
#	ORDER BY ....
#	LIMIT start, count ;
#  start是一个数字，表从哪一行开始获取数据
#  count是一个数字，表一次最多读取多少行记录
 # 假设：每页最多只显示5条记录
	#第1页： ... LIMIT 0, 5;
#	第2页： ... LIMIT 5, 5;
#  	第3页： ... LIMIT 10,5;
#	第n页： ... LIMIT (n-1)*5, 5;
#  示例：查询所有员工，每页显示5条记录，要第1页
	SELECT * FROM emp LIMIT 0, 5;
#  示例：查询所有员工，每页显示5条记录，要第2页
	SELECT * FROM emp LIMIT 5, 5;
#  示例：查询所有员工，每页显示5条记录，要第3页
	SELECT * FROM emp LIMIT 10, 5;
#  示例：查询所有员工，每页显示5条记录，要第4页
	SELECT * FROM emp LIMIT 15, 5;
#  练习：查询出姓名中包含字符E的员工的信息，按姓名升序排列，每页显示3条记录，显示第1页
	SELECT * FROM emp WHERE ename LIKE '%E%' ORDER BY ename LIMIT 0,3;
#  练习：查询出姓名中包含字符E的员工的信息，按姓名升序排列，每页显示3条记录，显示第2页
	SELECT * FROM emp WHERE ename LIKE '%E%' ORDER BY ename LIMIT 3,3;
#  练习：查询出姓名中包含字符E的员工的信息，按姓名升序排列，每页显示3条记录，显示第3页
	SELECT * FROM emp WHERE ename LIKE '%E%' ORDER BY ename LIMIT 6,3;

#SELECT *FROM emp WHERE ename LIKE
#复杂查询--分组查询/聚合函数
#1、COUNT() MIN() MAX() SUM() AVG()
#查询所有员工数量
SELECT COUNT(eid) FROM emp;
SELECT COUNT(*) FROM emp;
#查询部门编号数量
SELECT COUNT(deptId) FROM emp;
#查询所有员工数量
SELECT COUNT(ename) FROM emp;
#查询出10号部门的员工数量
SELECT COUNT(*) FROM emp WHERE deptId=10;
#查询所有员工工资的最大值
SELECT MAX(salary) FROM emp;
#查询所有员工工资的最小值
SELECT MIN(salary) FROM emp;
#查询所有员工中年龄最大的员工的生日
SELECT MIN(birthday) FROM emp;
#查询出所有员工工资的总和
SELECT SUM(salary) FROM emp;
#查询出所有员工工资的平均值（用两种写法）
SELECT AVG(salary) FROM emp;
SELECT SUM(salary)/COUNT(*) FROM emp;
#查询出每个部门的编号，及该部门下员工的数量
SELECT deptId,COUNT(*) FROM emp GROUP BY deptId;
#查询出每个部门的编号、平均工资、最大工资、最小工资
SELECT deptId,AVG(salary),MAX(salary),MIN(salary) FROM emp GROUP BY deptId;
#查询部门编号为NULL的员工信息
SELECT * FROM emp WHERE deptId=null;#错误
SELECT * FROM emp WHERE deptId IS null;
#复杂查询--子查询--难点
#查询出Development部门所有的员工信息
#步骤1：查询Development 部门的编号=>10
SELECT did FROM dept WHERE dname="Development";
#步骤2、查询10号部门中员工的所有信息
SELECT *FROM emp WHERE deptId=10;
#整合步骤1和步骤2
SELECT *FROM emp WHERE dep tId=(SELECT did FROM dept WHERE dname="Development");
#查询KING的员工编号 =>7
SELECT eid FROM emp WHERE ename="KING";
#c查询编号比7大的员工所有信息
SELECT * FROM emp WHERE eid>7;
#综合
SELECT * FROM emp WHERE eid>(SELECT eid FROM emp WHERE ename="KING");
#查询出与KING在同一部门的员工所有信息
#1查询KING的部门编号
SELECT deptId FROM emp WHERE ename="KING";
#2查询部门编号为10的员工信息
SELECT * FROM emp WHERE deptId=10;
SELECT * FROM emp WHERE deptId=(SELECT deptId FROM emp WHERE ename="KING");

#查询出比KING年长的员工所有信息
 SELECT * FROM emp WHERE birthday<(SELECT birthday FROM emp WHERE ename="KING");

#跨表查询
#查询所有员工姓名及其所在部门名称
SELECT ename,dname FROM dept,emp WHERE deptId=did;
#内连接
SELECT ename,dname FROM emp INNER JOIN dept ON emp.deptId=dept.did;
#左外连接
SELECT ename,dname FROM emp LEFT OUTER JOIN dept ON emp.deptId=dept.did;
#右外连接
SELECT ename,dname FROM emp RIGHT OUTER JOIN  dept ON emp.deptId=dept.did;