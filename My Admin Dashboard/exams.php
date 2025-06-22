<?php 
$page_title = "Exams | College Management System";
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
        
        /* Exam-specific styles */
        .exam-card {
            border-left: 4px solid var(--accent-color);
            transition: all 0.3s ease;
        }
        
        .exam-card:hover {
            transform: translateX(5px);
        }
        
        .exam-schedule {
            background-color: rgba(108, 92, 231, 0.1);
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        
        .exam-status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        
        .status-upcoming {
            background-color: #fff3cd;
            color: #856404;
        }
        
        .status-ongoing {
            background-color: #d4edda;
            color: #155724;
        }
        
        .status-completed {
            background-color: #f8f9fa;
            color: #6c757d;
        }
        
        .exam-actions .btn {
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
                            <h4 class="mb-0">Exams Management</h4>
                            <div class="d-flex align-items-center">
                                <span class="me-2">Current Semester: Spring 2023</span>
                                <i class="fas fa-calendar-alt fs-4 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Exam Stats Cards -->
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card stats-card">
                            <div class="card-body">
                                <i class="fas fa-calendar-check fs-4 mb-3"></i>
                                <h3>24</h3>
                                <p>Upcoming Exams</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card stats-card">
                            <div class="card-body">
                                <i class="fas fa-spinner fs-4 mb-3"></i>
                                <h3>5</h3>
                                <p>Ongoing Exams</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card stats-card">
                            <div class="card-body">
                                <i class="fas fa-clipboard-check fs-4 mb-3"></i>
                                <h3>36</h3>
                                <p>Completed Exams</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card stats-card">
                            <div class="card-body">
                                <i class="fas fa-book fs-4 mb-3"></i>
                                <h3>15</h3>
                                <p>Courses with Exams</p>
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
                                <label class="form-label">Department</label>
                                <select class="form-select">
                                    <option>All Departments</option>
                                    <option>Computer Science</option>
                                    <option selected>Electrical Engineering</option>
                                    <option>Business Administration</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select">
                                    <option>All Statuses</option>
                                    <option selected>Upcoming</option>
                                    <option>Ongoing</option>
                                    <option>Completed</option>
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
                                    <h4 class="card-title mb-0">Exam Schedule</h4>
                                    <button class="btn btn-sm btn-primary">Add New Exam</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Exam ID</th>
                                                <th scope="col">Course</th>
                                                <th scope="col">Date & Time</th>
                                                <th scope="col">Venue</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#EX20230501</td>
                                                <td>Data Structures (CS-201)</td>
                                                <td>
                                                    <div>May 15, 2023</div>
                                                    <small class="text-muted">09:00 AM - 12:00 PM</small>
                                                </td>
                                                <td>Block A - Room 205</td>
                                                <td><span class="exam-status status-upcoming">Upcoming</span></td>
                                                <td class="exam-actions">
                                                    <button class="btn btn-sm btn-outline-primary">Details</button>
                                                    <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#EX20230502</td>
                                                <td>Circuit Theory (EE-301)</td>
                                                <td>
                                                    <div>May 16, 2023</div>
                                                    <small class="text-muted">02:00 PM - 05:00 PM</small>
                                                </td>
                                                <td>Block B - Lab 103</td>
                                                <td><span class="exam-status status-upcoming">Upcoming</span></td>
                                                <td class="exam-actions">
                                                    <button class="btn btn-sm btn-outline-primary">Details</button>
                                                    <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#EX20230503</td>
                                                <td>Database Systems (CS-302)</td>
                                                <td>
                                                    <div>May 10, 2023</div>
                                                    <small class="text-muted">09:00 AM - 12:00 PM</small>
                                                </td>
                                                <td>Block A - Room 301</td>
                                                <td><span class="exam-status status-ongoing">Ongoing</span></td>
                                                <td class="exam-actions">
                                                    <button class="btn btn-sm btn-outline-primary">Details</button>
                                                    <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#EX20230415</td>
                                                <td>Business Statistics (BA-202)</td>
                                                <td>
                                                    <div>April 15, 2023</div>
                                                    <small class="text-muted">02:00 PM - 05:00 PM</small>
                                                </td>
                                                <td>Block C - Room 101</td>
                                                <td><span class="exam-status status-completed">Completed</span></td>
                                                <td class="exam-actions">
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
                                <h4 class="card-title mb-4">Upcoming Exams</h4>
                                <div class="pe-3" data-simplebar style="max-height: 400px;">
                                    <div class="exam-card card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <h5 class="mb-1">Data Structures Final</h5>
                                                    <p class="text-muted mb-1">CS-201 | Prof. Smith</p>
                                                    <div class="d-flex align-items-center text-muted">
                                                        <small><i class="far fa-calendar me-1"></i> May 15, 2023</small>
                                                        <small class="ms-3"><i class="far fa-clock me-1"></i> 09:00 AM</small>
                                                    </div>
                                                </div>
                                                <span class="exam-status status-upcoming">Upcoming</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="exam-card card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <h5 class="mb-1">Circuit Theory Midterm</h5>
                                                    <p class="text-muted mb-1">EE-301 | Prof. Johnson</p>
                                                    <div class="d-flex align-items-center text-muted">
                                                        <small><i class="far fa-calendar me-1"></i> May 16, 2023</small>
                                                        <small class="ms-3"><i class="far fa-clock me-1"></i> 02:00 PM</small>
                                                    </div>
                                                </div>
                                                <span class="exam-status status-upcoming">Upcoming</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="exam-card card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <h5 class="mb-1">Database Systems Quiz</h5>
                                                    <p class="text-muted mb-1">CS-302 | Prof. Williams</p>
                                                    <div class="d-flex align-items-center text-muted">
                                                        <small><i class="far fa-calendar me-1"></i> May 18, 2023</small>
                                                        <small class="ms-3"><i class="far fa-clock me-1"></i> 10:00 AM</small>
                                                    </div>
                                                </div>
                                                <span class="exam-status status-upcoming">Upcoming</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="exam-card card mb-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <h5 class="mb-1">Algorithms Final</h5>
                                                    <p class="text-muted mb-1">CS-401 | Prof. Brown</p>
                                                    <div class="d-flex align-items-center text-muted">
                                                        <small><i class="far fa-calendar me-1"></i> May 20, 2023</small>
                                                        <small class="ms-3"><i class="far fa-clock me-1"></i> 09:00 AM</small>
                                                    </div>
                                                </div>
                                                <span class="exam-status status-upcoming">Upcoming</span>
                                            </div>
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

</body>
</html>