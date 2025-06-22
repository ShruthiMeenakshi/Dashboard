<?php 
$page_title = "Add New Program | College Management System";
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
                            <h4 class="mb-0">Add New Academic Program</h4>
                            <div class="page-title-right">
                                <a href="programs.php" class="btn btn-secondary">
                                    <i class="mdi mdi-arrow-left me-1"></i> Back to Programs
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Section -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Program Information</h4>
                                <p class="card-title-desc">Fill all information below</p>

                                <form id="add-program-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="program-code" class="form-label">Program Code</label>
                                                <input type="text" class="form-control" id="program-code" required 
                                                    placeholder="Enter program code (e.g. CS-BS)">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="program-name" class="form-label">Program Name</label>
                                                <input type="text" class="form-control" id="program-name" required 
                                                    placeholder="Enter program name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Department</label>
                                                <select class="form-control select2" required>
                                                    <option value="">Select Department</option>
                                                    <option value="1">Computer Science</option>
                                                    <option value="2">Business Administration</option>
                                                    <option value="3">Engineering</option>
                                                    <option value="4">Arts & Humanities</option>
                                                    <option value="5">Health Sciences</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Degree Level</label>
                                                <select class="form-control select2" required>
                                                    <option value="">Select Degree Level</option>
                                                    <option value="undergraduate">Undergraduate</option>
                                                    <option value="graduate">Graduate</option>
                                                    <option value="certificate">Certificate</option>
                                                    <option value="diploma">Diploma</option>
                                                    <option value="phd">PhD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="duration" class="form-label">Duration (Years)</label>
                                                <input type="number" class="form-control" id="duration" required 
                                                    min="1" max="6" value="4">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="total-credits" class="form-label">Total Credits</label>
                                                <input type="number" class="form-control" id="total-credits" required 
                                                    min="30" max="200" value="120">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Program Status</label>
                                                <select class="form-control select2" required>
                                                    <option value="active" selected>Active</option>
                                                    <option value="inactive">Inactive</option>
                                                    <option value="development">In Development</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="program-description" class="form-label">Program Description</label>
                                        <textarea class="form-control" id="program-description" rows="3" 
                                            placeholder="Enter detailed program description"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="learning-outcomes" class="form-label">Learning Outcomes</label>
                                        <textarea class="form-control" id="learning-outcomes" rows="3" 
                                            placeholder="Enter program learning outcomes (one per line)"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Program Requirements</label>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="thesis-required">
                                            <label class="form-check-label" for="thesis-required">
                                                Thesis Required
                                            </label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" id="internship-required">
                                            <label class="form-check-label" for="internship-required">
                                                Internship Required
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="foreign-language">
                                            <label class="form-check-label" for="foreign-language">
                                                Foreign Language Requirement
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Accreditation Status</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" 
                                                        placeholder="Accreditation Body (if any)">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" 
                                                        placeholder="Accreditation Expiry Date">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary me-2">
                                            <i class="mdi mdi-content-save me-1"></i> Save Program
                                        </button>
                                        <button type="reset" class="btn btn-light">
                                            <i class="mdi mdi-close me-1"></i> Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Curriculum Structure Section -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Curriculum Structure</h4>
                                <p class="card-title-desc">Define the courses required for this program</p>

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 25%;">Course Category</th>
                                                <th style="width: 20%;">Credits Required</th>
                                                <th style="width: 50%;">Courses</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Core Courses</td>
                                                <td><input type="number" class="form-control" value="60"></td>
                                                <td>
                                                    <select class="select2 form-control select2-multiple" multiple="multiple" 
                                                        data-placeholder="Choose courses...">
                                                        <option value="CS101">CS101 - Introduction to Programming</option>
                                                        <option value="CS201">CS201 - Data Structures</option>
                                                        <option value="CS301">CS301 - Algorithms</option>
                                                        <option value="CS401">CS401 - Software Engineering</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Electives</td>
                                                <td><input type="number" class="form-control" value="30"></td>
                                                <td>
                                                    <select class="select2 form-control select2-multiple" multiple="multiple" 
                                                        data-placeholder="Choose courses...">
                                                        <option value="CS202">CS202 - Web Development</option>
                                                        <option value="CS302">CS302 - Mobile App Development</option>
                                                        <option value="CS402">CS402 - Artificial Intelligence</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>General Education</td>
                                                <td><input type="number" class="form-control" value="20"></td>
                                                <td>
                                                    <select class="select2 form-control select2-multiple" multiple="multiple" 
                                                        data-placeholder="Choose courses...">
                                                        <option value="ENG101">ENG101 - English Composition</option>
                                                        <option value="MATH101">MATH101 - College Mathematics</option>
                                                        <option value="HIST101">HIST101 - World History</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="mt-3 text-end">
                                    <button class="btn btn-sm btn-outline-primary">
                                        <i class="mdi mdi-plus me-1"></i> Add Another Category
                                    </button>
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

<!-- Additional Scripts for Program Add Page -->
<script src="assets/libs/select2/js/select2.min.js"></script>
<script src="assets/libs/parsleyjs/parsley.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize Select2
        $('.select2').select2();
        
        // Initialize multiple select
        $('.select2-multiple').select2();

        // Form validation
        $('#add-program-form').parsley();

        // Form submission
        $('#add-program-form').on('submit', function(e) {
            e.preventDefault();
            
            if ($(this).parsley().isValid()) {
                // Simulate form submission
                Swal.fire({
                    title: 'Success!',
                    text: 'Program has been added successfully',
                    icon: 'success',
                    confirmButtonColor: '#3b5de7',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = 'programs.php';
                    }
                });
            }
        });
    });
</script>

</body>
</html>