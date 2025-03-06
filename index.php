<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Transport Incident</title>
    <link rel="icon" href="bika logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-image: url('transport-bg.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .header {
            background:rgb(50, 3, 170);
            color: white;
            padding: 15px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .menu-icon {
            font-size: 24px;
            cursor: pointer;
        }
        .logo {
            max-width: 40px;
        }
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: -250px;
            background-color: rgb(50, 3, 170);
            padding-top: 60px;
            transition: 0.3s;
            color: white;
        }
        .sidebar a {
            padding: 10px;
            text-decoration: none;
            color: white;
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background-color: #575757;
        }
        .container {
            max-width: 600px;
            margin-top: 100px;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-custom {
            background-color: #ff5722;
            color: white;
        }
        .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            cursor: pointer;
        }
    </style>
</head>
<body onclick="hideSidebar()">
    <div class="header" onclick="event.stopPropagation()">
        <span class="menu-icon" onclick="toggleSidebar()">&#9776;</span>
        <h6>Public Transport Incident Report</h6>
        <img src="bika logo.png" alt="Transport Logo" class="logo">
    </div>
    
    <div id="sidebar" class="sidebar" onclick="event.stopPropagation()">
        <span class="close-btn" onclick="hideSidebar()">&#10005;</span>
        <a href="#">Home</a>
        <a href="#">About</a>
    </div>
    
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
