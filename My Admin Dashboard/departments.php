<?php 
$page_title = "Departments Management | College Management System";
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
        .department-card {
            border-left: 4px solid #0d6efd;
            transition: all 0.3s;
        }
        .department-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .stats-badge {
            font-size: 0.75rem;
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
                            <h4 class="mb-0">Departments Management</h4>
                            <div class="page-title-right">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDepartmentModal">
                                    <i class="ri-add-line align-middle me-1"></i> Add Department
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Department Stats -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 mb-0">Total Departments</h5>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge bg-success font-size-12">+3.5%</span>
                                    </div>
                                </div>
                                <h3 class="mt-3">15</h3>
                                <p class="text-muted mb-0"><span class="text-success me-2">2 new</span> since last semester</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 mb-0">Active Faculty</h5>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge bg-warning font-size-12">+12.1%</span>
                                    </div>
                                </div>
                                <h3 class="mt-3">127</h3>
                                <p class="text-muted mb-0"><span class="text-success me-2">14 new</span> hires this year</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1">
                                        <h5 class="font-size-14 mb-0">Department Courses</h5>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <span class="badge bg-info font-size-12">+8.7%</span>
                                    </div>
                                </div>
                                <h3 class="mt-3">243</h3>
                                <p class="text-muted mb-0"><span class="text-success me-2">19 new</span> courses added</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Departments List -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="card-title">All Departments</h4>
                                    <div class="search-box ms-2">
                                        <input type="text" class="form-control" placeholder="Search departments...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-centered table-nowrap mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Department Code</th>
                                                <th>Department Name</th>
                                                <th>Head of Department</th>
                                                <th>Faculty Count</th>
                                                <th>Courses</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>CS</td>
                                                <td>
                                                    <h5 class="font-size-14 mb-1">Computer Science</h5>
                                                    <p class="text-muted mb-0">Est. 1995</p>
                                                </td>
                                                <td>Dr. Alan Turing</td>
                                                <td>28</td>
                                                <td>42</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                                    <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>MATH</td>
                                                <td>
                                                    <h5 class="font-size-14 mb-1">Mathematics</h5>
                                                    <p class="text-muted mb-0">Est. 1980</p>
                                                </td>
                                                <td>Prof. Albert Einstein</td>
                                                <td>22</td>
                                                <td>35</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                                    <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>ENG</td>
                                                <td>
                                                    <h5 class="font-size-14 mb-1">Engineering</h5>
                                                    <p class="text-muted mb-0">Est. 1990</p>
                                                </td>
                                                <td>Dr. Nikola Tesla</td>
                                                <td>31</td>
                                                <td>48</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                                    <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>BUS</td>
                                                <td>
                                                    <h5 class="font-size-14 mb-1">Business Administration</h5>
                                                    <p class="text-muted mb-0">Est. 2005</p>
                                                </td>
                                                <td>Prof. Warren Buffet</td>
                                                <td>18</td>
                                                <td>27</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                                    <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PHYS</td>
                                                <td>
                                                    <h5 class="font-size-14 mb-1">Physics</h5>
                                                    <p class="text-muted mb-0">Est. 1975</p>
                                                </td>
                                                <td>Dr. Stephen Hawking</td>
                                                <td>15</td>
                                                <td>29</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary">View</button>
                                                    <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Showing 1 to 5 of 15 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers float-end">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"><a href="#" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" class="page-link">1</a></li>
                                                <li class="paginate_button page-item"><a href="#" class="page-link">2</a></li>
                                                <li class="paginate_button page-item"><a href="#" class="page-link">3</a></li>
                                                <li class="paginate_button page-item next"><a href="#" class="page-link">Next</a></li>
                                            </ul>
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

<!-- Add Department Modal -->
<div class="modal fade" id="addDepartmentModal" tabindex="-1" aria-labelledby="addDepartmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDepartmentModalLabel">Add New Department</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="departmentCode" class="form-label">Department Code</label>
                        <input type="text" class="form-control" id="departmentCode" placeholder="e.g. CS, MATH">
                    </div>
                    <div class="mb-3">
                        <label for="departmentName" class="form-label">Department Name</label>
                        <input type="text" class="form-control" id="departmentName" placeholder="e.g. Computer Science">
                    </div>
                    <div class="mb-3">
                        <label for="hod" class="form-label">Head of Department</label>
                        <select class="form-select" id="hod">
                            <option selected disabled>Select HOD</option>
                            <option>Dr. Alan Turing</option>
                            <option>Prof. Albert Einstein</option>
                            <option>Dr. Nikola Tesla</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="establishmentDate" class="form-label">Establishment Date</label>
                        <input type="date" class="form-control" id="establishmentDate">
                    </div>
                    <div class="mb-3">
                        <label for="departmentDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="departmentDescription" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Department</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/rightbar.php'; ?>
<?php include 'includes/script.php'; ?>

</body>
</html>