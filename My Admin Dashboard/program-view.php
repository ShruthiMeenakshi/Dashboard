<?php
// Start session and check authentication
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Database connection
require_once 'includes/db_config.php';

// Get program ID from URL
$program_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch program details
$program = [];
$courses = [];
$requirements = [];
$departments = [];

try {
    // Get program basic info
    $stmt = $pdo->prepare("SELECT p.*, d.department_name 
                          FROM programs p 
                          JOIN departments d ON p.department_id = d.department_id 
                          WHERE p.program_id = ?");
    $stmt->execute([$program_id]);
    $program = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$program) {
        header("Location: programs.php");
        exit();
    }

    // Get program courses
    $stmt = $pdo->prepare("SELECT c.*, pc.category, pc.semester 
                          FROM program_courses pc
                          JOIN courses c ON pc.course_id = c.course_id
                          WHERE pc.program_id = ?
                          ORDER BY pc.semester, pc.category");
    $stmt->execute([$program_id]);
    $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Get departments for dropdown
    $stmt = $pdo->prepare("SELECT * FROM departments ORDER BY department_name");
    $stmt->execute();
    $departments = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // Log error and show generic message
    error_log("Database error: " . $e->getMessage());
    $error = "Error loading program information";
}

$page_title = $program['program_name'] . " | College Management System";
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
                            <h4 class="mb-0"><?php echo htmlspecialchars($program['program_name']); ?></h4>
                            <div class="page-title-right">
                                <a href="programs.php" class="btn btn-secondary">
                                    <i class="mdi mdi-arrow-left me-1"></i> Back to Programs
                                </a>
                                <a href="program-edit.php?id=<?php echo $program_id; ?>" class="btn btn-primary ms-2">
                                    <i class="mdi mdi-pencil-outline me-1"></i> Edit Program
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if (isset($error)): ?>
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Program Info Summary -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <p class="text-muted mb-1">Program Code</p>
                                            <h5 class="font-size-16"><?php echo htmlspecialchars($program['program_code']); ?></h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <p class="text-muted mb-1">Department</p>
                                            <h5 class="font-size-16"><?php echo htmlspecialchars($program['department_name']); ?></h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <p class="text-muted mb-1">Degree Level</p>
                                            <h5 class="font-size-16"><?php echo htmlspecialchars(ucfirst($program['degree_level'])); ?></h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <p class="text-muted mb-1">Status</p>
                                            <h5 class="font-size-16">
                                                <span class="badge bg-<?php echo $program['status'] == 'active' ? 'success' : 'warning'; ?>">
                                                    <?php echo htmlspecialchars(ucfirst($program['status'])); ?>
                                                </span>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <p class="text-muted mb-1">Duration</p>
                                            <h5 class="font-size-16"><?php echo htmlspecialchars($program['duration']); ?> Years</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <p class="text-muted mb-1">Total Credits</p>
                                            <h5 class="font-size-16"><?php echo htmlspecialchars($program['total_credits']); ?></h5>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <p class="text-muted mb-1">Accreditation</p>
                                            <h5 class="font-size-16">
                                                <?php if ($program['accreditation_body']): ?>
                                                    <?php echo htmlspecialchars($program['accreditation_body']); ?>
                                                    (Expires: <?php echo htmlspecialchars($program['accreditation_expiry']); ?>)
                                                <?php else: ?>
                                                    Not Accredited
                                                <?php endif; ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <p class="text-muted mb-1">Program Description</p>
                                    <p><?php echo nl2br(htmlspecialchars($program['description'])); ?></p>
                                </div>
                                
                                <?php if ($program['learning_outcomes']): ?>
                                <div class="mb-3">
                                    <p class="text-muted mb-1">Learning Outcomes</p>
                                    <ul>
                                        <?php 
                                        $outcomes = explode("\n", $program['learning_outcomes']);
                                        foreach ($outcomes as $outcome): 
                                            if (trim($outcome)): ?>
                                                <li><?php echo htmlspecialchars(trim($outcome)); ?></li>
                                            <?php endif;
                                        endforeach; 
                                        ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Program Structure -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Program Structure</h4>
                                
                                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#semester-view" role="tab">
                                            <i class="mdi mdi-calendar-month-outline me-1"></i> Semester View
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#category-view" role="tab">
                                            <i class="mdi mdi-format-list-bulleted me-1"></i> Category View
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#requirements" role="tab">
                                            <i class="mdi mdi-checkbox-marked-circle-outline me-1"></i> Requirements
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content p-3 border border-top-0">
                                    <!-- Semester View Tab -->
                                    <div class="tab-pane active" id="semester-view" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Semester</th>
                                                        <th>Courses</th>
                                                        <th>Credits</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $semesters = [];
                                                    foreach ($courses as $course) {
                                                        $sem = $course['semester'];
                                                        if (!isset($semesters[$sem])) {
                                                            $semesters[$sem] = [
                                                                'courses' => [],
                                                                'total_credits' => 0
                                                            ];
                                                        }
                                                        $semesters[$sem]['courses'][] = $course;
                                                        $semesters[$sem]['total_credits'] += $course['credits'];
                                                    }
                                                    
                                                    foreach ($semesters as $semester => $data): ?>
                                                    <tr>
                                                        <td><?php echo htmlspecialchars($semester); ?></td>
                                                        <td>
                                                            <?php foreach ($data['courses'] as $course): ?>
                                                                <span class="badge bg-<?php 
                                                                    echo $course['category'] == 'core' ? 'primary' : 
                                                                        ($course['category'] == 'elective' ? 'success' : 'info'); 
                                                                ?> me-1 mb-1">
                                                                    <?php echo htmlspecialchars($course['course_code'] . ' - ' . $course['course_name']); ?>
                                                                    (<?php echo $course['credits']; ?>)
                                                                </span>
                                                            <?php endforeach; ?>
                                                        </td>
                                                        <td><?php echo $data['total_credits']; ?></td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Category View Tab -->
                                    <div class="tab-pane" id="category-view" role="tabpanel">
                                        <div class="table-responsive">
                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Category</th>
                                                        <th>Courses</th>
                                                        <th>Total Credits</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $categories = [];
                                                    foreach ($courses as $course) {
                                                        $cat = $course['category'];
                                                        if (!isset($categories[$cat])) {
                                                            $categories[$cat] = [
                                                                'courses' => [],
                                                                'total_credits' => 0
                                                            ];
                                                        }
                                                        $categories[$cat]['courses'][] = $course;
                                                        $categories[$cat]['total_credits'] += $course['credits'];
                                                    }
                                                    
                                                    foreach ($categories as $category => $data): ?>
                                                    <tr>
                                                        <td><?php echo htmlspecialchars(ucfirst($category)); ?></td>
                                                        <td>
                                                            <?php foreach ($data['courses'] as $course): ?>
                                                                <span class="badge bg-light text-dark me-1 mb-1">
                                                                    <?php echo htmlspecialchars($course['course_code'] . ' - ' . $course['course_name']); ?>
                                                                    (<?php echo $course['credits']; ?>)
                                                                </span>
                                                            <?php endforeach; ?>
                                                        </td>
                                                        <td><?php echo $data['total_credits']; ?></td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <!-- Requirements Tab -->
                                    <div class="tab-pane" id="requirements" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Graduation Requirements</h5>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                Minimum GPA
                                                                <span class="badge bg-primary rounded-pill"><?php echo htmlspecialchars($program['min_gpa']); ?></span>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                                Total Credits Required
                                                                <span class="badge bg-primary rounded-pill"><?php echo htmlspecialchars($program['total_credits']); ?></span>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="thesis-requirement" <?php echo $program['thesis_required'] ? 'checked' : ''; ?> disabled>
                                                                    <label class="form-check-label" for="thesis-requirement">
                                                                        Thesis Required
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="internship-requirement" <?php echo $program['internship_required'] ? 'checked' : ''; ?> disabled>
                                                                    <label class="form-check-label" for="internship-requirement">
                                                                        Internship Required
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Additional Requirements</h5>
                                                        <?php if ($program['additional_requirements']): ?>
                                                            <p><?php echo nl2br(htmlspecialchars($program['additional_requirements'])); ?></p>
                                                        <?php else: ?>
                                                            <p class="text-muted">No additional requirements specified</p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                <h4 class="card-title mb-4">Current Students</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Student ID</th>
                                                <th>Name</th>
                                                <th>Year</th>
                                                <th>GPA</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Data would come from database -->
                                            <tr>
                                                <td>S1001</td>
                                                <td>John Doe</td>
                                                <td>3</td>
                                                <td>3.45</td>
                                            </tr>
                                            <!-- More students... -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="students.php?program=<?php echo $program_id; ?>" class="btn btn-sm btn-outline-primary">
                                        View All Students (<?php echo rand(50, 200); ?>)
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Faculty Members</h4>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Role</th>
                                                <th>Courses</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Data would come from database -->
                                            <tr>
                                                <td>Dr. Smith</td>
                                                <td>Program Coordinator</td>
                                                <td>CS101, CS201</td>
                                            </tr>
                                            <!-- More faculty... -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="faculty.php?program=<?php echo $program_id; ?>" class="btn btn-sm btn-outline-primary">
                                        View All Faculty (<?php echo rand(5, 15); ?>)
                                    </a>
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

<!-- Additional Scripts for Program View Page -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize DataTables if needed
        $('.table').DataTable({
            responsive: true,
            searching: false,
            paging: false,
            info: false
        });
    });
</script>

</body>
</html>