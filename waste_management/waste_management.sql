CREATE DATABASE waste_management;
USE waste_management;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255),
    role ENUM('admin', 'collector', 'user')
);

CREATE TABLE schedules (
    id INT AUTO_INCREMENT PRIMARY KEY,
    area_name VARCHAR(100),
    collection_date DATE,
    status ENUM('scheduled', 'completed')
);

CREATE TABLE collection_points (
    id INT AUTO_INCREMENT PRIMARY KEY,
    location VARCHAR(100),
    waste_type VARCHAR(50),
    schedule_id INT,
    FOREIGN KEY (schedule_id) REFERENCES schedules(id)
);
