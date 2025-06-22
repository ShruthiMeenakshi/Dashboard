<?php 
$page_title = "Course Management | College Management System";
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
    
    <!-- DataTables CSS -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
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
                            <h4 class="mb-0">Course Management</h4>
                            <div class="page-title-right">
                                <a href="course-add.php" class="btn btn-primary">
                                    <i class="mdi mdi-plus me-1"></i> Add New Course
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-info mt-2">42</h3> Active Courses
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-purple mt-2">15</h3> Core Courses
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-primary mt-2">24</h3> Elective Courses
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-danger mt-2">3</h3> New This Semester
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- Main content area -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="card-title mb-0">All Courses</h4>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-filter-outline"></i> Filter
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">All Courses</a></li>
                                            <li><a class="dropdown-item" href="#">Core Courses</a></li>
                                            <li><a class="dropdown-item" href="#">Elective Courses</a></li>
                                            <li><a class="dropdown-item" href="#">Undergraduate</a></li>
                                            <li><a class="dropdown-item" href="#">Graduate</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table id="courses-datatable" class="table table-centered table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>Course Code</th>
                                                <th>Course Name</th>
                                                <th>Department</th>
                                                <th>Credits</th>
                                                <th>Type</th>
                                                <th>Semester</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CS101</td>
                                                <td>Introduction to Programming</td>
                                                <td>Computer Science</td>
                                                <td>3</td>
                                                <td><span class="badge bg-primary">Core</span></td>
                                                <td>1</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>
                                                    <a href="course-view.php?id=1" class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="View">
                                                        <i class="mdi mdi-eye-outline"></i>
                                                    </a>
                                                    <a href="course-edit.php?id=1" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" title="Edit">
                                                        <i class="mdi mdi-pencil-outline"></i>
                                                    </a>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="mdi mdi-delete-outline"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>MATH201</td>
                                                <td>Calculus II</td>
                                                <td>Mathematics</td>
                                                <td>4</td>
                                                <td><span class="badge bg-primary">Core</span></td>
                                                <td>2</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>
                                                    <a href="course-view.php?id=2" class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="View">
                                                        <i class="mdi mdi-eye-outline"></i>
                                                    </a>
                                                    <a href="course-edit.php?id=2" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" title="Edit">
                                                        <i class="mdi mdi-pencil-outline"></i>
                                                    </a>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="mdi mdi-delete-outline"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ENG101</td>
                                                <td>English Composition</td>
                                                <td>English</td>
                                                <td>3</td>
                                                <td><span class="badge bg-success">Elective</span></td>
                                                <td>1</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>
                                                    <a href="course-view.php?id=3" class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="View">
                                                        <i class="mdi mdi-eye-outline"></i>
                                                    </a>
                                                    <a href="course-edit.php?id=3" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" title="Edit">
                                                        <i class="mdi mdi-pencil-outline"></i>
                                                    </a>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="mdi mdi-delete-outline"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- More course rows... -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- Course Distribution Section -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Course Distribution by Department</h4>
                                <div id="department-distribution-chart" class="apex-charts" dir="ltr"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Course Types</h4>
                                <div id="course-types-chart" class="apex-charts" dir="ltr"></div>
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

<!-- Additional Scripts for Courses Page -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<script>
    // Initialize DataTable
    $(document).ready(function() {
        $('#courses-datatable').DataTable({
            responsive: true,
            language: {
                paginate: {
                    previous: "<i class='mdi mdi-chevron-left'>",
                    next: "<i class='mdi mdi-chevron-right'>"
                }
            },
            drawCallback: function() {
                $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
            }
        });

        // Initialize tooltips
        $('[data-bs-toggle="tooltip"]').tooltip();

        // Department Distribution Chart
        var departmentOptions = {
            series: [{
                name: 'Courses',
                data: [15, 12, 8, 5, 3, 2]
            }],
            chart: {
                type: 'bar',
                height: 350,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    horizontal: true,
                }
            },
            dataLabels: {
                enabled: false
            },
            colors: ['#3b5de7'],
            xaxis: {
                categories: ['Computer Science', 'Mathematics', 'English', 'Business', 'Engineering', 'Biology'],
            }
        };
        var departmentChart = new ApexCharts(document.querySelector("#department-distribution-chart"), departmentOptions);
        departmentChart.render();

        // Course Types Chart
        var typeOptions = {
            series: [44, 55, 13],
            chart: {
                type: 'donut',
                height: 350,
            },
            labels: ["Core Courses", "Electives", "General Education"],
            colors: ['#3b5de7', '#45cb85', '#eeb902'],
            legend: {
                position: 'bottom'
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };
        var typeChart = new ApexCharts(document.querySelector("#course-types-chart"), typeOptions);
        typeChart.render();
    });
</script>

</body>
</html>