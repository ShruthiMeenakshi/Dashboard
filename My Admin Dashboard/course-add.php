<?php 
$page_title = "Add Course | College Management System";
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
                            <h4 class="mb-0">Add New Course</h4>
                        </div>
                    </div>
                </div>

                <!-- Course Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Course Information</h4>
                                <p class="card-title-desc">Fill all information below</p>

                                <form>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="courseCode">Course Code</label>
                                                <input id="courseCode" name="courseCode" type="text" class="form-control" placeholder="e.g. CS101">
                                            </div>
                                            <div class="mb-3">
                                                <label for="courseName">Course Name</label>
                                                <input id="courseName" name="courseName" type="text" class="form-control" placeholder="e.g. Introduction to Programming">
                                            </div>
                                            <div class="mb-3">
                                                <label for="department">Department</label>
                                                <select class="form-select" id="department" name="department">
                                                    <option>Select Department</option>
                                                    <option>Computer Science</option>
                                                    <option>Mathematics</option>
                                                    <option>Physics</option>
                                                    <option>Engineering</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <div class="mb-3">
                                                <label for="creditHours">Credit Hours</label>
                                                <input id="creditHours" name="creditHours" type="number" class="form-control" placeholder="e.g. 3">
                                            </div>
                                            <div class="mb-3">
                                                <label for="semester">Semester</label>
                                                <select class="form-select" id="semester" name="semester">
                                                    <option>Select Semester</option>
                                                    <option>1st Semester</option>
                                                    <option>2nd Semester</option>
                                                    <option>3rd Semester</option>
                                                    <option>4th Semester</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="description">Description</label>
                                                <textarea class="form-control" id="description" rows="3" placeholder="Course description..."></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Save Course
                                        </button>
                                        <button type="button" class="btn btn-secondary waves-effect">
                                            Cancel
                                        </button>
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