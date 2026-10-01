-- ============================================
-- HOW TO RUN THIS ON INFINITYFREE
-- ============================================
-- 1. Create your database first in Control Panel -> MySQL Databases
-- 2. Click on the database, then click "Enter phpMyAdmin"
-- 3. Click the "SQL" tab at the top
-- 4. Paste everything below this comment block and click "Go"
--
-- NOTE: Do NOT include "CREATE DATABASE" or "USE" statements here —
-- InfinityFree already created your database for you, and phpMyAdmin
-- is already pointed at it.
-- ============================================

-- Stores messages sent from contact.php
CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Stores portfolio projects shown on projects.php
CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    description TEXT NOT NULL,
    tech_stack VARCHAR(150) NOT NULL,
    project_link VARCHAR(255) DEFAULT '#',
    display_order INT DEFAULT 0
);

-- Sample starter projects (edit/replace with your real work)
INSERT INTO projects (title, description, tech_stack, project_link, display_order) VALUES
('E-Commerce Platform', 'A shopping platform with product listings, cart, and checkout flow.', 'PHP, MySQL, JavaScript', '#', 1),
('Real-time Chat Application', 'A live messaging app with instant updates between users.', 'JavaScript, Node.js', '#', 2),
('Task Management System', 'A to-do / project tracker with persistent local storage.', 'JavaScript, LocalStorage', '#', 3);
