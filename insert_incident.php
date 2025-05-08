<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $incident_type = $_POST['incident_type'];
    $vehicle_info = $_POST['vehicle_info'];
    $location = $_POST['location'];
    $boarding_location = $_POST['boarding_location'];
    $dropoff_location = $_POST['dropoff_location'];
    $reporter_name = $_POST['reporter_name'] ?? null;
    $phone_number = $_POST['phone_number'];
    $details = $_POST['details'] ?? null;

    $db = new mysqli('localhost', 'root', '', 'bika');
    if ($db->connect_error) {
        echo json_encode(['success' => false, 'message' => 'Database connection failed.']);
        exit;
    }

    $stmt = $db->prepare("INSERT INTO incidents (incident_type, vehicle_info, location, boarding_location, dropoff_location, reporter_name, phone_number, details) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssssss', $incident_type, $vehicle_info, $location, $boarding_location, $dropoff_location, $reporter_name, $phone_number, $details);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Incident reported successfully.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to report the incident.']);
    }

    $stmt->close();
    $db->close();
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request method.']);
}
?>
