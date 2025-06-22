<?php 
$page_title = "Scholarships | College Management System";
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
    
    <!-- Custom CSS for enhanced UI -->
    <style>
        :root {
            --primary-color: #3a7bd5;
            --secondary-color: #00d2ff;
            --accent-color: #6c5ce7;
            --light-bg: #f8f9fa;
            --card-shadow: 0 4px 24px 0 rgba(34, 41, 47, 0.1);
        }
        
        body {
            background-color: #f5f7fb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .main-content {
            padding: 20px;
            background-color: #f5f7fb;
        }
        
        .page-title-box {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            padding: 20px;
            border-radius: 8px;
            color: white;
            box-shadow: var(--card-shadow);
            margin-bottom: 24px;
        }
        
        .page-title-box h4 {
            font-weight: 600;
            margin: 0;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 24px;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(34, 41, 47, 0.15);
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .card-title {
            font-weight: 600;
            color: #2c304d;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
        }
        
        .card-title:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
            border-radius: 3px;
        }
        
        /* Scholarship-specific styles */
        .scholarship-card {
            text-align: center;
            padding: 20px 0;
            border-radius: 8px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .scholarship-card h3 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .scholarship-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background: white;
        }
        
        .scholarship-card:nth-child(1) {
            background: linear-gradient(135deg, #4b6cb7, #182848);
        }
        
        .scholarship-card:nth-child(2) {
            background: linear-gradient(135deg, #8e2de2, #4a00e0);
        }
        
        .scholarship-card:nth-child(3) {
            background: linear-gradient(135deg, #11998e, #38ef7d);
        }
        
        .scholarship-card:nth-child(4) {
            background: linear-gradient(135deg, #f46b45, #eea849);
        }
        
        .scholarship-table th {
            background-color: #f8f9fa;
            font-weight: 600;
        }
        
        .scholarship-table tbody tr {
            transition: all 0.2s ease;
        }
        
        .scholarship-table tbody tr:hover {
            background-color: rgba(58, 123, 213, 0.05);
        }
        
        .status-active {
            background-color: #d4edda;
            color: #155724;
        }
        
        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }
        
        .status-closed {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        .badge-merit {
            background-color: #d1ecf1;
            color: #0c5460;
        }
        
        .badge-need {
            background-color: #e2e3e5;
            color: #383d41;
        }
        
        .badge-athletic {
            background-color: #cce5ff;
            color: #004085;
        }
        
        .filter-section {
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: var(--card-shadow);
        }
        
        .scholarship-badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-right: 5px;
            margin-bottom: 5px;
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
                            <h4 class="mb-0">Scholarship Management</h4>
                            <div class="d-flex align-items-center">
                                <span class="me-2">Academic Year: 2023-2024</span>
                                <i class="fas fa-award fs-4 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Scholarship Stats Cards -->
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card scholarship-card">
                            <div class="card-body">
                                <i class="fas fa-trophy fs-4 mb-3"></i>
                                <h3>24</h3>
                                <p>Active Scholarships</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card scholarship-card">
                            <div class="card-body">
                                <i class="fas fa-user-graduate fs-4 mb-3"></i>
                                <h3>142</h3>
                                <p>Awarded Students</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card scholarship-card">
                            <div class="card-body">
                                <i class="fas fa-dollar-sign fs-4 mb-3"></i>
                                <h3>$245,800</h3>
                                <p>Total Awarded</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card scholarship-card">
                            <div class="card-body">
                                <i class="fas fa-clock fs-4 mb-3"></i>
                                <h3>8</h3>
                                <p>Pending Applications</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- Filter Section -->
                <div class="filter-section">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Scholarship Type</label>
                                <select class="form-select">
                                    <option>All Types</option>
                                    <option selected>Merit-based</option>
                                    <option>Need-based</option>
                                    <option>Athletic</option>
                                    <option>Departmental</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select">
                                    <option>All Statuses</option>
                                    <option selected>Active</option>
                                    <option>Pending</option>
                                    <option>Closed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Department</label>
                                <select class="form-select">
                                    <option>All Departments</option>
                                    <option selected>Computer Science</option>
                                    <option>Electrical Engineering</option>
                                    <option>Business Administration</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <button class="btn btn-primary w-100">Apply Filters</button>
                        </div>
                    </div>
                </div>

                <!-- Main content area -->
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="card-title mb-0">Scholarship Programs</h4>
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addScholarshipModal">
                                        <i class="fas fa-plus me-1"></i> Add Scholarship
                                    </button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table scholarship-table table-hover table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>Scholarship ID</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Amount</th>
                                                <th>Deadline</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#SCH2023001</td>
                                                <td>
                                                    <strong>Dean's Merit Scholarship</strong>
                                                    <div class="text-muted small">Computer Science</div>
                                                </td>
                                                <td>
                                                    <span class="scholarship-badge badge-merit">Merit-based</span>
                                                </td>
                                                <td>$5,000/year</td>
                                                <td>15 Aug 2023</td>
                                                <td><span class="badge status-active">Active</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1" title="View Details">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-secondary" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#SCH2023002</td>
                                                <td>
                                                    <strong>Financial Need Grant</strong>
                                                    <div class="text-muted small">All Departments</div>
                                                </td>
                                                <td>
                                                    <span class="scholarship-badge badge-need">Need-based</span>
                                                </td>
                                                <td>Full Tuition</td>
                                                <td>10 Aug 2023</td>
                                                <td><span class="badge status-active">Active</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1" title="View Details">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-secondary" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#SCH2023003</td>
                                                <td>
                                                    <strong>Varsity Sports Scholarship</strong>
                                                    <div class="text-muted small">Athletics</div>
                                                </td>
                                                <td>
                                                    <span class="scholarship-badge badge-athletic">Athletic</span>
                                                </td>
                                                <td>$3,500/year</td>
                                                <td>05 Sep 2023</td>
                                                <td><span class="badge status-pending">Pending</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1" title="View Details">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-secondary" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#SCH2023004</td>
                                                <td>
                                                    <strong>Engineering Excellence Award</strong>
                                                    <div class="text-muted small">Engineering</div>
                                                </td>
                                                <td>
                                                    <span class="scholarship-badge badge-merit">Merit-based</span>
                                                </td>
                                                <td>$2,000/semester</td>
                                                <td>20 Aug 2023</td>
                                                <td><span class="badge status-closed">Closed</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1" title="View Details">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-secondary" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Recent Awards</h4>
                                <div class="pe-3" data-simplebar style="max-height: 400px;">
                                    <div class="d-flex mb-4">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-light text-primary">
                                                    JD
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="font-size-14 mb-1">John Doe</h5>
                                            <p class="text-muted mb-1">Dean's Merit Scholarship</p>
                                            <small class="text-success"><i class="fas fa-dollar-sign me-1"></i> $5,000/year</small>
                                        </div>
                                        <div>
                                            <span class="badge bg-success">Approved</span>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-4">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-light text-danger">
                                                    AS
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="font-size-14 mb-1">Alice Smith</h5>
                                            <p class="text-muted mb-1">Financial Need Grant</p>
                                            <small class="text-success"><i class="fas fa-dollar-sign me-1"></i> Full Tuition</small>
                                        </div>
                                        <div>
                                            <span class="badge bg-success">Approved</span>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-4">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-light text-info">
                                                    RJ
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="font-size-14 mb-1">Robert Johnson</h5>
                                            <p class="text-muted mb-1">Varsity Sports Scholarship</p>
                                            <small class="text-warning"><i class="fas fa-hourglass-half me-1"></i> Under Review</small>
                                        </div>
                                        <div>
                                            <span class="badge bg-warning">Pending</span>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-light text-success">
                                                    MJ
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="font-size-14 mb-1">Mary Johnson</h5>
                                            <p class="text-muted mb-1">Engineering Excellence Award</p>
                                            <small class="text-danger"><i class="fas fa-times-circle me-1"></i> Not Selected</small>
                                        </div>
                                        <div>
                                            <span class="badge bg-danger">Rejected</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Upcoming Deadlines</h4>
                                <div class="pe-3" data-simplebar style="max-height: 200px;">
                                    <div class="mb-3">
                                        <h5 class="font-size-14 mb-1">Dean's Merit Scholarship</h5>
                                        <p class="text-muted mb-1">Computer Science</p>
                                        <small class="text-primary"><i class="far fa-clock me-1"></i> Deadline: Aug 15, 2023</small>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="font-size-14 mb-1">Financial Need Grant</h5>
                                        <p class="text-muted mb-1">All Departments</p>
                                        <small class="text-primary"><i class="far fa-clock me-1"></i> Deadline: Aug 10, 2023</small>
                                    </div>
                                    <div>
                                        <h5 class="font-size-14 mb-1">Alumni Scholarship</h5>
                                        <p class="text-muted mb-1">Business Administration</p>
                                        <small class="text-primary"><i class="far fa-clock me-1"></i> Deadline: Sep 1, 2023</small>
                                    </div>
                                </div>
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

<!-- Add Scholarship Modal -->
<div class="modal fade" id="addScholarshipModal" tabindex="-1" aria-labelledby="addScholarshipModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addScholarshipModalLabel">Add New Scholarship</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="scholarshipName" class="form-label">Scholarship Name</label>
                        <input type="text" class="form-control" id="scholarshipName" placeholder="Enter scholarship name">
                    </div>
                    <div class="mb-3">
                        <label for="scholarshipType" class="form-label">Type</label>
                        <select class="form-select" id="scholarshipType">
                            <option selected>Select Type</option>
                            <option>Merit-based</option>
                            <option>Need-based</option>
                            <option>Athletic</option>
                            <option>Departmental</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="scholarshipDepartment" class="form-label">Department</label>
                        <select class="form-select" id="scholarshipDepartment">
                            <option selected>All Departments</option>
                            <option>Computer Science</option>
                            <option>Electrical Engineering</option>
                            <option>Business Administration</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="scholarshipAmount" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="scholarshipAmount" placeholder="Enter amount or coverage">
                    </div>
                    <div class="mb-3">
                        <label for="applicationDeadline" class="form-label">Application Deadline</label>
                        <input type="date" class="form-control" id="applicationDeadline">
                    </div>
                    <div class="mb-3">
                        <label for="scholarshipDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="scholarshipDescription" rows="3" placeholder="Enter scholarship description and requirements"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save Scholarship</button>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/rightbar.php'; ?>
<?php include 'includes/script.php'; ?>

<!-- Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>