CREATE DATABASE donors;
USE donors;
donorsCREATE TABLE donor (
id INT AUTO_INCREMENT,
firstname VARCHAR(30),
surname VARCHAR(30),
dateofbirth DATE,
age INT,
blood_group VARCHAR(5),
contactNumber VARCHAR(15),
PRIMARY KEY (id)
);

INSERT INTO donor (firstname, surname, dateofbirth, age, blood_group, contactNumber) 
VALUES ('kelly', 'taylor', '1999-06-12', 24, 'B+', '0899626299');
