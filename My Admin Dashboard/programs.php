<?php 
$page_title = "Academic Programs | College Management System";
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
                            <h4 class="mb-0">Academic Programs</h4>
                            <div class="page-title-right">
                                <a href="program-add.php" class="btn btn-primary">
                                    <i class="mdi mdi-plus me-1"></i> Add New Program
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
                                <h3 class="text-info mt-2">12</h3> Undergraduate Programs
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-purple mt-2">8</h3> Graduate Programs
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-primary mt-2">5</h3> Certificate Programs
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card text-center">
                            <div class="mb-2 card-body text-muted">
                                <h3 class="text-danger mt-2">3</h3> Online Programs
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
                                    <h4 class="card-title mb-0">All Academic Programs</h4>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-filter-outline"></i> Filter
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">All Programs</a></li>
                                            <li><a class="dropdown-item" href="#">Undergraduate</a></li>
                                            <li><a class="dropdown-item" href="#">Graduate</a></li>
                                            <li><a class="dropdown-item" href="#">Certificate</a></li>
                                            <li><a class="dropdown-item" href="#">Online</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table id="programs-datatable" class="table table-centered table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>Program Code</th>
                                                <th>Program Name</th>
                                                <th>Department</th>
                                                <th>Degree Level</th>
                                                <th>Duration</th>
                                                <th>Total Credits</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CS-BS</td>
                                                <td>Bachelor of Science in Computer Science</td>
                                                <td>Computer Science</td>
                                                <td>Undergraduate</td>
                                                <td>4 Years</td>
                                                <td>120</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>
                                                    <a href="program-view.php?id=1" class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="View">
                                                        <i class="mdi mdi-eye-outline"></i>
                                                    </a>
                                                    <a href="program-edit.php?id=1" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" title="Edit">
                                                        <i class="mdi mdi-pencil-outline"></i>
                                                    </a>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="mdi mdi-delete-outline"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>MBA-FT</td>
                                                <td>Master of Business Administration</td>
                                                <td>Business Administration</td>
                                                <td>Graduate</td>
                                                <td>2 Years</td>
                                                <td>60</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>
                                                    <a href="program-view.php?id=2" class="btn btn-sm btn-info" data-bs-toggle="tooltip" title="View">
                                                        <i class="mdi mdi-eye-outline"></i>
                                                    </a>
                                                    <a href="program-edit.php?id=2" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" title="Edit">
                                                        <i class="mdi mdi-pencil-outline"></i>
                                                    </a>
                                                    <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" title="Delete">
                                                        <i class="mdi mdi-delete-outline"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <!-- More program rows... -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- Program Structure Section -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Program Structure Overview</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <h5 class="font-size-16">Credit Distribution</h5>
                                            <div id="credit-distribution-chart" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <h5 class="font-size-16">Enrollment Statistics</h5>
                                            <div id="enrollment-stats-chart" class="apex-charts" dir="ltr"></div>
                                        </div>
                                    </div>
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

<!-- Additional Scripts for Programs Page -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<script>
    // Initialize DataTable
    $(document).ready(function() {
        $('#programs-datatable').DataTable({
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

        // Credit Distribution Chart
        var creditOptions = {
            series: [44, 55, 41, 17, 15],
            chart: {
                type: 'donut',
                height: 300,
            },
            labels: ["Core Courses", "Electives", "General Ed", "Internship", "Thesis"],
            colors: ['#3b5de7', '#45cb85', '#eeb902', '#ff715b', '#343a40'],
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
        var creditChart = new ApexCharts(document.querySelector("#credit-distribution-chart"), creditOptions);
        creditChart.render();

        // Enrollment Stats Chart
        var enrollmentOptions = {
            series: [{
                name: 'Current Enrollment',
                data: [120, 95, 78, 65, 42, 35]
            }, {
                name: 'Capacity',
                data: [150, 120, 100, 80, 60, 50]
            }],
            chart: {
                type: 'bar',
                height: 300,
                stacked: false,
                toolbar: {
                    show: false
                }
            },
            colors: ['#3b5de7', '#eef2f7'],
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['CS-BS', 'MBA-FT', 'ENG-BS', 'BIO-MS', 'ART-BA', 'EDU-PHD'],
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + " students"
                    }
                }
            }
        };
        var enrollmentChart = new ApexCharts(document.querySelector("#enrollment-stats-chart"), enrollmentOptions);
        enrollmentChart.render();
    });
</script>

</body>
</html>