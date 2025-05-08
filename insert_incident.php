<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $incident_type = $_POST['incident_type'];
    $vehicle_info = $_POST['vehicle_info'];
    $location = $_POST['location'];
    $boarding_location = $_POST['boarding_location'];
    $dropoff_location = $_POST['dropoff_location'];
    $reporter_name = $_POST['reporter_name'] ?? null;
    $phone_number = $_POST['phone_number'];
    $details = $_POST['details'] ?? null;

    // Database connection
    $db = new mysqli('195.35.53.20', 'u747325399_bila', 'pKXLu5g9uB3]', 'u747325399_bika');
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    // Insert data into the database
    $stmt = $db->prepare("INSERT INTO incidents (incident_type, vehicle_info, location, boarding_location, dropoff_location, reporter_name, phone_number, details) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssssss', $incident_type, $vehicle_info, $location, $boarding_location, $dropoff_location, $reporter_name, $phone_number, $details);

    if ($stmt->execute()) {
        echo "Incident reported successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $db->close();
}
?>
