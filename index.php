<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Transport Incident</title>
    <link rel="icon" href="bika logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body onclick="hideSidebar()">
   
<?php include 'header.php'; ?>
    
    <div class="container" onclick="event.stopPropagation()">
        <p class="text-center">Help us improve transport services by reporting incidents.</p>
        <form action="submit_report.php" method="POST">
            <div class="mb-3">
                <label class="form-label">Incident Type</label>
                <select class="form-control" name="incident_type" required>
                    <option value="">Select an Incident</option>
                    <option value="bad_driving">Bad Driving</option>
                    <option value="over_speeding">Over Speeding</option>
                    <option value="overloading">Overloading</option>
                    <option value="dirty_vehicle">Dirty Vehicle</option>
                    <option value="rude_operator">Rude Operator</option>
                    <option value="threats">Threats</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Vehicle Registration/Name</label>
                <input type="text" class="form-control" name="vehicle_info" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Your Location</label>
                <input type="text" class="form-control" name="location" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Boarding Location</label>
                <input type="text" class="form-control" name="boarding_location" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Intended Drop-off Location</label>
                <input type="text" class="form-control" name="dropoff_location" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Your Name (Optional)</label>
                <input type="text" class="form-control" name="reporter_name">
            </div>
            <div class="mb-3">
                <label class="form-label">Your Phone Number</label>
                <input type="tel" class="form-control" name="phone_number" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Additional Details</label>
                <textarea class="form-control" name="details" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-custom w-100">Submit Report</button>
        </form>
    </div>

    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            if (sidebar.style.left === "0px") {
                sidebar.style.left = "-250px";
            } else {
                sidebar.style.left = "0px";
            }
        }

        function hideSidebar() {
            var sidebar = document.getElementById("sidebar");
            sidebar.style.left = "-250px";
        }
    </script>
</body>
</html>
