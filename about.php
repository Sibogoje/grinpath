<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Public Transport Incident Report</title>
    <link rel="icon" href="bika logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body onclick="hideSidebar()">
    <div class="header" onclick="event.stopPropagation()">
        <span class="menu-icon" onclick="toggleSidebar()">&#9776;</span>
        <h6>About Public Transport Incident Report</h6>
        <img src="bika logo.png" alt="Transport Logo" class="logo">
    </div>
    
    <div id="sidebar" class="sidebar" onclick="event.stopPropagation()">
        <span class="close-btn" onclick="hideSidebar()">&#10005;</span>
        <div class="sidebar-logo">
            <img src="bika logo.png" alt="Transport Logo">
        </div>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
    </div>
    
    <div class="container" onclick="event.stopPropagation()">
        <h2 class="text-center">About the Application</h2>
        <p>This application promotes accountability in public transport and improves commuter safety. Here's how it works:</p>
        <h4>System Flow</h4>
        <ul>
            <li><strong>Passenger Scans QR Code or Visits Link:</strong> QR code redirects to a web app or mobile-friendly page.</li>
        </ul>
        <h4>Incident Reporting Form</h4>
        <ul>
            <li>Select type of incident (e.g., bad driving, over speeding, overloading, etc.).</li>
            <li>Enter kombi/bus registration or name.</li>
            <li>Provide location (GPS or manual entry).</li>
            <li>Enter boarding and intended drop-off locations.</li>
            <li>Describe the incident (optional).</li>
            <li>Attach a photo/video (optional).</li>
        </ul>
        <h4>User Information Collection</h4>
        <ul>
            <li>Name (optional or required, depending on anonymity preference).</li>
            <li>Phone number (for follow-up or verification).</li>
        </ul>
        <h4>Submission and Confirmation</h4>
        <ul>
            <li>Data is stored in a database.</li>
            <li>User receives an acknowledgment SMS or email.</li>
        </ul>
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
