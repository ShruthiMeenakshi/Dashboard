<?php 
$page_title = "Attendance Management | College Management System";
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
    
    <!-- Additional CSS for attendance -->
    <style>
        .attendance-mark {
            cursor: pointer;
        }
        .present {
            color: #28a745;
        }
        .absent {
            color: #dc3545;
        }
        .late {
            color: #ffc107;
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
                            <h4 class="mb-0">Attendance Management</h4>
                            <div class="page-title-right">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#takeAttendanceModal">
                                    <i class="mdi mdi-plus me-1"></i> Take Attendance
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filters Row -->
                <div class="row mb-3">
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Select Course</label>
                            <select class="form-select">
                                <option selected>All Courses</option>
                                <option>Computer Science 101</option>
                                <option>Mathematics 201</option>
                                <option>Physics 101</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Select Department</label>
                            <select class="form-select">
                                <option selected>All Departments</option>
                                <option>Computer Science</option>
                                <option>Mathematics</option>
                                <option>Physics</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">From Date</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label class="form-label">To Date</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                </div>

                <!-- Attendance Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Attendance Records</h4>
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Student ID</th>
                                                <th>Student Name</th>
                                                <th>Course</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>ST001</td>
                                                <td>John Doe</td>
                                                <td>Computer Science 101</td>
                                                <td>2023-06-15</td>
                                                <td><span class="badge bg-success">Present</span></td>
                                                <td>-</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">Edit</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>ST002</td>
                                                <td>Jane Smith</td>
                                                <td>Mathematics 201</td>
                                                <td>2023-06-15</td>
                                                <td><span class="badge bg-warning">Late</span></td>
                                                <td>Arrived 15 minutes late</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">Edit</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>ST003</td>
                                                <td>Robert Johnson</td>
                                                <td>Physics 101</td>
                                                <td>2023-06-14</td>
                                                <td><span class="badge bg-danger">Absent</span></td>
                                                <td>Medical leave</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">Edit</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Take Attendance Modal -->
                <div class="modal fade" id="takeAttendanceModal" tabindex="-1" aria-labelledby="takeAttendanceModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="takeAttendanceModalLabel">Take Attendance</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Select Course</label>
                                        <select class="form-select">
                                            <option selected disabled>Select Course</option>
                                            <option>Computer Science 101</option>
                                            <option>Mathematics 201</option>
                                            <option>Physics 101</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Date</label>
                                        <input type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                </div>
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Student ID</th>
                                                <th>Student Name</th>
                                                <th>Status</th>
                                                <th>Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>ST001</td>
                                                <td>John Doe</td>
                                                <td>
                                                    <select class="form-select form-select-sm attendance-status">
                                                        <option value="present" selected>Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="late">Late</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control form-control-sm" placeholder="Remarks">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ST002</td>
                                                <td>Jane Smith</td>
                                                <td>
                                                    <select class="form-select form-select-sm attendance-status">
                                                        <option value="present">Present</option>
                                                        <option value="absent">Absent</option>
                                                        <option value="late" selected>Late</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control form-control-sm" placeholder="Remarks">
                                                </td>
                                            </tr>
                                            <!-- More students can be added here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save Attendance</button>
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

<!-- Additional JavaScript for attendance functionality -->
<script>
    // Script to handle attendance status changes
    $(document).ready(function() {
        $('.attendance-status').change(function() {
            $(this).removeClass('present absent late');
            if($(this).val() === 'present') {
                $(this).addClass('present');
            } else if($(this).val() === 'absent') {
                $(this).addClass('absent');
            } else if($(this).val() === 'late') {
                $(this).addClass('late');
            }
        });
    });
</script>

</body>
</html>