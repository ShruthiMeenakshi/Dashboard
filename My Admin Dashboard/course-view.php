<?php 
$page_title = "View Course | College Management System";
$course_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
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
                            <h4 class="mb-0">View Course Details</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="courses.php">Courses</a></li>
                                    <li class="breadcrumb-item active">View Course</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course Details -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="card-title mb-0">Course Information</h4>
                                    <div>
                                        <a href="course-edit.php?id=<?php echo $course_id; ?>" class="btn btn-primary me-2">
                                            <i class="mdi mdi-pencil-outline me-1"></i> Edit
                                        </a>
                                        <a href="courses.php" class="btn btn-secondary">
                                            <i class="mdi mdi-arrow-left me-1"></i> Back to List
                                        </a>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <h5 class="font-size-14">Course Code</h5>
                                            <p id="course-code" class="text-muted mb-0">CS101</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <h5 class="font-size-14">Course Name</h5>
                                            <p id="course-name" class="text-muted mb-0">Introduction to Programming</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <h5 class="font-size-14">Department</h5>
                                            <p id="department" class="text-muted mb-0">Computer Science</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <h5 class="font-size-14">Credit Hours</h5>
                                            <p id="credits" class="text-muted mb-0">3</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <h5 class="font-size-14">Course Type</h5>
                                            <p id="course-type" class="text-muted mb-0">
                                                <span class="badge bg-primary">Core</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <h5 class="font-size-14">Semesters Offered</h5>
                                            <p id="semester" class="text-muted mb-0">1, 2</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <h5 class="font-size-14">Prerequisites</h5>
                                            <p id="prerequisites" class="text-muted mb-0">MATH101 - Basic Mathematics</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <h5 class="font-size-14">Status</h5>
                                            <p id="status" class="text-muted mb-0">
                                                <span class="badge bg-success">Active</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <h5 class="font-size-14">Description</h5>
                                    <p id="description" class="text-muted mb-0">
                                        This course introduces fundamental programming concepts including variables, data types, control structures, functions, and basic algorithms using a modern programming language.
                                    </p>
                                </div>

                                <div class="mb-3">
                                    <h5 class="font-size-14">Learning Outcomes</h5>
                                    <ul id="learning-outcomes" class="text-muted">
                                        <li>Understand basic programming concepts</li>
                                        <li>Write simple programs using a programming language</li>
                                        <li>Debug and test programs</li>
                                        <li>Develop problem-solving skills through programming</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Syllabus Section -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Course Syllabus</h4>

                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th style="width: 10%;">Week</th>
                                                <th style="width: 30%;">Topic</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody id="syllabus-container">
                                            <tr>
                                                <td>1</td>
                                                <td>Introduction to Programming</td>
                                                <td>Overview of programming concepts</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Variables and Data Types</td>
                                                <td>Understanding variables and basic data types</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Control Structures</td>
                                                <td>Conditionals and loops</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Related Information -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Assigned Faculty</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Semester</th>
                                                <th>Section</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Dr. John Smith</td>
                                                <td>Fall 2023</td>
                                                <td>A, B</td>
                                            </tr>
                                            <tr>
                                                <td>Prof. Sarah Johnson</td>
                                                <td>Spring 2024</td>
                                                <td>C</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Enrolled Students</h4>
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <p class="mb-0">Total Students: <strong>45</strong></p>
                                    <a href="#" class="btn btn-sm btn-primary">View All</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Semester</th>
                                                <th>Students</th>
                                                <th>Avg. Grade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Fall 2023</td>
                                                <td>25</td>
                                                <td>B+</td>
                                            </tr>
                                            <tr>
                                                <td>Spring 2024</td>
                                                <td>20</td>
                                                <td>A-</td>
                                            </tr>
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

<script>
    $(document).ready(function() {
        // Load course data if viewing
        var courseId = <?php echo $course_id; ?>;
        if (courseId > 0) {
            // In a real application, you would fetch the course data from the server
            // Here's a mock implementation:
            $.ajax({
                url: 'api/get-course.php?id=' + courseId,
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // Populate view with course data
                        $('#course-code').text(response.data.code);
                        $('#course-name').text(response.data.name);
                        $('#department').text(response.data.department_name);
                        $('#credits').text(response.data.credits);
                        
                        // Set course type badge
                        var typeBadge = '';
                        if (response.data.type === 'core') {
                            typeBadge = '<span class="badge bg-primary">Core</span>';
                        } else if (response.data.type === 'elective') {
                            typeBadge = '<span class="badge bg-success">Elective</span>';
                        } else {
                            typeBadge = '<span class="badge bg-info">General</span>';
                        }
                        $('#course-type').html(typeBadge);
                        
                        // Set semesters
                        $('#semester').text(response.data.semesters.join(', '));
                        
                        // Set prerequisites
                        $('#prerequisites').text(response.data.prerequisites.join(', '));
                        
                        // Set status badge
                        var statusBadge = '';
                        if (response.data.status === 'active') {
                            statusBadge = '<span class="badge bg-success">Active</span>';
                        } else if (response.data.status === 'inactive') {
                            statusBadge = '<span class="badge bg-warning">Inactive</span>';
                        } else {
                            statusBadge = '<span class="badge bg-secondary">Archived</span>';
                        }
                        $('#status').html(statusBadge);
                        
                        // Set description and learning outcomes
                        $('#description').text(response.data.description);
                        
                        // Clear and add learning outcomes
                        $('#learning-outcomes').empty();
                        response.data.learning_outcomes.forEach(function(outcome) {
                            $('#learning-outcomes').append('<li>' + outcome + '</li>');
                        });
                        
                        // Clear and add syllabus items
                        $('#syllabus-container').empty();
                        response.data.syllabus.forEach(function(item) {
                            $('#syllabus-container').append(`
                                <tr>
                                    <td>${item.week}</td>
                                    <td>${item.topic}</td>
                                    <td>${item.description}</td>
                                </tr>
                            `);
                        });
                    } else {
                        toastr.error('Failed to load course data: ' + response.message);
                    }
                },
                error: function() {
                    toastr.error('Error loading course data');
                }
            });
            
            // Mock data for demonstration
            setTimeout(function() {
                $('#course-code').text('CS101');
                $('#course-name').text('Introduction to Programming');
                $('#department').text('Computer Science');
                $('#credits').text('3');
                $('#course-type').html('<span class="badge bg-primary">Core</span>');
                $('#semester').text('1, 2');
                $('#prerequisites').text('MATH101 - Basic Mathematics');
                $('#status').html('<span class="badge bg-success">Active</span>');
                $('#description').text('This course introduces fundamental programming concepts including variables, data types, control structures, functions, and basic algorithms using a modern programming language.');
                
                // Clear and add learning outcomes
                $('#learning-outcomes').empty();
                [
                    'Understand basic programming concepts',
                    'Write simple programs using a programming language',
                    'Debug and test programs',
                    'Develop problem-solving skills through programming'
                ].forEach(function(outcome) {
                    $('#learning-outcomes').append('<li>' + outcome + '</li>');
                });
                
                // Clear and add syllabus items
                $('#syllabus-container').empty();
                [
                    { week: 1, topic: 'Introduction to Programming', description: 'Overview of programming concepts' },
                    { week: 2, topic: 'Variables and Data Types', description: 'Understanding variables and basic data types' },
                    { week: 3, topic: 'Control Structures', description: 'Conditionals and loops' }
                ].forEach(function(item) {
                    $('#syllabus-container').append(`
                        <tr>
                            <td>${item.week}</td>
                            <td>${item.topic}</td>
                            <td>${item.description}</td>
                        </tr>
                    `);
                });
            }, 500);
        }
    });
</script>

</body>
</html>