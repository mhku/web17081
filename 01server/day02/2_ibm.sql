/*
写一个脚本文件ibm.txt，
重新创建(如果存在就先删除)三个数据库ibm_1、ibm_2、ibm_3，
最后查看所有的数据库。
把该文件中所有的命令提交给服务器执行
*/

#先删除
#drop database if exists ibm_1;		
#DROP DATABASE IF EXISTS IBM_2;
#Drop Database If ExiSTs iBm_3;

DROP DATABASE IF EXISTS ibm_1;
DROP DATABASE IF EXISTS ibm_2;
DROP DATABASE IF EXISTS ibm_3;

#再新建
CREATE DATABASE ibm_1 CHARSET=UTF8;
CREATE DATABASE ibm_2 CHARSET=UTF8;
CREATE DATABASE ibm_3 CHARSET=UTF8;