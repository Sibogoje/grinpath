<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $incident_type = $_POST['incident_type'];
    $vehicle_registration = $_POST['vehicle_registration'];
    $location = $_POST['location'];
    $boarding_location = $_POST['boarding_location'];
    $dropoff_location = $_POST['dropoff_location'];
    $description = $_POST['description'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $attachment = $_FILES['attachment'];

    // Save data to the database (assuming a database connection is established)
    // $db = new mysqli('host', 'user', 'password', 'database');
    // $stmt = $db->prepare("INSERT INTO incidents (incident_type, vehicle_registration, location, boarding_location, dropoff_location, description, name, phone, attachment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    // $stmt->bind_param('sssssssss', $incident_type, $vehicle_registration, $location, $boarding_location, $dropoff_location, $description, $name, $phone, $attachment);
    // $stmt->execute();

    // Send acknowledgment SMS or email (assuming a function sendAcknowledgment exists)
    // sendAcknowledgment($phone, $incident_type, $vehicle_registration);

    // Redirect to a thank you page
    header('Location: thank_you.php');
    exit;
}
?>
