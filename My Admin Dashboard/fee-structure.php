<?php 
$page_title = "Fee Structure | College Management System";
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
        
        /* Fee-specific styles */
        .fee-card {
            text-align: center;
            padding: 20px 0;
            border-radius: 8px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .fee-card h3 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .fee-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background: white;
        }
        
        .fee-card:nth-child(1) {
            background: linear-gradient(135deg, #4b6cb7, #182848);
        }
        
        .fee-card:nth-child(2) {
            background: linear-gradient(135deg, #8e2de2, #4a00e0);
        }
        
        .fee-card:nth-child(3) {
            background: linear-gradient(135deg, #11998e, #38ef7d);
        }
        
        .fee-card:nth-child(4) {
            background: linear-gradient(135deg, #f46b45, #eea849);
        }
        
        .fee-table th {
            background-color: #f8f9fa;
            font-weight: 600;
        }
        
        .fee-table tbody tr {
            transition: all 0.2s ease;
        }
        
        .fee-table tbody tr:hover {
            background-color: rgba(58, 123, 213, 0.05);
        }
        
        .fee-status-paid {
            background-color: #d4edda;
            color: #155724;
        }
        
        .fee-status-pending {
            background-color: #fff3cd;
            color: #856404;
        }
        
        .fee-status-overdue {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        .filter-section {
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: var(--card-shadow);
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
                            <h4 class="mb-0">Fee Structure Management</h4>
                            <div class="d-flex align-items-center">
                                <span class="me-2">Academic Year: 2023-2024</span>
                                <i class="fas fa-money-bill-wave fs-4 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fee Stats Cards -->
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card fee-card">
                            <div class="card-body">
                                <i class="fas fa-money-check-alt fs-4 mb-3"></i>
                                <h3>$245,800</h3>
                                <p>Total Fees Collected</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card fee-card">
                            <div class="card-body">
                                <i class="fas fa-clock fs-4 mb-3"></i>
                                <h3>$38,500</h3>
                                <p>Pending Payments</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card fee-card">
                            <div class="card-body">
                                <i class="fas fa-exclamation-triangle fs-4 mb-3"></i>
                                <h3>$12,200</h3>
                                <p>Overdue Payments</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card fee-card">
                            <div class="card-body">
                                <i class="fas fa-percentage fs-4 mb-3"></i>
                                <h3>87%</h3>
                                <p>Collection Rate</p>
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
                                <label class="form-label">Academic Year</label>
                                <select class="form-select">
                                    <option>All Years</option>
                                    <option selected>2023-2024</option>
                                    <option>2022-2023</option>
                                    <option>2021-2022</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Program</label>
                                <select class="form-select">
                                    <option>All Programs</option>
                                    <option selected>Computer Science</option>
                                    <option>Electrical Engineering</option>
                                    <option>Business Administration</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Fee Type</label>
                                <select class="form-select">
                                    <option>All Types</option>
                                    <option selected>Tuition Fee</option>
                                    <option>Hostel Fee</option>
                                    <option>Examination Fee</option>
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
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="card-title mb-0">Fee Structure</h4>
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addFeeModal">
                                        <i class="fas fa-plus me-1"></i> Add New Fee
                                    </button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table fee-table table-hover table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>Fee ID</th>
                                                <th>Fee Name</th>
                                                <th>Program</th>
                                                <th>Amount</th>
                                                <th>Due Date</th>
                                                <th>Late Fee</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#FEE2023001</td>
                                                <td>Tuition Fee - Semester 1</td>
                                                <td>Computer Science</td>
                                                <td>$1,200.00</td>
                                                <td>15 Aug 2023</td>
                                                <td>$50.00</td>
                                                <td><span class="badge fee-status-paid">Paid (87%)</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#FEE2023002</td>
                                                <td>Hostel Fee</td>
                                                <td>All Programs</td>
                                                <td>$800.00</td>
                                                <td>10 Aug 2023</td>
                                                <td>$30.00</td>
                                                <td><span class="badge fee-status-pending">Pending (65%)</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#FEE2023003</td>
                                                <td>Examination Fee</td>
                                                <td>Electrical Engineering</td>
                                                <td>$150.00</td>
                                                <td>05 Sep 2023</td>
                                                <td>$20.00</td>
                                                <td><span class="badge fee-status-overdue">Overdue (42%)</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>#FEE2023004</td>
                                                <td>Library Fee</td>
                                                <td>Business Administration</td>
                                                <td>$75.00</td>
                                                <td>20 Aug 2023</td>
                                                <td>$10.00</td>
                                                <td><span class="badge fee-status-paid">Paid (92%)</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- Fee Breakdown Section -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Fee Collection by Program</h4>
                                <div class="text-center py-4">
                                    <!-- This would be replaced with an actual chart in implementation -->
                                    <div class="text-center py-5 bg-light rounded">
                                        <i class="fas fa-chart-pie fs-1 text-muted"></i>
                                        <p class="mt-2">Fee Collection Chart</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Recent Payments</h4>
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
                                            <p class="text-muted mb-1">#ST2023001 | $1,200.00</p>
                                            <small class="text-success"><i class="far fa-clock me-1"></i> Paid on 12 Aug 2023</small>
                                        </div>
                                        <div>
                                            <span class="badge bg-success">Verified</span>
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
                                            <p class="text-muted mb-1">#ST2023002 | $800.00</p>
                                            <small class="text-warning"><i class="far fa-clock me-1"></i> Pending since 10 Aug 2023</small>
                                        </div>
                                        <div>
                                            <span class="badge bg-warning">Pending</span>
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
                                            <p class="text-muted mb-1">#ST2023003 | $150.00</p>
                                            <small class="text-danger"><i class="far fa-clock me-1"></i> Overdue since 05 Sep 2023</small>
                                        </div>
                                        <div>
                                            <span class="badge bg-danger">Overdue</span>
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
                                            <p class="text-muted mb-1">#ST2023004 | $1,200.00</p>
                                            <small class="text-success"><i class="far fa-clock me-1"></i> Paid on 14 Aug 2023</small>
                                        </div>
                                        <div>
                                            <span class="badge bg-success">Verified</span>
                                        </div>
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

<!-- Add Fee Modal -->
<div class="modal fade" id="addFeeModal" tabindex="-1" aria-labelledby="addFeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFeeModalLabel">Add New Fee Structure</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="feeName" class="form-label">Fee Name</label>
                        <input type="text" class="form-control" id="feeName" placeholder="Enter fee name">
                    </div>
                    <div class="mb-3">
                        <label for="feeProgram" class="form-label">Program</label>
                        <select class="form-select" id="feeProgram">
                            <option selected>Select Program</option>
                            <option>Computer Science</option>
                            <option>Electrical Engineering</option>
                            <option>Business Administration</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="feeAmount" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="feeAmount" placeholder="Enter amount">
                    </div>
                    <div class="mb-3">
                        <label for="dueDate" class="form-label">Due Date</label>
                        <input type="date" class="form-control" id="dueDate">
                    </div>
                    <div class="mb-3">
                        <label for="lateFee" class="form-label">Late Fee Amount</label>
                        <input type="text" class="form-control" id="lateFee" placeholder="Enter late fee amount">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save Fee</button>
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