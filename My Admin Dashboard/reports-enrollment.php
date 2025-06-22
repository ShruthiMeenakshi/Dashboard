<?php 
$page_title = "Enrollment Reports | College Management System";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php echo $page_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="College Management System" name="description" />
    <meta content="YourCompany" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Custom CSS for enhanced UI -->
    <style>
        :root {
            --primary-color: #3a7bd5;
            --secondary-color: #00d2ff;
            --accent-color: #6c5ce7;
            --light-bg: #f8f9fa;
            --card-shadow: 0 4px 24px 0 rgba(34, 41, 47, 0.1);
        }
        
        body {
            background-color: #f5f7fb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .main-content {
            padding: 20px;
            background-color: #f5f7fb;
        }
        
        .page-title-box {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            padding: 20px;
            border-radius: 8px;
            color: white;
            box-shadow: var(--card-shadow);
            margin-bottom: 24px;
        }
        
        .page-title-box h4 {
            font-weight: 600;
            margin: 0;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 24px;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(34, 41, 47, 0.15);
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .card-title {
            font-weight: 600;
            color: #2c304d;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }
        
        .card-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 3px;
        }
        
        /* Enrollment-specific styles */
        .enrollment-card {
            text-align: center;
            padding: 20px 0;
            border-radius: 8px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .enrollment-card h3 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .enrollment-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background: white;
        }
        
        .enrollment-card:nth-child(1) {
            background: linear-gradient(135deg, #4b6cb7, #182848);
        }
        
        .enrollment-card:nth-child(2) {
            background: linear-gradient(135deg, #8e2de2, #4a00e0);
        }
        
        .enrollment-card:nth-child(3) {
            background: linear-gradient(135deg, #11998e, #38ef7d);
        }
        
        .enrollment-card:nth-child(4) {
            background: linear-gradient(135deg, #f46b45, #eea849);
        }
        
        .chart-container {
            position: relative;
            height: 300px;
            margin-bottom: 20px;
        }
        
        .filter-section {
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: var(--card-shadow);
        }
        
        .enrollment-table th {
            background-color: #f8f9fa;
            font-weight: 600;
        }
        
        .enrollment-table tbody tr {
            transition: all 0.2s ease;
        }
        
        .enrollment-table tbody tr:hover {
            background-color: rgba(58, 123, 213, 0.05);
        }
        
        .trend-up {
            color: #28a745;
        }
        
        .trend-down {
            color: #dc3545;
        }
        
        .download-btn {
            min-width: 120px;
        }
        
        .program-badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-right: 5px;
            margin-bottom: 5px;
            background-color: #e9ecef;
            color: #495057;
        }
    </style>
</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'includes/topbar.php'; ?>
    <?php include 'includes/sidebar.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- Page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Enrollment Analytics & Reports</h4>
                            <div class="d-flex align-items-center">
                                <span class="me-2">Academic Year: 2023-2024</span>
                                <i class="fas fa-users fs-4 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enrollment Stats Cards -->
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card enrollment-card">
                            <div class="card-body">
                                <i class="fas fa-user-graduate fs-4 mb-3"></i>
                                <h3>1,258</h3>
                                <p>Total Students</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card enrollment-card">
                            <div class="card-body">
                                <i class="fas fa-chart-line fs-4 mb-3"></i>
                                <h3>+8.5%</h3>
                                <p>Growth Rate</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card enrollment-card">
                            <div class="card-body">
                                <i class="fas fa-male fs-4 mb-3"></i>
                                <h3>720</h3>
                                <p>Male Students</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card enrollment-card">
                            <div class="card-body">
                                <i class="fas fa-female fs-4 mb-3"></i>
                                <h3>538</h3>
                                <p>Female Students</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- Filter Section -->
                <div class="filter-section">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Academic Year</label>
                                <select class="form-select">
                                    <option selected>2023-2024</option>
                                    <option>2022-2023</option>
                                    <option>2021-2022</option>
                                    <option>2020-2021</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Program</label>
                                <select class="form-select">
                                    <option selected>All Programs</option>
                                    <option>Computer Science</option>
                                    <option>Electrical Engineering</option>
                                    <option>Business Administration</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Student Type</label>
                                <select class="form-select">
                                    <option selected>All Students</option>
                                    <option>New Enrollments</option>
                                    <option>Continuing Students</option>
                                    <option>Transfer Students</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <button class="btn btn-primary w-100">Generate Report</button>
                        </div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Enrollment Trends (5 Years)</h4>
                                <div class="chart-container">
                                    <canvas id="enrollmentTrendChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Program Distribution</h4>
                                <div class="chart-container">
                                    <canvas id="programDistributionChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Gender Ratio by Program</h4>
                                <div class="chart-container">
                                    <canvas id="genderRatioChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Enrollment by Semester</h4>
                                <div class="chart-container">
                                    <canvas id="semesterEnrollmentChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Detailed Report Table -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="card-title mb-0">Detailed Enrollment Data</h4>
                                    <div>
                                        <button class="btn btn-sm btn-outline-secondary me-2 download-btn">
                                            <i class="fas fa-file-excel me-1"></i> Export Excel
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger download-btn">
                                            <i class="fas fa-file-pdf me-1"></i> Export PDF
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table enrollment-table table-hover table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>Program</th>
                                                <th>Total Students</th>
                                                <th>New Enrollments</th>
                                                <th>Continuing</th>
                                                <th>Male</th>
                                                <th>Female</th>
                                                <th>Growth</th>
                                                <th>Capacity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="program-badge">Computer Science</span>
                                                </td>
                                                <td>420</td>
                                                <td>150</td>
                                                <td>270</td>
                                                <td>280</td>
                                                <td>140</td>
                                                <td><i class="fas fa-arrow-up trend-up me-1"></i> 12.5%</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 84%" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <small>84% of 500</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="program-badge">Electrical Engineering</span>
                                                </td>
                                                <td>320</td>
                                                <td>110</td>
                                                <td>210</td>
                                                <td>220</td>
                                                <td>100</td>
                                                <td><i class="fas fa-arrow-up trend-up me-1"></i> 8.2%</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <small>80% of 400</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="program-badge">Business Administration</span>
                                                </td>
                                                <td>280</td>
                                                <td>90</td>
                                                <td>190</td>
                                                <td>120</td>
                                                <td>160</td>
                                                <td><i class="fas fa-arrow-up trend-up me-1"></i> 5.7%</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <small>70% of 400</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="program-badge">Mechanical Engineering</span>
                                                </td>
                                                <td>180</td>
                                                <td>60</td>
                                                <td>120</td>
                                                <td>150</td>
                                                <td>30</td>
                                                <td><i class="fas fa-arrow-down trend-down me-1"></i> 3.2%</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <small>60% of 300</small>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="program-badge">Arts & Humanities</span>
                                                </td>
                                                <td>150</td>
                                                <td>50</td>
                                                <td>100</td>
                                                <td>60</td>
                                                <td>90</td>
                                                <td><i class="fas fa-arrow-up trend-up me-1"></i> 2.8%</td>
                                                <td>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                    <small>50% of 300</small>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <!-- Pagination -->
                                <div class="row mt-3">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info">
                                            Showing 1 to 5 of 12 programs
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers">
                                            <ul class="pagination justify-content-end">
                                                <li class="paginate_button page-item previous disabled">
                                                    <a href="#" class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active">
                                                    <a href="#" class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item">
                                                    <a href="#" class="page-link">2</a>
                                                </li>
                                                <li class="paginate_button page-item">
                                                    <a href="#" class="page-link">3</a>
                                                </li>
                                                <li class="paginate_button page-item next">
                                                    <a href="#" class="page-link">Next</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'includes/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php include 'includes/rightbar.php'; ?>
<?php include 'includes/script.php'; ?>

<!-- Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Chart.js Implementation -->
<script>
    // Enrollment Trend Chart
    const trendCtx = document.getElementById('enrollmentTrendChart').getContext('2d');
    const enrollmentTrendChart = new Chart(trendCtx, {
        type: 'line',
        data: {
            labels: ['2019', '2020', '2021', '2022', '2023'],
            datasets: [{
                label: 'Total Enrollment',
                data: [950, 1020, 1100, 1160, 1258],
                backgroundColor: 'rgba(58, 123, 213, 0.2)',
                borderColor: 'rgba(58, 123, 213, 1)',
                borderWidth: 2,
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: false,
                    title: {
                        display: true,
                        text: 'Number of Students'
                    }
                }
            }
        }
    });

    // Program Distribution Chart
    const programCtx = document.getElementById('programDistributionChart').getContext('2d');
    const programDistributionChart = new Chart(programCtx, {
        type: 'doughnut',
        data: {
            labels: ['Computer Science', 'Electrical Eng', 'Business Admin', 'Mechanical Eng', 'Arts & Humanities'],
            datasets: [{
                data: [420, 320, 280, 180, 150],
                backgroundColor: [
                    'rgba(58, 123, 213, 0.7)',
                    'rgba(108, 92, 231, 0.7)',
                    'rgba(0, 210, 255, 0.7)',
                    'rgba(244, 107, 69, 0.7)',
                    'rgba(119, 98, 231, 0.7)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'right',
                }
            }
        }
    });

    // Gender Ratio Chart
    const genderCtx = document.getElementById('genderRatioChart').getContext('2d');
    const genderRatioChart = new Chart(genderCtx, {
        type: 'bar',
        data: {
            labels: ['Computer Science', 'Electrical Eng', 'Business Admin', 'Mechanical Eng', 'Arts & Humanities'],
            datasets: [
                {
                    label: 'Male',
                    data: [280, 220, 120, 150, 60],
                    backgroundColor: 'rgba(58, 123, 213, 0.7)',
                },
                {
                    label: 'Female',
                    data: [140, 100, 160, 30, 90],
                    backgroundColor: 'rgba(255, 99, 132, 0.7)',
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    stacked: false,
                },
                y: {
                    stacked: false,
                    title: {
                        display: true,
                        text: 'Number of Students'
                    }
                }
            }
        }
    });

    // Semester Enrollment Chart
    const semesterCtx = document.getElementById('semesterEnrollmentChart').getContext('2d');
    const semesterEnrollmentChart = new Chart(semesterCtx, {
        type: 'radar',
        data: {
            labels: ['Fall 2019', 'Spring 2020', 'Fall 2020', 'Spring 2021', 'Fall 2021', 'Spring 2022', 'Fall 2022', 'Spring 2023'],
            datasets: [{
                label: 'Enrollment',
                data: [320, 280, 310, 290, 350, 320, 380, 360],
                backgroundColor: 'rgba(58, 123, 213, 0.2)',
                borderColor: 'rgba(58, 123, 213, 1)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(58, 123, 213, 1)'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                r: {
                    angleLines: {
                        display: true
                    },
                    suggestedMin: 200,
                    suggestedMax: 400
                }
            }
        }
    });
</script>

</body>
</html>