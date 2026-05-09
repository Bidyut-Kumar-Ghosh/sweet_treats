CREATE DATABASE IF NOT EXISTS sweet_treats;

USE sweet_treats;

-- =========================
-- Admin Table
-- =========================

CREATE TABLE admins (

    id INT AUTO_INCREMENT PRIMARY KEY,

    username VARCHAR(100) NOT NULL,

    password VARCHAR(100) NOT NULL

);

-- Default Admin Login

INSERT INTO admins(username, password)
VALUES ('admin', 'admin123');



-- =========================
-- Menu Items Table
-- =========================

CREATE TABLE menu_items (

    id INT AUTO_INCREMENT PRIMARY KEY,

    item_name VARCHAR(255) NOT NULL,

    description TEXT NOT NULL,

    price DECIMAL(10,2) NOT NULL

);

-- Sample Menu Data

INSERT INTO menu_items(item_name, description, price)
VALUES
('Chocolate Cake', 'Rich chocolate layered cake', 12.99),
('Vanilla Cupcake', 'Soft vanilla cupcake with cream topping', 4.99),
('Strawberry Pastry', 'Fresh strawberry pastry with cream', 6.99);



-- =========================
-- Feedback Table
-- =========================

CREATE TABLE feedback (

    id INT AUTO_INCREMENT PRIMARY KEY,

    name VARCHAR(100) NOT NULL,

    email VARCHAR(100) NOT NULL,

    feedback TEXT NOT NULL

);

-- Sample Feedback Data

INSERT INTO feedback(name, email, feedback)
VALUES
('Rahul', 'rahul@example.com', 'Very delicious cakes and pastries.'),

('Priya', 'priya@example.com', 'Excellent bakery service and fresh food.');