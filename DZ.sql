# Dz-Php
sudo mysql
Password
show databases;
mysql> CREATE TABLE Persons (personID int(11) NOT NULL AUTO_INCREMENT, LastName varchar(255), pwd varchar(255), email varchar(255), gender varchar(2), PRIMARY KEY (personID) );
mysql> INSERT Persons(LastName, pwd, email, gender) 
VALUES("Vasya", "21341234qwfsdf", "mailto:mmm@mmail.com", "m");
mysql> INSERT Persons(LastName, pwd, email, gender) 
VALUES("Alex", "21341234", "mailto:mmm@gmail.com", "m");
mysql> INSERT Persons(LastName, pwd, email, gender) 
VALUES("Alexey", "qq21341234Q", "alexey@gmail.com", "m");
mysql> INSERT Persons(LastName, pwd, email, gender) 
VALUES("Helen", "MarryMeeee", "hell@gmail.com", "f");
mysql> INSERT Persons(LastName, pwd, email, gender) 
VALUES("Jenny", "SmakeMyb", "eachup@gmail.com", "f");
mysql> INSERT Persons(LastName, pwd, email, gender) 
VALUES("Lora", "burn23", "tpicks@gmail.com", "f");

mysql> SELECT CONCAT("This is ", LastName ,
CASE 
WHEN 
gender = "m" 
THEN " he " 
WHEN 
gender = "f" 
THEN " she " 
END, 
"has email ", email) from Persons;

mysql> SELECT COUNT(*) as boys FROM Persons WHERE gender = 'm';

mysql> SELECT COUNT(*) as girls FROM Persons WHERE gender = 'f';







