<?php 
$page_title = "Financial Reports | College Management System";
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
    
    <!-- Custom CSS for Financial Reports -->
    <style>
        :root {
            --primary-color: #3a7bd5;
            --secondary-color: #00d2ff;
            --accent-color: #6c5ce7;
            --light-bg: #f8f9fa;
            --card-shadow: 0 4px 24px 0 rgba(34, 41, 47, 0.1);
            --revenue-color: #4bc0c0;
            --expense-color: #ff6384;
            --profit-color: #36a2eb;
            --budget-color: #ffcd56;
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
        
        /* Stats Cards */
        .stats-card {
            text-align: center;
            padding: 20px 0;
            border-radius: 8px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .stats-card h3 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .stats-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background: white;
        }
        
        .stats-card.revenue {
            background: linear-gradient(135deg, var(--revenue-color), #2ecc71);
        }
        
        .stats-card.expenses {
            background: linear-gradient(135deg, var(--expense-color), #c0392b);
        }
        
        .stats-card.profit {
            background: linear-gradient(135deg, var(--profit-color), #2980b9);
        }
        
        .stats-card.budget {
            background: linear-gradient(135deg, var(--budget-color), #f39c12);
        }
        
        /* Financial Table Styling */
        .financial-table {
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .financial-table thead th {
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
            border-bottom: 2px solid #dee2e6;
            font-weight: 600;
            color: #495057;
        }
        
        .financial-table tbody tr {
            transition: all 0.2s ease;
        }
        
        .financial-table tbody tr:hover {
            background-color: rgba(58, 123, 213, 0.05);
            transform: translateX(2px);
        }
        
        .badge {
            padding: 6px 10px;
            font-weight: 500;
            font-size: 12px;
            border-radius: 4px;
        }
        
        /* Chart Container */
        .chart-container {
            position: relative;
            height: 300px;
            width: 100%;
        }
        
        /* Financial Summary Cards */
        .summary-card {
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border-left: 4px solid var(--accent-color);
        }
        
        .summary-card:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .summary-card h5 {
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 5px;
        }
        
        .summary-card p {
            color: #6c757d;
            margin-bottom: 0;
        }
        
        .amount {
            font-size: 20px;
            font-weight: 700;
        }
        
        .revenue-text {
            color: var(--revenue-color);
        }
        
        .expense-text {
            color: var(--expense-color);
        }
        
        .profit-text {
            color: var(--profit-color);
        }
        
        /* Filter Controls */
        .filter-controls {
            background: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: var(--card-shadow);
        }
        
        /* Print Button */
        .print-btn {
            background: linear-gradient(135deg, #6c5ce7, #a29bfe);
            border: none;
            color: white;
        }
        
        .print-btn:hover {
            color: white;
            transform: translateY(-2px);
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
                            <h4 class="mb-0">Financial Reports</h4>
                            <div class="d-flex align-items-center">
                                <button class="btn print-btn me-2">
                                    <i class="fas fa-print me-1"></i> Print Report
                                </button>
                                <span class="me-2">Fiscal Year: 2023-2024</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Filter Controls -->
                <div class="row filter-controls">
                    <div class="col-md-3">
                        <label class="form-label">Report Type</label>
                        <select class="form-select">
                            <option>Summary Report</option>
                            <option>Detailed Report</option>
                            <option>Revenue Breakdown</option>
                            <option>Expense Analysis</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Time Period</label>
                        <select class="form-select">
                            <option>This Month</option>
                            <option>Last Month</option>
                            <option>This Quarter</option>
                            <option>This Fiscal Year</option>
                            <option>Custom Range</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Department</label>
                        <select class="form-select">
                            <option>All Departments</option>
                            <option>Computer Science</option>
                            <option>Engineering</option>
                            <option>Business</option>
                            <option>Arts</option>
                        </select>
                    </div>
                    <div class="col-md-3 d-flex align-items-end">
                        <button class="btn btn-primary w-100">
                            <i class="fas fa-filter me-1"></i> Apply Filters
                        </button>
                    </div>
                </div>

                <!-- Financial Stats Cards -->
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card stats-card revenue">
                            <div class="card-body">
                                <i class="fas fa-money-bill-wave fs-4 mb-3"></i>
                                <h3>$125,800</h3>
                                <p>Total Revenue</p>
                                <small class="opacity-75">+12.5% from last year</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card stats-card expenses">
                            <div class="card-body">
                                <i class="fas fa-receipt fs-4 mb-3"></i>
                                <h3>$85,250</h3>
                                <p>Total Expenses</p>
                                <small class="opacity-75">+8.2% from last year</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card stats-card profit">
                            <div class="card-body">
                                <i class="fas fa-chart-line fs-4 mb-3"></i>
                                <h3>$40,550</h3>
                                <p>Net Profit</p>
                                <small class="opacity-75">+22.3% from last year</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card stats-card budget">
                            <div class="card-body">
                                <i class="fas fa-piggy-bank fs-4 mb-3"></i>
                                <h3>$210,000</h3>
                                <p>Annual Budget</p>
                                <small class="opacity-75">78.5% utilized</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <!-- Main content area -->
                <div class="row">
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="card-title mb-0">Financial Overview</h4>
                                    <div>
                                        <button class="btn btn-sm btn-outline-primary me-2">Export</button>
                                        <button class="btn btn-sm btn-outline-secondary">Details</button>
                                    </div>
                                </div>
                                <div class="chart-container">
                                    <!-- This would be replaced with actual chart canvas -->
                                    <img src="https://via.placeholder.com/800x300?text=Revenue+vs+Expenses+Chart" alt="Financial Chart" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="card-title mb-0">Recent Transactions</h4>
                                    <button class="btn btn-sm btn-outline-primary">View All</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table financial-table table-hover table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">Transaction ID</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>2023-05-15</td>
                                                <td>#TX001</td>
                                                <td>Tuition Fees - John Doe</td>
                                                <td>Tuition Revenue</td>
                                                <td class="revenue-text">+$1,250</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td>2023-05-14</td>
                                                <td>#TX002</td>
                                                <td>Faculty Salary - Prof. Smith</td>
                                                <td>Salaries</td>
                                                <td class="expense-text">-$3,500</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td>2023-05-12</td>
                                                <td>#TX003</td>
                                                <td>Lab Equipment Purchase</td>
                                                <td>Equipment</td>
                                                <td class="expense-text">-$8,200</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>2023-05-10</td>
                                                <td>#TX004</td>
                                                <td>Alumni Donation</td>
                                                <td>Donations</td>
                                                <td class="revenue-text">+$5,000</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td>2023-05-08</td>
                                                <td>#TX005</td>
                                                <td>Campus Maintenance</td>
                                                <td>Maintenance</td>
                                                <td class="expense-text">-$2,300</td>
                                                <td><span class="badge bg-success">Completed</span></td>
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
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="card-title mb-0">Revenue Breakdown</h4>
                                    <button class="btn btn-sm btn-outline-secondary">Details</button>
                                </div>
                                <div class="chart-container mb-4">
                                    <!-- This would be replaced with actual chart canvas -->
                                    <img src="https://via.placeholder.com/400x200?text=Revenue+Breakdown+Chart" alt="Revenue Chart" class="img-fluid rounded">
                                </div>
                                <div class="summary-card">
                                    <h5>Tuition Fees</h5>
                                    <p class="amount revenue-text">$98,450</p>
                                    <small class="text-muted">78.5% of total revenue</small>
                                </div>
                                <div class="summary-card">
                                    <h5>Grants & Donations</h5>
                                    <p class="amount revenue-text">$18,750</p>
                                    <small class="text-muted">14.9% of total revenue</small>
                                </div>
                                <div class="summary-card">
                                    <h5>Other Income</h5>
                                    <p class="amount revenue-text">$8,600</p>
                                    <small class="text-muted">6.6% of total revenue</small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="card-title mb-0">Expense Analysis</h4>
                                    <button class="btn btn-sm btn-outline-secondary">Details</button>
                                </div>
                                <div class="chart-container mb-4">
                                    <!-- This would be replaced with actual chart canvas -->
                                    <img src="https://via.placeholder.com/400x200?text=Expense+Analysis+Chart" alt="Expense Chart" class="img-fluid rounded">
                                </div>
                                <div class="summary-card">
                                    <h5>Salaries & Benefits</h5>
                                    <p class="amount expense-text">$52,300</p>
                                    <small class="text-muted">61.3% of total expenses</small>
                                </div>
                                <div class="summary-card">
                                    <h5>Facilities & Maintenance</h5>
                                    <p class="amount expense-text">$15,750</p>
                                    <small class="text-muted">18.5% of total expenses</small>
                                </div>
                                <div class="summary-card">
                                    <h5>Academic Supplies</h5>
                                    <p class="amount expense-text">$12,200</p>
                                    <small class="text-muted">14.3% of total expenses</small>
                                </div>
                                <div class="summary-card">
                                    <h5>Administrative</h5>
                                    <p class="amount expense-text">$5,000</p>
                                    <small class="text-muted">5.9% of total expenses</small>
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

<?php include 'includes/rightbar.php'; ?>
<?php include 'includes/script.php'; ?>

<!-- Chart.js for financial charts -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Custom Financial Report Script -->
<script>
    // This would contain chart initialization and other financial report specific JS
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Financial reports page loaded');
        // Initialize charts here in a real implementation
    });
</script>

</body>
</html>