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

#��ѯ����Ա������ �͹���
#SELECT ���������������� FROM ����;
SELECT ename,salary FROM emp;

#��ѯ��һ��Ա������,���� �͹���
SELECT ename,salary,birthday FROM emp WHERE eid=1;

#��ѯ����Ա�����������գ����
SELECT ename,birthday,eid FROM emp;
#��ѯ���е���
SELECT *FROM emp;
#����ȡ����
#SELECT ���� ��AS������������[AS]���� FROM ����
#��ѯ����Ա������ ��ͷ��ʾΪ����
SELECT ename AS ���� FROM emp;
#��ѯ����Ա����š���������������ȫ�������ĳ���
SELECT eid ���, ename ����,salary ���� FROM emp;
SELECT eid '�� ��', ename '�� ��',salary '�� ��' FROM emp;
SELECT eid `�� ��`, ename `�� ��`,salary `�� ��` FROM emp;
SELECT eid AS `�� ��`, ename AS `�� ��`,salary AS `�� ��` FROM emp;
#��ѯ����Ա�����ʹ��ж�����
SELECT DISTINCT salary FROM emp;
#��ѯ��ÿ��Ա������������н
SELECT ename,salary*12 AS ��н FROM emp;
#��˾������ÿ����н+200��ÿ���ټ�5000���ս�����ѯ��ÿ��Ա�������������������õ�������нˮ
SELECT ename,(salary+200)*12+5000 AS ���ս� FROM emp;
#��ѯ���������
#ORDER BY ���� [ASC|DESC],����[ASC|DESC] --������|����
#��ʾ���е�Ա���ı�š�����������Ž�����ʾ
SELECT eid,ename FROM emp ORDER BY eid DESC;
#��ʾ����Ա����š����������ʡ���������С��������
SELECT eid,ename,salary FROM emp ORDER BY salary ASC;
#��ʾ����Ա����š����������ʣ��������ɴ�С����
SELECT eid,ename,salary FROM emp ORDER BY ename DESC;
#��ʾ����Ա����š����������ʣ���������С����������������ͬ���ٰ��������ɴ�С����
SELECT eid,ename,salary FROM emp ORDER BY salary ASC,ename DESC;
#�Բ�ѯ���ļ�¼����˧ѡ/������ѯ
#�﷨ SELECT ... FROM ���� WHERE  ����
#��ѯ�����Ϊ8��Ա����������Ϣ
SELECT * FROM emp WHERE eid=8;
#��ѯ������ΪKING��Ա��������Ϣ
SELECT * FROM emp WHERE ename='KING';
#��ѯ�����ű��Ϊ10��Ա��������Ϣ
SELECT * FROM emp WHERE deptId=10;
#��ѯ�����ʴ��ڵ���6000��Ա����������Ϣ--���Ȳ�ѯ
SELECT * FROM emp WHERE salary>=6000;
#��ѯ������10�Ų��ŵ�Զ��������Ϣ--���Ȳ�ѯ
SELECT * FROM emp WHERE deptId!=10;
#SELECT * FROM emp WHERE deptId <> 10;
#��ѯ����Ա��1991��֮���Ա����Ϣ
SELECT * FROM emp WHERE birthday>="1991-1-1";

#��������ѯ
#��ѯ��������6000��7000֮���Ա��������Ϣ
SELECT * FROM emp WHERE salary>=6000 AND salary<7000;
SELECT * FROM emp WHERE salary>=6000&&salary<7000;
#��ѯ��������1990�������Ա��������Ϣ
SELECT * FROM emp WHERE birthday>="1990-1-1" AND birthday<="1990-12-31";
SELECT * FROM emp WHERE birthday BETWEEN "1990-1-1" AND "1990-12-31";
#��ѯ����Ա�����ʴ���8000��10�Ų��ŵ�������Ϣ
SELECT * FROM emp WHERE salary>8000 AND deptId=10;
#��ѯ�����ű��Ϊ10��30��Ա��������Ϣ
SELECT * FROM emp WHERE deptId=10 OR deptId=30;
#��ѯ������С�ڵ���6000���ߴ��ڵ���10000��Ա����Ϣ
SELECT * FROM emp WHERE salary<=6000 OR salary>=10000;
#��ѯ�����ʴ���8000�Լ���10�Ų��ŵ�����Ա����Ϣ
SELECT * FROM emp WHERE salary>8000 OR deptId=10;
#��ѯ������1990���1992�������Ա��������Ϣ
SELECT * FROM emp WHERE (birthday>="1990-1-1 " AND birthday<="1991-12-31") OR (birthday>="1992-1-1 " AND birthday<="1992-12-31");
#��ѯ��10��30��40���Ų��ŵ�Ա��������Ϣ
SELECT * FROM emp WHERE deptId=10 OR deptId=30 OR deptId=40;
SELECT * FROM emp WHERE deptId IN (10,30,40);
#��ѯ������10��30��40���Ų��ŵ�Ա��������Ϣ
SELECT * FROM emp WHERE NOT deptId IN (10,30,40);
#ģ����ѯ
#��ѯ���������д��ַ�E��Ա��������Ϣ
SELECT * FROM emp WHERE ename LIKE '%E%';
#��ѯ���������д��ַ�E��ͷ��Ա��������Ϣ
SELECT * FROM emp WHERE ename LIKE 'E%';
#��ѯ���������������ڶ����ַ���E��Ա��������Ϣ
SELECT * FROM emp WHERE ename LIKE '%E_';
#��ѯ�������а����ַ�E��A��Ա��������Ϣ
#SELECT * FROM emp WHERE LIKE
#��ѯ����Ա����ÿҳ��ʾ5����¼��Ҫ��4ҳ
SELECT * FROM emp LIMIT 10,5;

#��ҳ��ѯ
#��Ҫ��ѯ������������������̫�࣬������һ����ȫ����ʾ���û������ԡ�һҳһҳ������ʾ����ҳ��ѯ��
#��ͬ�����ݿ����﷨��ͬ��
#  �﷨��
#	SELECT ...
#	FROM ...
#	WHERE ....
#	ORDER BY ....
#	LIMIT start, count ;
#  start��һ�����֣������һ�п�ʼ��ȡ����
#  count��һ�����֣���һ������ȡ�����м�¼
 # ���裺ÿҳ���ֻ��ʾ5����¼
	#��1ҳ�� ... LIMIT 0, 5;
#	��2ҳ�� ... LIMIT 5, 5;
#  	��3ҳ�� ... LIMIT 10,5;
#	��nҳ�� ... LIMIT (n-1)*5, 5;
#  ʾ������ѯ����Ա����ÿҳ��ʾ5����¼��Ҫ��1ҳ
	SELECT * FROM emp LIMIT 0, 5;
#  ʾ������ѯ����Ա����ÿҳ��ʾ5����¼��Ҫ��2ҳ
	SELECT * FROM emp LIMIT 5, 5;
#  ʾ������ѯ����Ա����ÿҳ��ʾ5����¼��Ҫ��3ҳ
	SELECT * FROM emp LIMIT 10, 5;
#  ʾ������ѯ����Ա����ÿҳ��ʾ5����¼��Ҫ��4ҳ
	SELECT * FROM emp LIMIT 15, 5;
#  ��ϰ����ѯ�������а����ַ�E��Ա������Ϣ���������������У�ÿҳ��ʾ3����¼����ʾ��1ҳ
	SELECT * FROM emp WHERE ename LIKE '%E%' ORDER BY ename LIMIT 0,3;
#  ��ϰ����ѯ�������а����ַ�E��Ա������Ϣ���������������У�ÿҳ��ʾ3����¼����ʾ��2ҳ
	SELECT * FROM emp WHERE ename LIKE '%E%' ORDER BY ename LIMIT 3,3;
#  ��ϰ����ѯ�������а����ַ�E��Ա������Ϣ���������������У�ÿҳ��ʾ3����¼����ʾ��3ҳ
	SELECT * FROM emp WHERE ename LIKE '%E%' ORDER BY ename LIMIT 6,3;

#SELECT *FROM emp WHERE ename LIKE
#���Ӳ�ѯ--�����ѯ/�ۺϺ���
#1��COUNT() MIN() MAX() SUM() AVG()
#��ѯ����Ա������
SELECT COUNT(eid) FROM emp;
SELECT COUNT(*) FROM emp;
#��ѯ���ű������
SELECT COUNT(deptId) FROM emp;
#��ѯ����Ա������
SELECT COUNT(ename) FROM emp;
#��ѯ��10�Ų��ŵ�Ա������
SELECT COUNT(*) FROM emp WHERE deptId=10;
#��ѯ����Ա�����ʵ����ֵ
SELECT MAX(salary) FROM emp;
#��ѯ����Ա�����ʵ���Сֵ
SELECT MIN(salary) FROM emp;
#��ѯ����Ա������������Ա��������
SELECT MIN(birthday) FROM emp;
#��ѯ������Ա�����ʵ��ܺ�
SELECT SUM(salary) FROM emp;
#��ѯ������Ա�����ʵ�ƽ��ֵ��������д����
SELECT AVG(salary) FROM emp;
SELECT SUM(salary)/COUNT(*) FROM emp;
#��ѯ��ÿ�����ŵı�ţ����ò�����Ա��������
SELECT deptId,COUNT(*) FROM emp GROUP BY deptId;
#��ѯ��ÿ�����ŵı�š�ƽ�����ʡ�����ʡ���С����
SELECT deptId,AVG(salary),MAX(salary),MIN(salary) FROM emp GROUP BY deptId;
#��ѯ���ű��ΪNULL��Ա����Ϣ
SELECT * FROM emp WHERE deptId=null;#����
SELECT * FROM emp WHERE deptId IS null;
#���Ӳ�ѯ--�Ӳ�ѯ--�ѵ�
#��ѯ��Development�������е�Ա����Ϣ
#����1����ѯDevelopment ���ŵı��=>10
SELECT did FROM dept WHERE dname="Development";
#����2����ѯ10�Ų�����Ա����������Ϣ
SELECT *FROM emp WHERE deptId=10;
#���ϲ���1�Ͳ���2
SELECT *FROM emp WHERE dep tId=(SELECT did FROM dept WHERE dname="Development");
#��ѯKING��Ա����� =>7
SELECT eid FROM emp WHERE ename="KING";
#c��ѯ��ű�7���Ա��������Ϣ
SELECT * FROM emp WHERE eid>7;
#�ۺ�
SELECT * FROM emp WHERE eid>(SELECT eid FROM emp WHERE ename="KING");
#��ѯ����KING��ͬһ���ŵ�Ա��������Ϣ
#1��ѯKING�Ĳ��ű��
SELECT deptId FROM emp WHERE ename="KING";
#2��ѯ���ű��Ϊ10��Ա����Ϣ
SELECT * FROM emp WHERE deptId=10;
SELECT * FROM emp WHERE deptId=(SELECT deptId FROM emp WHERE ename="KING");

#��ѯ����KING�곤��Ա��������Ϣ
 SELECT * FROM emp WHERE birthday<(SELECT birthday FROM emp WHERE ename="KING");

#����ѯ
#��ѯ����Ա�������������ڲ�������
SELECT ename,dname FROM dept,emp WHERE deptId=did;
#������
SELECT ename,dname FROM emp INNER JOIN dept ON emp.deptId=dept.did;
#��������
SELECT ename,dname FROM emp LEFT OUTER JOIN dept ON emp.deptId=dept.did;
#��������
SELECT ename,dname FROM emp RIGHT OUTER JOIN  dept ON emp.deptId=dept.did;