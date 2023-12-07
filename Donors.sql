DROP DATABASE donors;
CREATE DATABASE donors;

USE donors;


CREATE TABLE donor (
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
VALUES ('Kelly', 'Taylor', '1999-06-12', 24, 'B+', '0899626299');


CREATE TABLE Admin (
Admin_ID INT AUTO_INCREMENT,
Admin_Name VARCHAR(30) NOT NULL,
Admin_Password VARCHAR(50) NOT NULL,
PRIMARY KEY (Admin_ID)
);

INSERT INTO Admin (Admin_Name, Admin_Password)
VALUES ('Kelly', 'password1'),
       ('Fiona', 'password2'),
       ('Alex', 'password3');


USE donors;


CREATE TABLE Stock (
Stock_ID INT AUTO_INCREMENT,
Blood_Type VARCHAR(5),
Quantity INT,
Expiry_Date DATE,
PRIMARY KEY (Stock_ID)
);


CREATE TABLE Receive (
Receive_ID INT AUTO_INCREMENT,
Donor_ID INT,
Admin_ID INT,
Blood_Type VARCHAR(5),
Quantity INT,
Receive_Date DATE,
FOREIGN KEY (Donor_ID) REFERENCES donor(id),
FOREIGN KEY (Admin_ID) REFERENCES Admin(Admin_ID),
PRIMARY KEY (Receive_ID)
);
INSERT INTO donor (firstname, surname, dateofbirth, age, blood_group, contactNumber) 
VALUES ('Kelly', 'Taylor', '1999-06-12', 24, 'B+', '0899626299');

INSERT INTO Admin (Admin_Name, Admin_Password)
VALUES ('Kelly', 'password1'),
       ('Fiona', 'password2'),
       ('Alex', 'password3');

INSERT INTO Stock (Blood_Type, Quantity, Expiry_Date)
VALUES ('A+', 100, '2023-12-31'),
       ('B+', 150, '2024-01-15'),
       ('O-', 75, '2023-12-20');
       

INSERT INTO Receive (Donor_ID, Admin_ID, Blood_Type, Quantity, Receive_Date)
VALUES (1, 1, 'A+', 20, '2023-12-05'),
       (2, 2, 'B+', 30, '2023-12-06'),
       (3, 3, 'O-', 15, '2023-12-07');
       
DROP TABLE IF EXISTS user;

CREATE TABLE user (
    donUserID INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(20),
    SurName VARCHAR(20),
    username VARCHAR(20),
    password VARCHAR(20) 
);

INSERT INTO user (firstName, SurName, username, password) VALUES('Kelly', 'Taylor','kelly1','kellypwd');
INSERT INTO user (firstName, SurName, username, password) VALUES('Bill','Jones','Bill2','Billpwd');




