CREATE TABLE IF NOT EXISTS lookups (
    id INT AUTO_INCREMENT PRIMARY KEY,
    country VARCHAR(255),
    capital VARCHAR(255),
    looked_up_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
