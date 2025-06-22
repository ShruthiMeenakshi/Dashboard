<?php 
$page_title = "Course Registration | College Management System";
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
    
    <style>
        .course-card {
            border: 1px solid #e9ecef;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
            transition: all 0.3s;
        }
        .course-card:hover {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }
        .course-card.selected {
            border-color: #0d6efd;
            background-color: #f8f9fa;
        }
        .conflict {
            background-color: #fff3cd;
        }
        .prereq-not-met {
            background-color: #f8d7da;
        }
        .credit-counter {
            font-size: 1.2rem;
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
                            <h4 class="mb-0">Course Registration</h4>
                            <div class="page-title-right">
                                <span class="credit-counter badge bg-primary me-2">Registered Credits: 12/18</span>
                                <button class="btn btn-success">Submit Registration</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Student Information -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <p><strong>Student ID:</strong> STU2023001</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p><strong>Name:</strong> John Doe</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p><strong>Program:</strong> B.Sc. Computer Science</p>
                                    </div>
                                    <div class="col-md-3">
                                        <p><strong>Semester:</strong> Fall 2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Available Courses -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Available Courses</h4>
                                
                                <!-- Search and Filter -->
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="search-box">
                                            <input type="text" class="form-control" placeholder="Search courses...">
                                            <i class="ri-search-line search-icon"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select">
                                            <option>All Departments</option>
                                            <option>Computer Science</option>
                                            <option>Mathematics</option>
                                            <option>Engineering</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Course List -->
                                <div class="row">
                                    <!-- Course Card 1 -->
                                    <div class="col-md-6">
                                        <div class="course-card">
                                            <div class="d-flex justify-content-between">
                                                <h5>CS101 - Intro to Programming</h5>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="course1">
                                                </div>
                                            </div>
                                            <p class="text-muted mb-2">3 Credits</p>
                                            <p><small><strong>Schedule:</strong> Mon/Wed 10:00-11:30</small></p>
                                            <p><small><strong>Instructor:</strong> Dr. Smith</small></p>
                                            <p><small><strong>Prerequisites:</strong> None</small></p>
                                            <button type="button" class="btn btn-sm btn-outline-primary mt-2">View Details</button>
                                        </div>
                                    </div>

                                    <!-- Course Card 2 -->
                                    <div class="col-md-6">
                                        <div class="course-card">
                                            <div class="d-flex justify-content-between">
                                                <h5>MATH201 - Calculus II</h5>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="course2">
                                                </div>
                                            </div>
                                            <p class="text-muted mb-2">4 Credits</p>
                                            <p><small><strong>Schedule:</strong> Tue/Thu 13:00-14:30</small></p>
                                            <p><small><strong>Instructor:</strong> Prof. Johnson</small></p>
                                            <p><small><strong>Prerequisites:</strong> MATH101</small></p>
                                            <button type="button" class="btn btn-sm btn-outline-primary mt-2">View Details</button>
                                        </div>
                                    </div>

                                    <!-- Course Card 3 -->
                                    <div class="col-md-6">
                                        <div class="course-card prereq-not-met">
                                            <div class="d-flex justify-content-between">
                                                <h5>CS301 - Data Structures</h5>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="course3" disabled>
                                                </div>
                                            </div>
                                            <p class="text-muted mb-2">3 Credits</p>
                                            <p><small><strong>Schedule:</strong> Mon/Wed 14:00-15:30</small></p>
                                            <p><small><strong>Instructor:</strong> Dr. Williams</small></p>
                                            <p><small class="text-danger"><strong>Prerequisites:</strong> CS101 (Not met)</small></p>
                                            <button type="button" class="btn btn-sm btn-outline-primary mt-2">View Details</button>
                                        </div>
                                    </div>

                                    <!-- Course Card 4 -->
                                    <div class="col-md-6">
                                        <div class="course-card conflict">
                                            <div class="d-flex justify-content-between">
                                                <h5>ENG201 - Technical Writing</h5>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="course4">
                                                </div>
                                            </div>
                                            <p class="text-muted mb-2">2 Credits</p>
                                            <p><small><strong>Schedule:</strong> Mon/Wed 10:00-11:30</small></p>
                                            <p><small><strong>Instructor:</strong> Dr. Brown</small></p>
                                            <p><small class="text-warning"><strong>Conflict:</strong> CS101</small></p>
                                            <button type="button" class="btn btn-sm btn-outline-primary mt-2">View Details</button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pagination -->
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Selected Courses -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Selected Courses</h4>
                                
                                <div class="table-responsive">
                                    <table class="table table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Course</th>
                                                <th>Credits</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CS101 - Intro to Programming</td>
                                                <td>3</td>
                                                <td><button class="btn btn-sm btn-danger">Remove</button></td>
                                            </tr>
                                            <tr>
                                                <td>MATH201 - Calculus II</td>
                                                <td>4</td>
                                                <td><button class="btn btn-sm btn-danger">Remove</button></td>
                                            </tr>
                                            <tr>
                                                <td>PHYS101 - Physics I</td>
                                                <td>4</td>
                                                <td><button class="btn btn-sm btn-danger">Remove</button></td>
                                            </tr>
                                            <tr>
                                                <td>HIST101 - World History</td>
                                                <td>3</td>
                                                <td><button class="btn btn-sm btn-danger">Remove</button></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Total</th>
                                                <th>14</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="mt-4">
                                    <h5>Registration Status</h5>
                                    <div class="progress mb-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="text-muted">Minimum credits required: 12</p>
                                    <p class="text-muted">Maximum credits allowed: 18</p>
                                </div>

                                <div class="mt-3">
                                    <button class="btn btn-primary w-100">Validate Selection</button>
                                    <button class="btn btn-success w-100 mt-2">Submit Registration</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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

</body>
</html>