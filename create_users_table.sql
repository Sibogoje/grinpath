CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') NOT NULL DEFAULT 'user',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert an admin user (password: admin123)
INSERT INTO users (username, password, role) 
VALUES ('admin', '$2y$10$eImiTXuWVxfM37uY4JANjQe5xv6p3X9zYq5J9z1J9z1J9z1J9z1J9', 'admin');
