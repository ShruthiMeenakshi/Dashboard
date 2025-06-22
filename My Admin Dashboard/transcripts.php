<?php 
$page_title = "Student Transcripts | College Management System";
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
        
        /* Transcript-specific styles */
        .transcript-header {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: var(--card-shadow);
        }
        
        .student-avatar-lg {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .gpa-badge {
            font-size: 24px;
            font-weight: 700;
            padding: 10px 20px;
            border-radius: 8px;
        }
        
        .gpa-excellent {
            background-color: rgba(40, 167, 69, 0.1);
            color: #28a745;
        }
        
        .gpa-good {
            background-color: rgba(23, 162, 184, 0.1);
            color: #17a2b8;
        }
        
        .gpa-average {
            background-color: rgba(255, 193, 7, 0.1);
            color: #ffc107;
        }
        
        .semester-card {
            border-left: 4px solid var(--accent-color);
            margin-bottom: 20px;
        }
        
        .course-grade-A {
            background-color: rgba(40, 167, 69, 0.05);
            border-left: 3px solid #28a745;
        }
        
        .course-grade-B {
            background-color: rgba(23, 162, 184, 0.05);
            border-left: 3px solid #17a2b8;
        }
        
        .course-grade-C {
            background-color: rgba(255, 193, 7, 0.05);
            border-left: 3px solid #ffc107;
        }
        
        .course-grade-D {
            background-color: rgba(220, 53, 69, 0.05);
            border-left: 3px solid #dc3545;
        }
        
        .grade-badge {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }
        
        .badge-A {
            background-color: rgba(40, 167, 69, 0.1);
            color: #28a745;
        }
        
        .badge-B {
            background-color: rgba(23, 162, 184, 0.1);
            color: #17a2b8;
        }
        
        .badge-C {
            background-color: rgba(255, 193, 7, 0.1);
            color: #ffc107;
        }
        
        .badge-D {
            background-color: rgba(220, 53, 69, 0.1);
            color: #dc3545;
        }
        
        .transcript-actions .btn {
            margin-right: 8px;
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
                            <h4 class="mb-0">Student Transcripts</h4>
                            <div class="d-flex align-items-center">
                                <span class="me-2">Academic Year: 2022-2023</span>
                                <i class="fas fa-scroll fs-4 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filter Section -->
                <div class="filter-section">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Search Student</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Name or ID">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Program</label>
                                <select class="form-select">
                                    <option>All Programs</option>
                                    <option selected>Computer Science</option>
                                    <option>Electrical Engineering</option>
                                    <option>Business Administration</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select">
                                    <option>All Students</option>
                                    <option selected>Active</option>
                                    <option>Graduated</option>
                                    <option>Transferred</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Transcript Header -->
                <div class="transcript-header">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <div class="student-avatar-lg mx-auto mb-3">JD</div>
                        </div>
                        <div class="col-md-6">
                            <h3>John Doe</h3>
                            <p class="text-muted mb-1">#ST2023001 | Computer Science</p>
                            <p class="text-muted mb-1">Admission Date: Fall 2020 | Expected Graduation: Spring 2024</p>
                            <p class="text-muted">Advisor: Prof. Sarah Williams</p>
                        </div>
                        <div class="col-md-4 text-center text-md-end">
                            <div class="mb-2">
                                <span class="text-muted">Cumulative GPA</span>
                                <div class="gpa-badge gpa-excellent d-inline-block ms-2">3.82</div>
                            </div>
                            <div class="mb-2">
                                <span class="text-muted">Credits Earned</span>
                                <strong class="ms-2">96</strong>
                            </div>
                            <div>
                                <span class="text-muted">Credits Remaining</span>
                                <strong class="ms-2">24</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main content area -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="card-title mb-0">Academic Record</h4>
                                    <div class="transcript-actions">
                                        <button class="btn btn-outline-secondary">
                                            <i class="fas fa-download me-1"></i> Download PDF
                                        </button>
                                        <button class="btn btn-primary">
                                            <i class="fas fa-print me-1"></i> Print Transcript
                                        </button>
                                    </div>
                                </div>
                                
                                <!-- Fall 2022 Semester -->
                                <div class="card semester-card mb-4">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h5 class="mb-0">Fall 2022 Semester</h5>
                                            <div>
                                                <span class="text-muted me-3">Semester GPA: 3.75</span>
                                                <span class="text-muted">Credits: 15</span>
                                            </div>
                                        </div>
                                        
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Course Code</th>
                                                        <th>Course Title</th>
                                                        <th>Credits</th>
                                                        <th>Grade</th>
                                                        <th>Points</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="course-grade-A">
                                                        <td>CS-301</td>
                                                        <td>Advanced Data Structures</td>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="grade-badge badge-A">A</div>
                                                        </td>
                                                        <td>12.00</td>
                                                    </tr>
                                                    <tr class="course-grade-A">
                                                        <td>CS-302</td>
                                                        <td>Database Systems</td>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="grade-badge badge-A">A</div>
                                                        </td>
                                                        <td>12.00</td>
                                                    </tr>
                                                    <tr class="course-grade-B">
                                                        <td>CS-303</td>
                                                        <td>Computer Networks</td>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="grade-badge badge-B">B+</div>
                                                        </td>
                                                        <td>9.99</td>
                                                    </tr>
                                                    <tr class="course-grade-A">
                                                        <td>MATH-201</td>
                                                        <td>Discrete Mathematics</td>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="grade-badge badge-A">A-</div>
                                                        </td>
                                                        <td>11.01</td>
                                                    </tr>
                                                    <tr class="course-grade-B">
                                                        <td>HUM-101</td>
                                                        <td>World Literature</td>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="grade-badge badge-B">B</div>
                                                        </td>
                                                        <td>9.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Spring 2022 Semester -->
                                <div class="card semester-card mb-4">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h5 class="mb-0">Spring 2022 Semester</h5>
                                            <div>
                                                <span class="text-muted me-3">Semester GPA: 3.90</span>
                                                <span class="text-muted">Credits: 18</span>
                                            </div>
                                        </div>
                                        
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Course Code</th>
                                                        <th>Course Title</th>
                                                        <th>Credits</th>
                                                        <th>Grade</th>
                                                        <th>Points</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="course-grade-A">
                                                        <td>CS-201</td>
                                                        <td>Data Structures</td>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="grade-badge badge-A">A</div>
                                                        </td>
                                                        <td>12.00</td>
                                                    </tr>
                                                    <tr class="course-grade-A">
                                                        <td>CS-202</td>
                                                        <td>Algorithms</td>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="grade-badge badge-A">A</div>
                                                        </td>
                                                        <td>12.00</td>
                                                    </tr>
                                                    <tr class="course-grade-A">
                                                        <td>CS-203</td>
                                                        <td>Object-Oriented Programming</td>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="grade-badge badge-A">A-</div>
                                                        </td>
                                                        <td>11.01</td>
                                                    </tr>
                                                    <tr class="course-grade-A">
                                                        <td>MATH-102</td>
                                                        <td>Calculus II</td>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="grade-badge badge-A">A</div>
                                                        </td>
                                                        <td>12.00</td>
                                                    </tr>
                                                    <tr class="course-grade-B">
                                                        <td>PHYS-101</td>
                                                        <td>General Physics</td>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="grade-badge badge-B">B+</div>
                                                        </td>
                                                        <td>9.99</td>
                                                    </tr>
                                                    <tr class="course-grade-A">
                                                        <td>ENG-101</td>
                                                        <td>Academic Writing</td>
                                                        <td>3</td>
                                                        <td>
                                                            <div class="grade-badge badge-A">A</div>
                                                        </td>
                                                        <td>12.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Summary Section -->
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="mb-4">Degree Progress Summary</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <h6 class="mb-3">Credit Requirements</h6>
                                                    <div class="mb-3">
                                                        <div class="d-flex justify-content-between mb-1">
                                                            <span>Core Courses</span>
                                                            <span>72/84 credits</span>
                                                        </div>
                                                        <div class="progress" style="height: 8px;">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="d-flex justify-content-between mb-1">
                                                            <span>Electives</span>
                                                            <span>18/24 credits</span>
                                                        </div>
                                                        <div class="progress" style="height: 8px;">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="d-flex justify-content-between mb-1">
                                                            <span>General Education</span>
                                                            <span>24/24 credits</span>
                                                        </div>
                                                        <div class="progress" style="height: 8px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-4">
                                                    <h6 class="mb-3">GPA Requirements</h6>
                                                    <div class="mb-3">
                                                        <div class="d-flex justify-content-between mb-1">
                                                            <span>Major GPA</span>
                                                            <span>3.78/2.50</span>
                                                        </div>
                                                        <div class="progress" style="height: 8px;">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="d-flex justify-content-between mb-1">
                                                            <span>Cumulative GPA</span>
                                                            <span>3.82/2.00</span>
                                                        </div>
                                                        <div class="progress" style="height: 8px;">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div>
                                                    <h6 class="mb-3">Additional Requirements</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Internship Completed</li>
                                                        <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Capstone Proposal Approved</li>
                                                        <li><i class="fas fa-hourglass-half text-warning me-2"></i> Community Service (12/20 hours)</li>
                                                    </ul>
                                                </div>
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