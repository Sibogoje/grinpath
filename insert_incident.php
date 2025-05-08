<?php
header('Content-Type: application/json');

try {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $incident_type = $_POST['incident_type'];
        $vehicle_info = $_POST['vehicle_info'];
        $location = $_POST['location'];
        $boarding_location = $_POST['boarding_location'];
        $dropoff_location = $_POST['dropoff_location'];
        $reporter_name = $_POST['reporter_name'] ?? null;
        $phone_number = $_POST['phone_number'];
        $details = $_POST['details'] ?? null;

        // Database connection
        $db = new mysqli('localhost', 'root', '', 'bika');
        if ($db->connect_error) {
            throw new Exception('Database connection failed: ' . $db->connect_error);
        }

        // Prepare and execute the SQL statement
        $stmt = $db->prepare("INSERT INTO incidents (incident_type, vehicle_info, location, boarding_location, dropoff_location, reporter_name, phone_number, details) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            throw new Exception('Failed to prepare statement: ' . $db->error);
        }

        $stmt->bind_param('ssssssss', $incident_type, $vehicle_info, $location, $boarding_location, $dropoff_location, $reporter_name, $phone_number, $details);

        if ($stmt->execute()) {
            echo json_encode(['success' => true, 'message' => 'Incident reported successfully.']);
        } else {
            throw new Exception('Failed to execute statement: ' . $stmt->error);
        }

        $stmt->close();
        $db->close();
    } else {
        throw new Exception('Invalid request method.');
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>
