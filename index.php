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
    <style>
        .form-container {
            max-width: 1100px;
            margin: 50px auto;
            padding: 35px;
            background: #f9f9f9;
            border-radius: 0px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            min-height: calc(100vh - 100px); /* Full height minus header height */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-container .row > div {
            margin-bottom: 15px;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-custom {
            background-color: #007bff;
            color: #fff;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body onclick="hideSidebar()">
    <?php include 'header.php'; ?>
    <div class="container form-container" onclick="event.stopPropagation()">
        <h1>Report an Incident</h1>
        <p class="text-center">Help us improve transport services by reporting incidents.</p>
        <div id="responseMessage" class="alert d-none"></div>
        <form id="incidentForm">
            <div class="row">
                <div class="col-md-4">
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
                <div class="col-md-4">
                    <label class="form-label">Vehicle Registration/Name</label>
                    <input type="text" class="form-control" name="vehicle_info" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Your Location</label>
                    <input type="text" class="form-control" name="location" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label class="form-label">Boarding Location</label>
                    <input type="text" class="form-control" name="boarding_location" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Intended Drop-off Location</label>
                    <input type="text" class="form-control" name="dropoff_location" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Your Name (Optional)</label>
                    <input type="text" class="form-control" name="reporter_name">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label class="form-label">Your Phone Number</label>
                    <input type="tel" class="form-control" name="phone_number" required>
                </div>
                <div class="col-md-8">
                    <label class="form-label">Additional Details</label>
                    <textarea class="form-control" name="details" rows="1"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-custom w-100">Submit Report</button>
                </div>
            </div>
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

        document.getElementById('incidentForm').addEventListener('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(this);
            const responseMessage = document.getElementById('responseMessage');

            fetch('insert_incident.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    responseMessage.className = 'alert alert-success';
                    responseMessage.textContent = data.message;
                    responseMessage.classList.remove('d-none');
                } else {
                    responseMessage.className = 'alert alert-danger';
                    responseMessage.textContent = data.message;
                    responseMessage.classList.remove('d-none');
                }

                // Make the note disappear after 5 seconds
                setTimeout(() => {
                    responseMessage.classList.add('d-none');
                }, 5000);

                if (data.success) {
                    this.reset();
                }
            })
            .catch(error => {
                responseMessage.className = 'alert alert-danger';
                responseMessage.textContent = 'An error occurred. Please try again.';
                responseMessage.classList.remove('d-none');

                // Make the note disappear after 5 seconds
                setTimeout(() => {
                    responseMessage.classList.add('d-none');
                }, 5000);
            });
        });
    </script>
</body>
</html>
