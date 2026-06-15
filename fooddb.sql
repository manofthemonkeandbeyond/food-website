CREATE DATABASE IF NOT EXISTS simple_menu;
USE simple_menu;

CREATE TABLE IF NOT EXISTS menu_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    url VARCHAR(255) NOT NULL,
    sort_order INT DEFAULT 0
);

INSERT INTO menu_items (title, url, sort_order) VALUES
('Home', 'index.php', 1),
('About Us', 'about.php', 2),
('Services', 'services.php', 3),
('Contact', 'contact.php', 4);