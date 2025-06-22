<?php 
$page_title = "Course Schedule | College Management System";
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
    
    <!-- Additional CSS for calendar/timetable -->
    <style>
        .time-slot {
            border: 1px solid #e9ecef;
            padding: 8px;
            height: 80px;
        }
        .time-header {
            background-color: #f8f9fa;
            font-weight: bold;
        }
        .scheduled-class {
            background-color: #e3f0ff;
            border-radius: 4px;
            padding: 5px;
            margin: 2px 0;
            font-size: 12px;
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
                            <h4 class="mb-0">Course Schedule</h4>
                            <div class="page-title-right">
                                <button class="btn btn-primary">Generate Schedule</button>
                                <button class="btn btn-success">Print Schedule</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Schedule Filters -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="departmentFilter">Department</label>
                                                <select class="form-select" id="departmentFilter">
                                                    <option value="">All Departments</option>
                                                    <option>Computer Science</option>
                                                    <option>Mathematics</option>
                                                    <option>Engineering</option>
                                                    <option>Business</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="semesterFilter">Semester</label>
                                                <select class="form-select" id="semesterFilter">
                                                    <option value="">All Semesters</option>
                                                    <option>Spring 2023</option>
                                                    <option>Fall 2023</option>
                                                    <option>Summer 2023</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="courseFilter">Course</label>
                                                <select class="form-select" id="courseFilter">
                                                    <option value="">All Courses</option>
                                                    <option>CS101 - Introduction to Programming</option>
                                                    <option>MATH201 - Calculus</option>
                                                    <option>ENG301 - Advanced Engineering</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label for="instructorFilter">Instructor</label>
                                                <select class="form-select" id="instructorFilter">
                                                    <option value="">All Instructors</option>
                                                    <option>Dr. Smith</option>
                                                    <option>Prof. Johnson</option>
                                                    <option>Dr. Williams</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary me-2">Filter</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Schedule Timetable -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Weekly Schedule</h4>
                                
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="time-header">Time/Day</th>
                                                <th class="text-center">Monday</th>
                                                <th class="text-center">Tuesday</th>
                                                <th class="text-center">Wednesday</th>
                                                <th class="text-center">Thursday</th>
                                                <th class="text-center">Friday</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Morning Sessions -->
                                            <tr>
                                                <td class="time-header">8:00 - 9:30</td>
                                                <td class="time-slot">
                                                    <div class="scheduled-class">
                                                        CS101 - Intro to Programming<br>
                                                        Room: A101<br>
                                                        Dr. Smith
                                                    </div>
                                                </td>
                                                <td class="time-slot"></td>
                                                <td class="time-slot">
                                                    <div class="scheduled-class">
                                                        MATH201 - Calculus<br>
                                                        Room: B205<br>
                                                        Prof. Johnson
                                                    </div>
                                                </td>
                                                <td class="time-slot"></td>
                                                <td class="time-slot">
                                                    <div class="scheduled-class">
                                                        CS101 - Intro to Programming<br>
                                                        Room: A101<br>
                                                        Dr. Smith
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- More time slots... -->
                                            <tr>
                                                <td class="time-header">9:30 - 11:00</td>
                                                <td class="time-slot"></td>
                                                <td class="time-slot">
                                                    <div class="scheduled-class">
                                                        ENG301 - Advanced Engineering<br>
                                                        Room: C304<br>
                                                        Dr. Williams
                                                    </div>
                                                </td>
                                                <td class="time-slot"></td>
                                                <td class="time-slot">
                                                    <div class="scheduled-class">
                                                        MATH201 - Calculus<br>
                                                        Room: B205<br>
                                                        Prof. Johnson
                                                    </div>
                                                </td>
                                                <td class="time-slot"></td>
                                            </tr>
                                            <!-- Afternoon Sessions -->
                                            <tr>
                                                <td class="time-header">11:00 - 12:30</td>
                                                <td class="time-slot">
                                                    <div class="scheduled-class">
                                                        BUS101 - Business Fundamentals<br>
                                                        Room: D102<br>
                                                        Prof. Brown
                                                    </div>
                                                </td>
                                                <td class="time-slot"></td>
                                                <td class="time-slot"></td>
                                                <td class="time-slot">
                                                    <div class="scheduled-class">
                                                        CS101 - Intro to Programming (Lab)<br>
                                                        Room: A105<br>
                                                        TA: M. Davis
                                                    </div>
                                                </td>
                                                <td class="time-slot"></td>
                                            </tr>
                                            <!-- More time slots... -->
                                        </tbody>
                                    </table>
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

</body>
</html>