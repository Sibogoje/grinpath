<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Incident</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Report an Incident</h1>
    <form action="submit_incident.php" method="post" enctype="multipart/form-data">
        <label for="incident_type">Type of Incident:</label>
        <select id="incident_type" name="incident_type">
            <option value="bad_driving">Bad Driving</option>
            <option value="over_speeding">Over Speeding</option>
            <option value="overloading">Overloading</option>
        </select>
        <label for="vehicle_registration">Kombi/Bus Registration or Name:</label>
        <input type="text" id="vehicle_registration" name="vehicle_registration" required>
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required>
        <label for="boarding_location">Boarding Location:</label>
        <input type="text" id="boarding_location" name="boarding_location" required>
        <label for="dropoff_location">Intended Drop-off Location:</label>
        <input type="text" id="dropoff_location" name="dropoff_location" required>
        <label for="description">Describe the Incident (optional):</label>
        <textarea id="description" name="description"></textarea>
        <label for="attachment">Attach a Photo/Video (optional):</label>
        <input type="file" id="attachment" name="attachment">
        <label for="name">Your Name (optional):</label>
        <input type="text" id="name" name="name">
        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
