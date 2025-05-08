CREATE TABLE incidents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    incident_type VARCHAR(255) NOT NULL,
    vehicle_info VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    boarding_location VARCHAR(255) NOT NULL,
    dropoff_location VARCHAR(255) NOT NULL,
    reporter_name VARCHAR(255),
    phone_number VARCHAR(20) NOT NULL,
    details TEXT,
    reported_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
