CREATE DATABASE hostel;


CREATE TABLE residents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    room INT NOT NULL,
    status ENUM('Student', 'Staff') NOT NULL
);
