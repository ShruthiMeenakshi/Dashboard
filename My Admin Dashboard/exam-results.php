<?php 
$page_title = "Exam Results | College Management System";
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
        
        /* Result-specific styles */
        .result-card {
            border-left: 4px solid var(--accent-color);
            transition: all 0.3s ease;
        }
        
        .result-card:hover {
            transform: translateX(5px);
        }
        
        .result-excellent {
            color: #28a745;
            font-weight: 600;
        }
        
        .result-good {
            color: #17a2b8;
            font-weight: 600;
        }
        
        .result-average {
            color: #ffc107;
            font-weight: 600;
        }
        
        .result-poor {
            color: #dc3545;
            font-weight: 600;
        }
        
        .result-actions .btn {
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
        
        .result-summary-card {
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }
        
        .topper-badge {
            position: absolute;
            top: -10px;
            right: -10px;
            background: #ffc107;
            color: #856404;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            font-weight: bold;
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
                            <h4 class="mb-0">Exam Results</h4>
                            <div class="d-flex align-items-center">
                                <span class="me-2">Results Published: May 25, 2023</span>
                                <i class="fas fa-check-circle fs-4 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Results Stats Cards -->
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-white" style="background: linear-gradient(135deg, #4b6cb7, #182848);">
                            <div class="card-body text-center">
                                <i class="fas fa-users fs-4 mb-3"></i>
                                <h3>142</h3>
                                <p>Students</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-white" style="background: linear-gradient(135deg, #8e2de2, #4a00e0);">
                            <div class="card-body text-center">
                                <i class="fas fa-chart-line fs-4 mb-3"></i>
                                <h3>82.5%</h3>
                                <p>Average Score</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-white" style="background: linear-gradient(135deg, #11998e, #38ef7d);">
                            <div class="card-body text-center">
                                <i class="fas fa-trophy fs-4 mb-3"></i>
                                <h3>24</h3>
                                <p>A Grades</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-white" style="background: linear-gradient(135deg, #f46b45, #eea849);">
                            <div class="card-body text-center">
                                <i class="fas fa-graduation-cap fs-4 mb-3"></i>
                                <h3>92%</h3>
                                <p>Pass Percentage</p>
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
                                    <h4 class="card-title mb-0">Exam Results</h4>
                                    <div>
                                        <button class="btn btn-sm btn-outline-secondary me-2">
                                            <i class="fas fa-download me-1"></i> Export
                                        </button>
                                        <button class="btn btn-sm btn-primary">
                                            <i class="fas fa-print me-1"></i> Print
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 40px;">Rank</th>
                                                <th scope="col">Student</th>
                                                <th scope="col">Score</th>
                                                <th scope="col">Grade</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="badge bg-success">1</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="student-avatar me-2 position-relative">
                                                            JD
                                                            <span class="topper-badge"><i class="fas fa-crown"></i></span>
                                                        </div>
                                                        <div>
                                                            <div>John Doe</div>
                                                            <small class="text-muted">#ST2023001</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>92/100</div>
                                                    <div class="progress progress-thin mt-1">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><span class="result-excellent">A</span></td>
                                                <td>
                                                    <span class="badge bg-success">Passed</span>
                                                </td>
                                                <td class="result-actions">
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="fas fa-file-pdf"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="badge bg-info">2</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="student-avatar me-2">
                                                            AS
                                                        </div>
                                                        <div>
                                                            <div>Alice Smith</div>
                                                            <small class="text-muted">#ST2023002</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>85/100</div>
                                                    <div class="progress progress-thin mt-1">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><span class="result-good">B+</span></td>
                                                <td>
                                                    <span class="badge bg-success">Passed</span>
                                                </td>
                                                <td class="result-actions">
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="fas fa-file-pdf"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="badge bg-warning">15</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="student-avatar me-2">
                                                            RJ
                                                        </div>
                                                        <div>
                                                            <div>Robert Johnson</div>
                                                            <small class="text-muted">#ST2023003</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>76/100</div>
                                                    <div class="progress progress-thin mt-1">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 76%" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><span class="result-average">C+</span></td>
                                                <td>
                                                    <span class="badge bg-success">Passed</span>
                                                </td>
                                                <td class="result-actions">
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="fas fa-file-pdf"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="badge bg-danger">42</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="student-avatar me-2">
                                                            MJ
                                                        </div>
                                                        <div>
                                                            <div>Mary Johnson</div>
                                                            <small class="text-muted">#ST2023004</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>52/100</div>
                                                    <div class="progress progress-thin mt-1">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </td>
                                                <td><span class="result-poor">F</span></td>
                                                <td>
                                                    <span class="badge bg-danger">Failed</span>
                                                </td>
                                                <td class="result-actions">
                                                    <button class="btn btn-sm btn-outline-primary">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-secondary">
                                                        <i class="fas fa-file-pdf"></i>
                                                    </button>
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
                                <h4 class="card-title mb-4">Top Performers</h4>
                                <div class="pe-3" data-simplebar style="max-height: 400px;">
                                    <div class="result-summary-card">
                                        <div class="d-flex align-items-center">
                                            <div class="student-avatar me-3 bg-success bg-opacity-10 text-success">
                                                1
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1">John Doe</h5>
                                                <p class="text-muted mb-0">#ST2023001</p>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold">92%</div>
                                                <span class="badge bg-success">A</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result-summary-card">
                                        <div class="d-flex align-items-center">
                                            <div class="student-avatar me-3 bg-info bg-opacity-10 text-info">
                                                2
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1">Alice Smith</h5>
                                                <p class="text-muted mb-0">#ST2023002</p>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold">85%</div>
                                                <span class="badge bg-info">B+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result-summary-card">
                                        <div class="d-flex align-items-center">
                                            <div class="student-avatar me-3 bg-primary bg-opacity-10 text-primary">
                                                3
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1">David Wilson</h5>
                                                <p class="text-muted mb-0">#ST2023005</p>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold">83%</div>
                                                <span class="badge bg-info">B+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result-summary-card">
                                        <div class="d-flex align-items-center">
                                            <div class="student-avatar me-3 bg-purple bg-opacity-10 text-purple">
                                                4
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1">Sarah Miller</h5>
                                                <p class="text-muted mb-0">#ST2023006</p>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold">81%</div>
                                                <span class="badge bg-primary">B</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="result-summary-card">
                                        <div class="d-flex align-items-center">
                                            <div class="student-avatar me-3 bg-warning bg-opacity-10 text-warning">
                                                5
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="mb-1">Michael Brown</h5>
                                                <p class="text-muted mb-0">#ST2023007</p>
                                            </div>
                                            <div class="text-end">
                                                <div class="fw-bold">78%</div>
                                                <span class="badge bg-warning">C+</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-4">
                                    <h5 class="font-size-16 mb-3">Result Statistics</h5>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Pass Percentage</span>
                                        <span class="fw-bold">92%</span>
                                    </div>
                                    <div class="progress progress-thin mb-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Failure Percentage</span>
                                        <span class="fw-bold">8%</span>
                                    </div>
                                    <div class="progress progress-thin">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
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