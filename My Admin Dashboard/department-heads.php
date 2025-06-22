<?php 
$page_title = "Department Heads | College Management System";
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
                            <h4 class="mb-0">Department Heads</h4>
                            <div class="page-title-right">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDepartmentHeadModal">
                                    <i class="mdi mdi-plus me-1"></i> Add Department Head
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Department Heads Table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Department Heads List</h4>
                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Department</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Appointment Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Dr. Sarah Johnson</td>
                                                <td>Computer Science</td>
                                                <td>s.johnson@college.edu</td>
                                                <td>(123) 456-7890</td>
                                                <td>2022-01-15</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">Edit</button>
                                                    <button class="btn btn-sm btn-outline-danger">Remove</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Prof. Michael Brown</td>
                                                <td>Mathematics</td>
                                                <td>m.brown@college.edu</td>
                                                <td>(123) 456-7891</td>
                                                <td>2021-09-01</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">Edit</button>
                                                    <button class="btn btn-sm btn-outline-danger">Remove</button>
                                                </td>
                                            </tr>
                                            <!-- More rows can be added here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- Add Department Head Modal -->
                <div class="modal fade" id="addDepartmentHeadModal" tabindex="-1" aria-labelledby="addDepartmentHeadModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addDepartmentHeadModalLabel">Add New Department Head</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="headName" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="headName" placeholder="Enter full name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="headDepartment" class="form-label">Department</label>
                                        <select class="form-select" id="headDepartment">
                                            <option selected disabled>Select Department</option>
                                            <option>Computer Science</option>
                                            <option>Mathematics</option>
                                            <option>Physics</option>
                                            <option>Chemistry</option>
                                            <option>Biology</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="headEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="headEmail" placeholder="Enter email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="headPhone" class="form-label">Phone</label>
                                        <input type="tel" class="form-control" id="headPhone" placeholder="Enter phone number">
                                    </div>
                                    <div class="mb-3">
                                        <label for="appointmentDate" class="form-label">Appointment Date</label>
                                        <input type="date" class="form-control" id="appointmentDate">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
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