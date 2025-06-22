<?php 
$page_title = "Exam Grades | College Management System";
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
        
        /* Stats Cards */
        .stats-card {
            text-align: center;
            padding: 20px 0;
            border-radius: 8px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .stats-card h3 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .stats-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background: white;
        }
        
        .stats-card:nth-child(1) {
            background: linear-gradient(135deg, #4b6cb7, #182848);
        }
        
        .stats-card:nth-child(2) {
            background: linear-gradient(135deg, #8e2de2, #4a00e0);
        }
        
        .stats-card:nth-child(3) {
            background: linear-gradient(135deg, #11998e, #38ef7d);
        }
        
        .stats-card:nth-child(4) {
            background: linear-gradient(135deg, #f46b45, #eea849);
        }
        
        /* Table Styling */
        .table {
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .table thead th {
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
            border-bottom: 2px solid #dee2e6;
            font-weight: 600;
            color: #495057;
        }
        
        .table tbody tr {
            transition: all 0.2s ease;
        }
        
        .table tbody tr:hover {
            background-color: rgba(58, 123, 213, 0.05);
            transform: translateX(2px);
        }
        
        .badge {
            padding: 6px 10px;
            font-weight: 500;
            font-size: 12px;
            border-radius: 4px;
        }
        
        /* Grade-specific styles */
        .grade-card {
            border-left: 4px solid var(--accent-color);
            transition: all 0.3s ease;
        }
        
        .grade-card:hover {
            transform: translateX(5px);
        }
        
        .grade-excellent {
            color: #28a745;
            font-weight: 600;
        }
        
        .grade-good {
            color: #17a2b8;
            font-weight: 600;
        }
        
        .grade-average {
            color: #ffc107;
            font-weight: 600;
        }
        
        .grade-poor {
            color: #dc3545;
            font-weight: 600;
        }
        
        .grade-actions .btn {
            margin-right: 5px;
            font-size: 13px;
        }
        
        .filter-section {
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: var(--card-shadow);
        }
        
        .progress-thin {
            height: 6px;
        }
        
        .student-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .grade-distribution-chart {
            height: 250px;
            position: relative;
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
                            <h4 class="mb-0">Exam Grades Management</h4>
                            <div class="d-flex align-items-center">
                                <span class="me-2">Current Semester: Spring 2023</span>
                                <i class="fas fa-graduation-cap fs-4 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Grade Stats Cards -->
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card stats-card">
                            <div class="card-body">
                                <i class="fas fa-user-graduate fs-4 mb-3"></i>
                                <h3>142</h3>
                                <p>Students Graded</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card stats-card">
                            <div class="card-body">
                                <i class="fas fa-chart-line fs-4 mb-3"></i>
                                <h3>82.5%</h3>
                                <p>Average Score</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card stats-card">
                            <div class="card-body">
                                <i class="fas fa-trophy fs-4 mb-3"></i>
                                <h3>24</h3>
                                <p>A Grades</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card stats-card">
                            <div class="card-body">
                                <i class="fas fa-book fs-4 mb-3"></i>
                                <h3>8</h3>
                                <p>Courses Graded</p>
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
                                    <option>All Semesters</option>
                                    <option selected>Spring 2023</option>
                                    <option>Fall 2022</option>
                                    <option>Summer 2022</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Course</label>
                                <select class="form-select">
                                    <option>All Courses</option>
                                    <option selected>Data Structures (CS-201)</option>
                                    <option>Circuit Theory (EE-301)</option>
                                    <option>Database Systems (CS-302)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Exam Type</label>
                                <select class="form-select">
                                    <option>All Types</option>
                                    <option selected>Final Exam</option>
                                    <option>Midterm</option>
                                    <option>Quiz</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <button class="btn btn-primary w-100">Apply Filters</button>
                        </div>
                    </div>
                </div>

                <!-- Main content area -->
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="card-title mb-0">Student Grades</h4>
                                    <div>
                                        <button class="btn btn-sm btn-outline-secondary me-2">Export</button>
                                        <button class="btn btn-sm btn-primary">Enter Grades</button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Student</th>
                                                <th scope="col">ID</th>
                                                <th scope="col">Score</th>
                                                <th scope="col">Grade</th>
                                                <th scope="col">Performance</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="student-avatar me-2">
                                                            JD
                                                        </div>
                                                        <span>John Doe</span>
                                                    </div>
                                                </td>
                                                <td>#ST2023001</td>
                                                <td>
                                                    <div>92/100</div>
                                                    <div class="progress progress-thin mt-1">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><span class="grade-excellent">A</span></td>
                                                <td>
                                                    <span class="badge bg-success">Top 5%</span>
                                                </td>
                                                <td class="grade-actions">
                                                    <button class="btn btn-sm btn-outline-primary">Details</button>
                                                    <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="student-avatar me-2">
                                                            AS
                                                        </div>
                                                        <span>Alice Smith</span>
                                                    </div>
                                                </td>
                                                <td>#ST2023002</td>
                                                <td>
                                                    <div>85/100</div>
                                                    <div class="progress progress-thin mt-1">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><span class="grade-good">B+</span></td>
                                                <td>
                                                    <span class="badge bg-info">Above Average</span>
                                                </td>
                                                <td class="grade-actions">
                                                    <button class="btn btn-sm btn-outline-primary">Details</button>
                                                    <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="student-avatar me-2">
                                                            RJ
                                                        </div>
                                                        <span>Robert Johnson</span>
                                                    </div>
                                                </td>
                                                <td>#ST2023003</td>
                                                <td>
                                                    <div>76/100</div>
                                                    <div class="progress progress-thin mt-1">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 76%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><span class="grade-average">C+</span></td>
                                                <td>
                                                    <span class="badge bg-warning">Average</span>
                                                </td>
                                                <td class="grade-actions">
                                                    <button class="btn btn-sm btn-outline-primary">Details</button>
                                                    <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="student-avatar me-2">
                                                            MJ
                                                        </div>
                                                        <span>Mary Johnson</span>
                                                    </div>
                                                </td>
                                                <td>#ST2023004</td>
                                                <td>
                                                    <div>62/100</div>
                                                    <div class="progress progress-thin mt-1">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><span class="grade-poor">D</span></td>
                                                <td>
                                                    <span class="badge bg-danger">Below Average</span>
                                                </td>
                                                <td class="grade-actions">
                                                    <button class="btn btn-sm btn-outline-primary">Details</button>
                                                    <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Grade Distribution</h4>
                                <div class="grade-distribution-chart mb-4">
                                    <!-- This would be replaced with an actual chart in implementation -->
                                    <div class="text-center py-5 bg-light rounded">
                                        <i class="fas fa-chart-pie fs-1 text-muted"></i>
                                        <p class="mt-2">Grade Distribution Chart</p>
                                    </div>
                                </div>
                                
                                <h5 class="font-size-16 mb-3">Grade Summary</h5>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>A (90-100)</span>
                                        <span>24 students</span>
                                    </div>
                                    <div class="progress progress-thin">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>B (80-89)</span>
                                        <span>42 students</span>
                                    </div>
                                    <div class="progress progress-thin">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 42%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>C (70-79)</span>
                                        <span>30 students</span>
                                    </div>
                                    <div class="progress progress-thin">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>D (60-69)</span>
                                        <span>8 students</span>
                                    </div>
                                    <div class="progress progress-thin">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>F (Below 60)</span>
                                        <span>2 students</span>
                                    </div>
                                    <div class="progress progress-thin">
                                        <div class="progress-bar bg-dark" role="progressbar" style="width: 2%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
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

</body>
</html>