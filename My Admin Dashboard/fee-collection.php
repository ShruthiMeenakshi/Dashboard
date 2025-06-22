<?php 
$page_title = "Fee Collection | College Management System";
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
        
        /* Fee Collection specific styles */
        .collection-card {
            text-align: center;
            padding: 20px 0;
            border-radius: 8px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .collection-card h3 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .collection-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background: white;
        }
        
        .collection-card:nth-child(1) {
            background: linear-gradient(135deg, #4b6cb7, #182848);
        }
        
        .collection-card:nth-child(2) {
            background: linear-gradient(135deg, #8e2de2, #4a00e0);
        }
        
        .collection-card:nth-child(3) {
            background: linear-gradient(135deg, #11998e, #38ef7d);
        }
        
        .collection-card:nth-child(4) {
            background: linear-gradient(135deg, #f46b45, #eea849);
        }
        
        .payment-table th {
            background-color: #f8f9fa;
            font-weight: 600;
        }
        
        .payment-table tbody tr {
            transition: all 0.2s ease;
        }
        
        .payment-table tbody tr:hover {
            background-color: rgba(58, 123, 213, 0.05);
        }
        
        .status-paid {
            background-color: #d4edda;
            color: #155724;
        }
        
        .status-pending {
            background-color: #fff3cd;
            color: #856404;
        }
        
        .status-overdue {
            background-color: #f8d7da;
            color: #721c24;
        }
        
        .status-partial {
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
        
        .receipt-badge {
            cursor: pointer;
            transition: all 0.2s;
        }
        
        .receipt-badge:hover {
            transform: scale(1.05);
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
                            <h4 class="mb-0">Fee Collection Management</h4>
                            <div class="d-flex align-items-center">
                                <span class="me-2">Current Month: <?php echo date('F Y'); ?></span>
                                <i class="fas fa-cash-register fs-4 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Collection Stats Cards -->
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card collection-card">
                            <div class="card-body">
                                <i class="fas fa-money-bill-wave fs-4 mb-3"></i>
                                <h3>$84,250</h3>
                                <p>Total Collected</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card collection-card">
                            <div class="card-body">
                                <i class="fas fa-clock fs-4 mb-3"></i>
                                <h3>$12,800</h3>
                                <p>Pending Payments</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card collection-card">
                            <div class="card-body">
                                <i class="fas fa-exclamation-triangle fs-4 mb-3"></i>
                                <h3>$5,400</h3>
                                <p>Overdue Payments</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card collection-card">
                            <div class="card-body">
                                <i class="fas fa-percentage fs-4 mb-3"></i>
                                <h3>89%</h3>
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
                                <label class="form-label">Payment Period</label>
                                <select class="form-select">
                                    <option>All Periods</option>
                                    <option selected><?php echo date('F Y'); ?></option>
                                    <option><?php echo date('F Y', strtotime('-1 month')); ?></option>
                                    <option><?php echo date('F Y', strtotime('-2 months')); ?></option>
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
                                <label class="form-label">Payment Status</label>
                                <select class="form-select">
                                    <option>All Statuses</option>
                                    <option selected>Paid</option>
                                    <option>Pending</option>
                                    <option>Overdue</option>
                                    <option>Partial</option>
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
                                    <h4 class="card-title mb-0">Payment Records</h4>
                                    <div>
                                        <button class="btn btn-sm btn-outline-secondary me-2">
                                            <i class="fas fa-download me-1"></i> Export
                                        </button>
                                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#recordPaymentModal">
                                            <i class="fas fa-plus me-1"></i> Record Payment
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table payment-table table-hover table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>Receipt No.</th>
                                                <th>Student</th>
                                                <th>Program</th>
                                                <th>Fee Type</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="receipt-badge badge bg-primary">#RCPT2023001</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-xs me-2">
                                                            <span class="avatar-title rounded-circle bg-light text-primary">
                                                                JD
                                                            </span>
                                                        </div>
                                                        <span>John Doe</span>
                                                    </div>
                                                </td>
                                                <td>Computer Science</td>
                                                <td>Tuition Fee</td>
                                                <td>$1,200.00</td>
                                                <td>15 Aug 2023</td>
                                                <td><span class="badge status-paid">Paid</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1" title="View Receipt">
                                                        <i class="fas fa-receipt"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-secondary" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="receipt-badge badge bg-warning">#RCPT2023002</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-xs me-2">
                                                            <span class="avatar-title rounded-circle bg-light text-danger">
                                                                AS
                                                            </span>
                                                        </div>
                                                        <span>Alice Smith</span>
                                                    </div>
                                                </td>
                                                <td>Electrical Engineering</td>
                                                <td>Hostel Fee</td>
                                                <td>$800.00</td>
                                                <td>10 Aug 2023</td>
                                                <td><span class="badge status-pending">Pending</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1" title="View Receipt">
                                                        <i class="fas fa-receipt"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-secondary" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="receipt-badge badge bg-danger">#RCPT2023003</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-xs me-2">
                                                            <span class="avatar-title rounded-circle bg-light text-info">
                                                                RJ
                                                            </span>
                                                        </div>
                                                        <span>Robert Johnson</span>
                                                    </div>
                                                </td>
                                                <td>Business Administration</td>
                                                <td>Examination Fee</td>
                                                <td>$150.00</td>
                                                <td>05 Sep 2023</td>
                                                <td><span class="badge status-overdue">Overdue</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1" title="View Receipt">
                                                        <i class="fas fa-receipt"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-secondary" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="receipt-badge badge bg-info">#RCPT2023004</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-xs me-2">
                                                            <span class="avatar-title rounded-circle bg-light text-success">
                                                                MJ
                                                            </span>
                                                        </div>
                                                        <span>Mary Johnson</span>
                                                    </div>
                                                </td>
                                                <td>Computer Science</td>
                                                <td>Library Fee</td>
                                                <td>$75.00</td>
                                                <td>20 Aug 2023</td>
                                                <td><span class="badge status-partial">Partial</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1" title="View Receipt">
                                                        <i class="fas fa-receipt"></i>
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
                                            <p class="text-muted mb-1">#RCPT2023001 | $1,200.00</p>
                                            <small class="text-success"><i class="far fa-clock me-1"></i> Paid on 15 Aug 2023</small>
                                        </div>
                                        <div>
                                            <span class="badge bg-success">Verified</span>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-4">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-light text-success">
                                                    MJ
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="font-size-14 mb-1">Mary Johnson</h5>
                                            <p class="text-muted mb-1">#RCPT2023004 | $75.00</p>
                                            <small class="text-success"><i class="far fa-clock me-1"></i> Paid on 20 Aug 2023</small>
                                        </div>
                                        <div>
                                            <span class="badge bg-success">Verified</span>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-4">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-light text-warning">
                                                    DW
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="font-size-14 mb-1">David Wilson</h5>
                                            <p class="text-muted mb-1">#RCPT2023005 | $500.00</p>
                                            <small class="text-warning"><i class="far fa-clock me-1"></i> Partial payment</small>
                                        </div>
                                        <div>
                                            <span class="badge bg-info">Pending</span>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-xs">
                                                <span class="avatar-title rounded-circle bg-light text-danger">
                                                    AS
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="font-size-14 mb-1">Alice Smith</h5>
                                            <p class="text-muted mb-1">#RCPT2023002 | $800.00</p>
                                            <small class="text-danger"><i class="far fa-clock me-1"></i> Overdue</small>
                                        </div>
                                        <div>
                                            <span class="badge bg-danger">Overdue</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Collection Summary</h4>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Total Expected</span>
                                        <span class="fw-bold">$102,500.00</span>
                                    </div>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Amount Collected</span>
                                        <span class="fw-bold">$84,250.00</span>
                                    </div>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <span>Balance Pending</span>
                                        <span class="fw-bold">$18,250.00</span>
                                    </div>
                                    <div class="progress" style="height: 8px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
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

<!-- Record Payment Modal -->
<div class="modal fade" id="recordPaymentModal" tabindex="-1" aria-labelledby="recordPaymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recordPaymentModalLabel">Record New Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="studentSelect" class="form-label">Student</label>
                        <select class="form-select" id="studentSelect">
                            <option selected>Select Student</option>
                            <option>John Doe (CS-201)</option>
                            <option>Alice Smith (EE-301)</option>
                            <option>Robert Johnson (BA-202)</option>
                            <option>Mary Johnson (CS-201)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="feeType" class="form-label">Fee Type</label>
                        <select class="form-select" id="feeType">
                            <option selected>Select Fee Type</option>
                            <option>Tuition Fee</option>
                            <option>Hostel Fee</option>
                            <option>Examination Fee</option>
                            <option>Library Fee</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="paymentAmount" class="form-label">Amount</label>
                        <input type="text" class="form-control" id="paymentAmount" placeholder="Enter amount">
                    </div>
                    <div class="mb-3">
                        <label for="paymentDate" class="form-label">Payment Date</label>
                        <input type="date" class="form-control" id="paymentDate" value="<?php echo date('Y-m-d'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="paymentMethod" class="form-label">Payment Method</label>
                        <select class="form-select" id="paymentMethod">
                            <option selected>Select Method</option>
                            <option>Cash</option>
                            <option>Credit Card</option>
                            <option>Bank Transfer</option>
                            <option>Check</option>
                            <option>Online Payment</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="paymentNotes" class="form-label">Notes</label>
                        <textarea class="form-control" id="paymentNotes" rows="2" placeholder="Any additional notes"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Record Payment</button>
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