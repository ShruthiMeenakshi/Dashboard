<?php 
$page_title = "Academic Reports | College Management System";
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
        
        /* Academic Report-specific styles */
        .academic-card {
            text-align: center;
            padding: 20px 0;
            border-radius: 8px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .academic-card h3 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .academic-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background: white;
        }
        
        .academic-card:nth-child(1) {
            background: linear-gradient(135deg, #4b6cb7, #182848);
        }
        
        .academic-card:nth-child(2) {
            background: linear-gradient(135deg, #8e2de2, #4a00e0);
        }
        
        .academic-card:nth-child(3) {
            background: linear-gradient(135deg, #11998e, #38ef7d);
        }
        
        .academic-card:nth-child(4) {
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
        
        .academic-table th {
            background-color: #f8f9fa;
            font-weight: 600;
        }
        
        .academic-table tbody tr {
            transition: all 0.2s ease;
        }
        
        .academic-table tbody tr:hover {
            background-color: rgba(58, 123, 213, 0.05);
        }
        
        .grade-A {
            background-color: #d4edda;
            color: #155724;
        }
        
        .grade-B {
            background-color: #cce5ff;
            color: #004085;
        }
        
        .grade-C {
            background-color: #fff3cd;
            color: #856404;
        }
        
        .grade-D {
            background-color: #f8d7da;
            color: #721c24;
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
        
        .department-badge {
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
                            <h4 class="mb-0">Academic Performance Reports</h4>
                            <div class="d-flex align-items-center">
                                <span class="me-2">Semester: Fall 2023</span>
                                <i class="fas fa-graduation-cap fs-4 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Academic Stats Cards -->
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card academic-card">
                            <div class="card-body">
                                <i class="fas fa-chart-line fs-4 mb-3"></i>
                                <h3>3.42</h3>
                                <p>Average GPA</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card academic-card">
                            <div class="card-body">
                                <i class="fas fa-trophy fs-4 mb-3"></i>
                                <h3>24%</h3>
                                <p>Dean's List</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card academic-card">
                            <div class="card-body">
                                <i class="fas fa-book fs-4 mb-3"></i>
                                <h3>92%</h3>
                                <p>Pass Rate</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card academic-card">
                            <div class="card-body">
                                <i class="fas fa-exclamation-triangle fs-4 mb-3"></i>
                                <h3>8%</h3>
                                <p>Academic Probation</p>
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
                                <label class="form-label">Semester</label>
                                <select class="form-select">
                                    <option selected>Fall 2023</option>
                                    <option>Spring 2023</option>
                                    <option>Fall 2022</option>
                                    <option>Spring 2022</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Department</label>
                                <select class="form-select">
                                    <option selected>All Departments</option>
                                    <option>Computer Science</option>
                                    <option>Electrical Engineering</option>
                                    <option>Business Administration</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Program Level</label>
                                <select class="form-select">
                                    <option selected>All Levels</option>
                                    <option>Undergraduate</option>
                                    <option>Graduate</option>
                                    <option>Doctoral</option>
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
                                <h4 class="card-title mb-4">GPA Distribution</h4>
                                <div class="chart-container">
                                    <canvas id="gpaDistributionChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Department Performance</h4>
                                <div class="chart-container">
                                    <canvas id="departmentPerformanceChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Grade Distribution</h4>
                                <div class="chart-container">
                                    <canvas id="gradeDistributionChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Historical Trend</h4>
                                <div class="chart-container">
                                    <canvas id="historicalTrendChart"></canvas>
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
                                    <h4 class="card-title mb-0">Course Performance Analysis</h4>
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
                                    <table class="table academic-table table-hover table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>Course Code</th>
                                                <th>Course Title</th>
                                                <th>Department</th>
                                                <th>Instructor</th>
                                                <th>Enrollment</th>
                                                <th>Avg Grade</th>
                                                <th>Grade Distribution</th>
                                                <th>Trend</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CS-301</td>
                                                <td>Advanced Data Structures</td>
                                                <td><span class="department-badge">Computer Science</span></td>
                                                <td>Prof. Smith</td>
                                                <td>42</td>
                                                <td>B+</td>
                                                <td>
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar grade-A" role="progressbar" style="width: 25%" title="A (25%)"></div>
                                                        <div class="progress-bar grade-B" role="progressbar" style="width: 40%" title="B (40%)"></div>
                                                        <div class="progress-bar grade-C" role="progressbar" style="width: 25%" title="C (25%)"></div>
                                                        <div class="progress-bar grade-D" role="progressbar" style="width: 10%" title="D/F (10%)"></div>
                                                    </div>
                                                </td>
                                                <td><i class="fas fa-arrow-up trend-up me-1"></i> 5.2%</td>
                                            </tr>
                                            <tr>
                                                <td>EE-302</td>
                                                <td>Circuit Theory</td>
                                                <td><span class="department-badge">Electrical Eng</span></td>
                                                <td>Prof. Johnson</td>
                                                <td>38</td>
                                                <td>B</td>
                                                <td>
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar grade-A" role="progressbar" style="width: 15%" title="A (15%)"></div>
                                                        <div class="progress-bar grade-B" role="progressbar" style="width: 45%" title="B (45%)"></div>
                                                        <div class="progress-bar grade-C" role="progressbar" style="width: 30%" title="C (30%)"></div>
                                                        <div class="progress-bar grade-D" role="progressbar" style="width: 10%" title="D/F (10%)"></div>
                                                    </div>
                                                </td>
                                                <td><i class="fas fa-arrow-down trend-down me-1"></i> 3.8%</td>
                                            </tr>
                                            <tr>
                                                <td>BA-201</td>
                                                <td>Business Statistics</td>
                                                <td><span class="department-badge">Business Admin</span></td>
                                                <td>Prof. Williams</td>
                                                <td>56</td>
                                                <td>A-</td>
                                                <td>
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar grade-A" role="progressbar" style="width: 35%" title="A (35%)"></div>
                                                        <div class="progress-bar grade-B" role="progressbar" style="width: 45%" title="B (45%)"></div>
                                                        <div class="progress-bar grade-C" role="progressbar" style="width: 15%" title="C (15%)"></div>
                                                        <div class="progress-bar grade-D" role="progressbar" style="width: 5%" title="D/F (5%)"></div>
                                                    </div>
                                                </td>
                                                <td><i class="fas fa-arrow-up trend-up me-1"></i> 7.1%</td>
                                            </tr>
                                            <tr>
                                                <td>CS-302</td>
                                                <td>Database Systems</td>
                                                <td><span class="department-badge">Computer Science</span></td>
                                                <td>Prof. Brown</td>
                                                <td>48</td>
                                                <td>B+</td>
                                                <td>
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar grade-A" role="progressbar" style="width: 30%" title="A (30%)"></div>
                                                        <div class="progress-bar grade-B" role="progressbar" style="width: 40%" title="B (40%)"></div>
                                                        <div class="progress-bar grade-C" role="progressbar" style="width: 20%" title="C (20%)"></div>
                                                        <div class="progress-bar grade-D" role="progressbar" style="width: 10%" title="D/F (10%)"></div>
                                                    </div>
                                                </td>
                                                <td><i class="fas fa-equals me-1 text-muted"></i> 0.5%</td>
                                            </tr>
                                            <tr>
                                                <td>ME-401</td>
                                                <td>Thermodynamics</td>
                                                <td><span class="department-badge">Mechanical Eng</span></td>
                                                <td>Prof. Davis</td>
                                                <td>32</td>
                                                <td>C+</td>
                                                <td>
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar grade-A" role="progressbar" style="width: 10%" title="A (10%)"></div>
                                                        <div class="progress-bar grade-B" role="progressbar" style="width: 30%" title="B (30%)"></div>
                                                        <div class="progress-bar grade-C" role="progressbar" style="width: 40%" title="C (40%)"></div>
                                                        <div class="progress-bar grade-D" role="progressbar" style="width: 20%" title="D/F (20%)"></div>
                                                    </div>
                                                </td>
                                                <td><i class="fas fa-arrow-down trend-down me-1"></i> 8.3%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <!-- Pagination -->
                                <div class="row mt-3">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info">
                                            Showing 1 to 5 of 24 courses
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
                                                <li class="paginate_button page-item">
                                                    <a href="#" class="page-link">4</a>
                                                </li>
                                                <li class="paginate_button page-item">
                                                    <a href="#" class="page-link">5</a>
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
    // GPA Distribution Chart
    const gpaCtx = document.getElementById('gpaDistributionChart').getContext('2d');
    const gpaDistributionChart = new Chart(gpaCtx, {
        type: 'bar',
        data: {
            labels: ['0.0-1.0', '1.1-2.0', '2.1-3.0', '3.1-4.0'],
            datasets: [{
                label: 'Number of Students',
                data: [25, 120, 450, 350],
                backgroundColor: [
                    'rgba(220, 53, 69, 0.7)',
                    'rgba(255, 193, 7, 0.7)',
                    'rgba(23, 162, 184, 0.7)',
                    'rgba(40, 167, 69, 0.7)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Number of Students'
                    }
                }
            }
        }
    });

    // Department Performance Chart
    const deptCtx = document.getElementById('departmentPerformanceChart').getContext('2d');
    const departmentPerformanceChart = new Chart(deptCtx, {
        type: 'horizontalBar',
        data: {
            labels: ['Computer Science', 'Electrical Eng', 'Business Admin', 'Mechanical Eng', 'Arts & Humanities'],
            datasets: [{
                label: 'Average GPA',
                data: [3.52, 3.28, 3.45, 3.15, 3.38],
                backgroundColor: 'rgba(58, 123, 213, 0.7)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    beginAtZero: false,
                    min: 2.0,
                    max: 4.0,
                    title: {
                        display: true,
                        text: 'Average GPA'
                    }
                }
            }
        }
    });

    // Grade Distribution Chart
    const gradeCtx = document.getElementById('gradeDistributionChart').getContext('2d');
    const gradeDistributionChart = new Chart(gradeCtx, {
        type: 'pie',
        data: {
            labels: ['A (90-100)', 'B (80-89)', 'C (70-79)', 'D (60-69)', 'F (<60)'],
            datasets: [{
                data: [25, 40, 20, 10, 5],
                backgroundColor: [
                    'rgba(40, 167, 69, 0.7)',
                    'rgba(23, 162, 184, 0.7)',
                    'rgba(255, 193, 7, 0.7)',
                    'rgba(253, 126, 20, 0.7)',
                    'rgba(220, 53, 69, 0.7)'
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

    // Historical Trend Chart
    const trendCtx = document.getElementById('historicalTrendChart').getContext('2d');
    const historicalTrendChart = new Chart(trendCtx, {
        type: 'line',
        data: {
            labels: ['Fall 2020', 'Spring 2021', 'Fall 2021', 'Spring 2022', 'Fall 2022', 'Spring 2023', 'Fall 2023'],
            datasets: [{
                label: 'Average GPA',
                data: [3.28, 3.32, 3.35, 3.38, 3.40, 3.42, 3.45],
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
                    min: 3.0,
                    max: 4.0,
                    title: {
                        display: true,
                        text: 'Average GPA'
                    }
                }
            }
        }
    });
</script>

</body>
</html>