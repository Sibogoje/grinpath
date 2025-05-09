<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
    <meta http-equiv="Cache-Control" content="post-check=0, pre-check=0">
    <meta http-equiv="Pragma" content="no-cache">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            padding-top: 50px; /* Adjust this value based on the height of your header */
        }
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: #fff;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .dashboard {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            padding: 20px;
            margin-top: 100px;
        }
        .dashboard-section {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }
        .dashboard-section h2 {
            margin-top: 0;
        }
        .chart-container {
            flex: 1;
            position: relative;
            height: 100%;
            width: 100%;
        }
        @media (max-width: 360px) {
            .dashboard {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="dashboard">
        <div class="dashboard-section">
            <h2>Reported Incidents Statistics</h2>
            <div class="chart-container">
                <canvas id="userStatisticsChart"></canvas>
            </div>
        </div>
        <div class="dashboard-section">
            <h2>Incident Type Reports</h2>
            <div class="chart-container">
                <canvas id="incidentReportsChart"></canvas>
            </div>
        </div>
        <div class="dashboard-section">
            <h2>Monthly New Users</h2>
            <div class="chart-container">
                <canvas id="monthlyNewUsersChart"></canvas>
            </div>
        </div>
        <div class="dashboard-section">
            <h2>Public Vehicle Type Reports</h2>
            <div class="chart-container">
                <canvas id="incidentTypesBreakdownChart"></canvas>
            </div>
        </div>
        <div class="dashboard-section">
            <h2>Incident Trends</h2>
            <div class="chart-container">
                <canvas id="incidentTrendsChart"></canvas>
            </div>
        </div>
    </div>
    <script>
        const userStatisticsCtx = document.getElementById('userStatisticsChart').getContext('2d');
        const userStatisticsChart = new Chart(userStatisticsCtx, {
            type: 'bar',
            data: {
                labels: ['Hhohho', 'Manzini', 'Shiselweni', 'Lubombo'], // Replace with actual region names
                datasets: [{
                    label: 'Incidents by Region',
                    data: [25, 40, 15, 20], // Replace with actual incident data for each region
                    backgroundColor: ['#007bff', '#28a745', '#ffc107', '#dc3545'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const incidentReportsCtx = document.getElementById('incidentReportsChart').getContext('2d');
        const incidentReportsChart = new Chart(incidentReportsCtx, {
            type: 'pie',
            data: {
                labels: ['Bad Driving', 'Over Speeding', 'Overloading'],
                datasets: [{
                    label: 'Incident Reports',
                    data: [10, 5, 3],
                    backgroundColor: ['#dc3545', '#ffc107', '#28a745'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        const monthlyNewUsersCtx = document.getElementById('monthlyNewUsersChart').getContext('2d');
        const monthlyNewUsersChart = new Chart(monthlyNewUsersCtx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October'],
                datasets: [{
                    label: 'Monthly New Users',
                    data: [5, 10, 8, 15, 20, 25, 30, 35, 40, 45],
                    backgroundColor: 'rgba(0, 123, 255, 0.2)',
                    borderColor: '#007bff',
                    borderWidth: 1,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const incidentTypesBreakdownCtx = document.getElementById('incidentTypesBreakdownChart').getContext('2d');
        const incidentTypesBreakdownChart = new Chart(incidentTypesBreakdownCtx, {
            type: 'doughnut',
            data: {
                labels: ['Bus', 'Mini Bus', 'Kombi', 'Taxi'], // Vehicle types
                datasets: [{
                    label: 'Public Vehicle Type Reports',
                    data: [30, 20, 25, 15], // Replace with actual data for each vehicle type
                    backgroundColor: ['#007bff', '#28a745', '#ffc107', '#dc3545'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return `${tooltipItem.label}: ${tooltipItem.raw} reports`;
                            }
                        }
                    }
                }
            }
        });

        const incidentTrendsCtx = document.getElementById('incidentTrendsChart').getContext('2d');
        const incidentTrendsChart = new Chart(incidentTrendsCtx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October'],
                datasets: [{
                    label: 'Incident Trends',
                    data: [2, 3, 5, 7, 6, 8, 10, 9, 11, 12],
                    backgroundColor: 'rgba(220, 53, 69, 0.2)',
                    borderColor: '#dc3545',
                    borderWidth: 1,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>