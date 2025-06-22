<?php 
$page_title = "Add Department | College Management System";
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
        .form-section {
            background-color: #f8f9fa;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .form-section h5 {
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 10px;
            margin-bottom: 20px;
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
                            <h4 class="mb-0">Add New Department</h4>
                            <div class="page-title-right">
                                <a href="departments.php" class="btn btn-secondary">
                                    <i class="ri-arrow-go-back-line align-middle me-1"></i> Back to Departments
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Department Form -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Department Information</h4>
                                <p class="card-title-desc">Fill all required fields to add a new department</p>

                                <form>
                                    <!-- Basic Information Section -->
                                    <div class="form-section">
                                        <h5>Basic Information</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="departmentCode" class="form-label">Department Code <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="departmentCode" required placeholder="e.g. CS, MATH">
                                                    <div class="form-text">Short identifier (2-5 characters)</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="departmentName" class="form-label">Department Name <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="departmentName" required placeholder="e.g. Computer Science">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="establishmentDate" class="form-label">Establishment Date</label>
                                                    <input type="date" class="form-control" id="establishmentDate">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="departmentStatus" class="form-label">Status <span class="text-danger">*</span></label>
                                                    <select class="form-select" id="departmentStatus" required>
                                                        <option value="">Select Status</option>
                                                        <option value="active" selected>Active</option>
                                                        <option value="inactive">Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="departmentDescription" class="form-label">Description</label>
                                            <textarea class="form-control" id="departmentDescription" rows="3" placeholder="Brief description of the department"></textarea>
                                        </div>
                                    </div>

                                    <!-- Leadership Section -->
                                    <div class="form-section">
                                        <h5>Leadership</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="hod" class="form-label">Head of Department</label>
                                                    <select class="form-select" id="hod">
                                                        <option value="">Select Faculty Member</option>
                                                        <option>Dr. Alan Turing</option>
                                                        <option>Prof. Albert Einstein</option>
                                                        <option>Dr. Nikola Tesla</option>
                                                    </select>
                                                    <div class="form-text">Leave blank if not assigned yet</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="assistantHod" class="form-label">Assistant HOD</label>
                                                    <select class="form-select" id="assistantHod">
                                                        <option value="">Select Faculty Member</option>
                                                        <option>Dr. Grace Hopper</option>
                                                        <option>Prof. Ada Lovelace</option>
                                                        <option>Dr. Katherine Johnson</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Contact Information -->
                                    <div class="form-section">
                                        <h5>Contact Information</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="departmentEmail" class="form-label">Email Address</label>
                                                    <input type="email" class="form-control" id="departmentEmail" placeholder="e.g. cs@university.edu">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="departmentPhone" class="form-label">Phone Number</label>
                                                    <input type="tel" class="form-control" id="departmentPhone" placeholder="e.g. +1 234 567 890">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="departmentLocation" class="form-label">Location/Building</label>
                                            <input type="text" class="form-control" id="departmentLocation" placeholder="e.g. Science Building, Room 205">
                                        </div>
                                    </div>

                                    <!-- Additional Settings -->
                                    <div class="form-section">
                                        <h5>Additional Settings</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="allowStudentRegistration" checked>
                                                        <label class="form-check-label" for="allowStudentRegistration">
                                                            Allow student registration
                                                        </label>
                                                    </div>
                                                    <div class="form-text">Students can register for courses in this department</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="showInPublicListings" checked>
                                                        <label class="form-check-label" for="showInPublicListings">
                                                            Show in public listings
                                                        </label>
                                                    </div>
                                                    <div class="form-text">Department will be visible on public websites</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-wrap gap-2 mt-3">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="ri-save-line align-middle me-1"></i> Save Department
                                        </button>
                                        <button type="reset" class="btn btn-secondary">
                                            <i class="ri-eraser-line align-middle me-1"></i> Reset Form
                                        </button>
                                        <a href="departments.php" class="btn btn-light">
                                            <i class="ri-close-line align-middle me-1"></i> Cancel
                                        </a>
                                    </div>
                                </form>
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

</body>
</html>