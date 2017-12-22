DROP DATABASE IF EXISTS tedu;
CREATE DATABASE tedu CHARSET=UTF8;
USE tedu;
CREATE TABLE dept(
    did INT PRIMARY KEY,
    dname VARCHAR(16) NOT NULL,
    loc VARCHAR(64)
);
INSERT INTO dept VALUES
(1,"人事部","上海"),
(2,"科研部","北京"),
(3,"教育部","天津");
CREATE TABLE emp(
    eid INT PRIMARY KEY,
    ename VARCHAR(16) NOT NULL,
    sex CHAR(1),
    birthday DATE,
    salary FLOAT(8,2),
    deptId INT,
    FOREIGN KEY(deptId) REFERENCES dept(did)
);
INSERT INTO emp VALUES
('165','MARY','男','1990-1-4','1561.45','1'),
('135','DOLPHIN','男','1990-1-7','1561.45','1'),
('865','MIKE','男','1990-1-3','1561.45','2'),
('265','TOM','男','1990-1-2','1561.45','1'),
('169','TIGER','男','1990-1-8','1561.45','6')
;