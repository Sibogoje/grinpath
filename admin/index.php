<?php
session_start();
// if (!isset($_SESSION['loggedin'])) {
//     header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
//     header('Cache-Control: post-check=0, pre-check=0', false);
//     header('Pragma: no-cache');
//     header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
//     header('Location: login.php');
//     session_destroy();
//     exit;
// }
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
        .dashboard {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .dashboard-section {
            flex: 1 1 calc(50% - 20px);
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .dashboard-section h2 {
            margin-top: 0;
        }
        .chart-container {
            position: relative;
            height: 300px;
            width: 100%;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="dashboard">
        <div class="dashboard-section">
            <h2>User Statistics</h2>
            <div class="chart-container">
                <canvas id="userStatisticsChart"></canvas>
            </div>
        </div>
        <div class="dashboard-section">
            <h2>Incident Reports</h2>
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
            <h2>Incident Types Breakdown</h2>
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
                labels: ['Total Users', 'Active Users', 'New Users This Month'],
                datasets: [{
                    label: 'User Statistics',
                    data: [150, 120, 30],
                    backgroundColor: ['#007bff', '#28a745', '#ffc107'],
                }]
            },
            options: {
                responsive: true,
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
                responsive: true
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
                labels: ['Bad Driving', 'Over Speeding', 'Overloading', 'Other'],
                datasets: [{
                    label: 'Incident Types Breakdown',
                    data: [10, 5, 3, 2],
                    backgroundColor: ['#dc3545', '#ffc107', '#28a745', '#6c757d'],
                }]
            },
            options: {
                responsive: true
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
