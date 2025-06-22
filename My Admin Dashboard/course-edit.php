<?php 
$page_title = "Edit Course | College Management System";
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
                            <h4 class="mb-0">Edit Course</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="courses.php">Courses</a></li>
                                    <li class="breadcrumb-item active">Edit Course</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Edit Course Form -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Course Information</h4>
                                <p class="card-title-desc">Update the course details below</p>

                                <form id="edit-course-form">
                                    <input type="hidden" id="course-id" value="<?php echo $course_id; ?>">
                                    
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="course-code" class="form-label">Course Code</label>
                                            <input type="text" class="form-control" id="course-code" placeholder="e.g., CS101" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="course-name" class="form-label">Course Name</label>
                                            <input type="text" class="form-control" id="course-name" placeholder="e.g., Introduction to Programming" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="department" class="form-label">Department</label>
                                            <select class="form-control" id="department" required>
                                                <option value="">Select Department</option>
                                                <option value="Computer Science">Computer Science</option>
                                                <option value="Mathematics">Mathematics</option>
                                                <option value="English">English</option>
                                                <option value="Business">Business Administration</option>
                                                <option value="Engineering">Engineering</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="credits" class="form-label">Credit Hours</label>
                                            <input type="number" class="form-control" id="credits" min="1" max="6" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="course-type" class="form-label">Course Type</label>
                                            <select class="form-control" id="course-type" required>
                                                <option value="core">Core</option>
                                                <option value="elective">Elective</option>
                                                <option value="general">General Education</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="semester" class="form-label">Semester Offered</label>
                                            <select class="form-control" id="semester" multiple>
                                                <option value="1">Semester 1</option>
                                                <option value="2">Semester 2</option>
                                                <option value="3">Semester 3</option>
                                                <option value="4">Semester 4</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="prerequisites" class="form-label">Prerequisites</label>
                                            <select class="form-control" id="prerequisites" multiple>
                                                <option value="CS100">CS100 - Computer Fundamentals</option>
                                                <option value="MATH101">MATH101 - Basic Mathematics</option>
                                                <option value="ENG100">ENG100 - English Basics</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-control" id="status" required>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                                <option value="archived">Archived</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">Course Description</label>
                                        <textarea class="form-control" id="description" rows="3" placeholder="Enter course description"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="learning-outcomes" class="form-label">Learning Outcomes</label>
                                        <textarea class="form-control" id="learning-outcomes" rows="3" placeholder="Enter learning outcomes (one per line)"></textarea>
                                    </div>

                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary me-2" id="save-changes-btn">
                                            <i class="mdi mdi-content-save me-1"></i> Save Changes
                                        </button>
                                        <a href="courses.php" class="btn btn-secondary">
                                            <i class="mdi mdi-close me-1"></i> Cancel
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course Syllabus Section -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Course Syllabus</h4>
                                <p class="card-title-desc">Manage the weekly topics and content</p>

                                <div id="syllabus-container">
                                    <!-- Syllabus items will be loaded here -->
                                    <div class="syllabus-item mb-3 p-3 border rounded">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <label class="form-label">Week</label>
                                                <input type="number" class="form-control week-number" min="1" value="1">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">Topic</label>
                                                <input type="text" class="form-control topic" placeholder="Enter topic title">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Description</label>
                                                <input type="text" class="form-control description" placeholder="Enter topic description">
                                            </div>
                                            <div class="col-md-2 d-flex align-items-end">
                                                <button class="btn btn-danger btn-sm remove-item">
                                                    <i class="mdi mdi-delete"></i> Remove
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button id="add-syllabus-item" class="btn btn-primary">
                                        <i class="mdi mdi-plus me-1"></i> Add Week
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

<!-- Additional Scripts for Course Edit Page -->
<script src="assets/libs/select2/js/select2.min.js"></script>

<script>
$(document).ready(function() {
    // Initialize select2
    $('select').select2();

    // Load course data if editing
    var courseId = $('#course-id').val();
    if (courseId > 0) {
        $.get('api/get-course.php?id=' + courseId, function(response) {
            if (response.success) {
                $('#course-code').val(response.data.code);
                $('#course-name').val(response.data.name);
                $('#department').val(response.data.department).trigger('change');
                $('#credits').val(response.data.credits);
                $('#course-type').val(response.data.type);
                $('#semester').val(response.data.semesters).trigger('change');
                $('#prerequisites').val(response.data.prerequisites).trigger('change');
                $('#status').val(response.data.status);
                $('#description').val(response.data.description);
                $('#learning-outcomes').val(response.data.learning_outcomes.join('\n'));
                
                // Load syllabus items
                $('#syllabus-container').empty();
                response.data.syllabus.forEach(function(item) {
                    addSyllabusItem(item.week, item.topic, item.description);
                });
            }
        });
    }

    // Add syllabus item
    $('#add-syllabus-item').click(function(e) {
        e.preventDefault();
        var lastWeek = $('.syllabus-item').length + 1;
        addSyllabusItem(lastWeek, '', '');
    });

    // Remove syllabus item
    $(document).on('click', '.remove-item', function(e) {
        e.preventDefault();
        $(this).closest('.syllabus-item').remove();
    });

    // Form submission
    $('#edit-course-form').submit(function(e) {
        e.preventDefault();
        
        // Collect form data
        var formData = {
            id: courseId,
            code: $('#course-code').val(),
            name: $('#course-name').val(),
            department: $('#department').val(),
            credits: $('#credits').val(),
            type: $('#course-type').val(),
            semesters: $('#semester').val(),
            prerequisites: $('#prerequisites').val(),
            status: $('#status').val(),
            description: $('#description').val(),
            learning_outcomes: $('#learning-outcomes').val().split('\n'),
            syllabus: []
        };
        
        // Collect syllabus items
        $('.syllabus-item').each(function() {
            formData.syllabus.push({
                week: $(this).find('.week-number').val(),
                topic: $(this).find('.topic').val(),
                description: $(this).find('.description').val()
            });
        });
        
        // Submit to server
        $.ajax({
            url: 'api/save-course.php',
            method: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(formData),
            success: function(response) {
                if (response.success) {
                    alert('Course saved successfully!');
                    window.location.href = 'courses.php';
                } else {
                    alert('Error: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                alert('Error: ' + error);
            }
        });
    });

    // Helper function to add syllabus item
    function addSyllabusItem(week, topic, description) {
        var itemHtml = `
            <div class="syllabus-item mb-3 p-3 border rounded">
                <div class="row">
                    <div class="col-md-1">
                        <label class="form-label">Week</label>
                        <input type="number" class="form-control week-number" min="1" value="${week}">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Topic</label>
                        <input type="text" class="form-control topic" placeholder="Enter topic title" value="${topic || ''}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Description</label>
                        <input type="text" class="form-control description" placeholder="Enter topic description" value="${description || ''}">
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button class="btn btn-danger btn-sm remove-item">
                            <i class="mdi mdi-delete"></i> Remove
                        </button>
                    </div>
                </div>
            </div>
        `;
        $('#syllabus-container').append(itemHtml);
    }
});
</script>

</body>
</html>