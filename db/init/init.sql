CREATE DATABASE IF NOT EXISTS app;
use app;

CREATE TABLE IF NOT EXISTS simple_board(
        no. INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(225) NOT NULL,
	contents VARCHAR(2000),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DELETE FROM simple_board;
INSERT INTO simple_board(title) VALUES
('Docker Compose Apache Server Created!'),
('Hello, Docker Compose SimpleBoard!');
