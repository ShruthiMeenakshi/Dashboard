<?php 
$page_title = "Program Structure | College Management System";
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
    
    <!-- Select2 CSS -->
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <!-- Dragula CSS -->
    <link href="assets/libs/dragula/dragula.min.css" rel="stylesheet" type="text/css" />
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
                            <h4 class="mb-0">Program Structure - Bachelor of Science in Computer Science</h4>
                            <div class="page-title-right">
                                <a href="programs.php" class="btn btn-secondary">
                                    <i class="mdi mdi-arrow-left me-1"></i> Back to Programs
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Program Info Summary -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <p class="text-muted mb-1">Program Code</p>
                                            <h5 class="font-size-16">CS-BS</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <p class="text-muted mb-1">Department</p>
                                            <h5 class="font-size-16">Computer Science</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <p class="text-muted mb-1">Duration</p>
                                            <h5 class="font-size-16">4 Years</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <p class="text-muted mb-1">Total Credits</p>
                                            <h5 class="font-size-16">120</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Program Structure Tabs -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#semester-view" role="tab">
                                            <span class="d-block d-sm-none"><i class="mdi mdi-calendar-month"></i></span>
                                            <span class="d-none d-sm-block">Semester View</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#category-view" role="tab">
                                            <span class="d-block d-sm-none"><i class="mdi mdi-format-list-bulleted"></i></span>
                                            <span class="d-none d-sm-block">Category View</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#requirements" role="tab">
                                            <span class="d-block d-sm-none"><i class="mdi mdi-checkbox-marked-circle-outline"></i></span>
                                            <span class="d-none d-sm-block">Requirements</span>
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab content -->
                                <div class="tab-content p-3">
                                    <div class="tab-pane active" id="semester-view" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="card mb-3">
                                                    <div class="card-header bg-light">
                                                        <h5 class="font-size-16 mb-0">Year 1 - Semester 1</h5>
                                                    </div>
                                                    <div class="card-body p-2">
                                                        <div id="year1-sem1-courses" class="dragula-container">
                                                            <div class="card mb-2 draggable-course">
                                                                <div class="card-body p-2">
                                                                    <h6 class="font-size-14 mb-1">CS101 - Intro to Programming</h6>
                                                                    <p class="text-muted mb-1">3 Credits</p>
                                                                    <div class="d-flex justify-content-between">
                                                                        <span class="badge bg-primary">Core</span>
                                                                        <a href="#" class="text-danger"><i class="mdi mdi-close"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- More courses... -->
                                                        </div>
                                                        <button class="btn btn-sm btn-outline-primary w-100 mt-2">
                                                            <i class="mdi mdi-plus me-1"></i> Add Course
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- More semesters... -->
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="category-view" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 30%;">Course Category</th>
                                                        <th style="width: 10%;">Credits</th>
                                                        <th style="width: 60%;">Courses</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Core Courses</td>
                                                        <td>60</td>
                                                        <td>
                                                            <div class="d-flex flex-wrap gap-2">
                                                                <span class="badge bg-primary">CS101 - Intro to Programming (3)</span>
                                                                <span class="badge bg-primary">CS201 - Data Structures (3)</span>
                                                                <!-- More courses... -->
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Electives</td>
                                                        <td>30</td>
                                                        <td>
                                                            <div class="d-flex flex-wrap gap-2">
                                                                <span class="badge bg-success">CS202 - Web Development (3)</span>
                                                                <!-- More courses... -->
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="tab-pane" id="requirements" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Graduation Requirements</h5>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                Minimum GPA
                                                                <span class="badge bg-primary rounded-pill">2.5</span>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                Total Credits Required
                                                                <span class="badge bg-primary rounded-pill">120</span>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="thesis-requirement" checked>
                                                                    <label class="form-check-label" for="thesis-requirement">
                                                                        Thesis Required
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Additional Requirements</h5>
                                                        <div class="mb-3">
                                                            <label class="form-label">Internship</label>
                                                            <select class="form-control">
                                                                <option>Not Required</option>
                                                                <option selected>Required (3 Credits)</option>
                                                                <option>Optional</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Foreign Language</label>
                                                            <select class="form-control">
                                                                <option selected>Not Required</option>
                                                                <option>Required (2 Courses)</option>
                                                            </select>
                                                        </div>
                                                        <button class="btn btn-primary">Save Requirements</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course Management Section -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Course Management</h4>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Add Course to Program</label>
                                            <select class="form-control select2">
                                                <option value="">Select Course...</option>
                                                <option value="CS101">CS101 - Introduction to Programming</option>
                                                <option value="MATH101">MATH101 - Calculus I</option>
                                                <!-- More courses... -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Category</label>
                                            <select class="form-control">
                                                <option>Core</option>
                                                <option>Elective</option>
                                                <option>General Ed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Semester</label>
                                            <select class="form-control">
                                                <option>Year 1 - Semester 1</option>
                                                <option>Year 1 - Semester 2</option>
                                                <!-- More semesters... -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary">Add Course</button>
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

<!-- Additional Scripts for Program Structure Page -->
<script src="assets/libs/select2/js/select2.min.js"></script>
<script src="assets/libs/dragula/dragula.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize Select2
        $('.select2').select2();
        
        // Initialize drag and drop for courses
        dragula([document.getElementById('year1-sem1-courses')], {
            moves: function (el, container, handle) {
                return handle.classList.contains('draggable-course');
            }
        });

        // Tab activation
        $('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
            // Handle tab change if needed
        });
    });
</script>

</body>
</html>