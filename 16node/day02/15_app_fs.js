const fs=require("fs");
var str=new Data().toString();
console.log("��ʼ���ļ��ڱ�������");
fs.writeFileSync("./2.log",str);
console.log("�������ݽṹ");