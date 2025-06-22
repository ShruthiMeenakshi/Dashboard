<?php 
$page_title = "Fee Reports | College Management System";
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
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
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
        
        /* Report-specific styles */
        .report-card {
            text-align: center;
            padding: 20px 0;
            border-radius: 8px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .report-card h3 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .report-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background: white;
        }
        
        .report-card:nth-child(1) {
            background: linear-gradient(135deg, #4b6cb7, #182848);
        }
        
        .report-card:nth-child(2) {
            background: linear-gradient(135deg, #8e2de2, #4a00e0);
        }
        
        .report-card:nth-child(3) {
            background: linear-gradient(135deg, #11998e, #38ef7d);
        }
        
        .report-card:nth-child(4) {
            background: linear-gradient(135deg, #f46b45, #eea849);
        }
        
        .chart-container {
            position: relative;
            height: 300px;
            margin-bottom: 20px;
        }
        
        .filter-section {
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: var(--card-shadow);
        }
        
        .report-table th {
            background-color: #f8f9fa;
            font-weight: 600;
        }
        
        .report-table tbody tr {
            transition: all 0.2s ease;
        }
        
        .report-table tbody tr:hover {
            background-color: rgba(58, 123, 213, 0.05);
        }
        
        .download-btn {
            min-width: 120px;
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
                            <h4 class="mb-0">Fee Analytics & Reports</h4>
                            <div class="d-flex align-items-center">
                                <span class="me-2">Report Period: <?php echo date('M Y', strtotime('-1 month')) . ' - ' . date('M Y'); ?></span>
                                <i class="fas fa-chart-bar fs-4 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Report Stats Cards -->
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <i class="fas fa-money-bill-wave fs-4 mb-3"></i>
                                <h3>$245,800</h3>
                                <p>Total Revenue</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <i class="fas fa-chart-line fs-4 mb-3"></i>
                                <h3>+12.5%</h3>
                                <p>Growth Rate</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <i class="fas fa-user-graduate fs-4 mb-3"></i>
                                <h3>84%</h3>
                                <p>Paid Students</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card report-card">
                            <div class="card-body">
                                <i class="fas fa-file-invoice-dollar fs-4 mb-3"></i>
                                <h3>1,248</h3>
                                <p>Transactions</p>
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
                                <label class="form-label">Report Type</label>
                                <select class="form-select" id="reportType">
                                    <option selected>Summary Report</option>
                                    <option>Detailed Report</option>
                                    <option>Program-wise Report</option>
                                    <option>Fee Type Report</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Time Period</label>
                                <select class="form-select" id="timePeriod">
                                    <option selected>Last 3 Months</option>
                                    <option>Last 6 Months</option>
                                    <option>Current Fiscal Year</option>
                                    <option>Custom Range</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label class="form-label">Program</label>
                                <select class="form-select" id="programSelect">
                                    <option selected>All Programs</option>
                                    <option>Computer Science</option>
                                    <option>Electrical Engineering</option>
                                    <option>Business Administration</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-items-end">
                            <button class="btn btn-primary w-100 me-2">Generate Report</button>
                        </div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Monthly Fee Collection</h4>
                                <div class="chart-container">
                                    <canvas id="monthlyCollectionChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Program-wise Distribution</h4>
                                <div class="chart-container">
                                    <canvas id="programDistributionChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Payment Status Overview</h4>
                                <div class="chart-container">
                                    <canvas id="paymentStatusChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Fee Type Comparison</h4>
                                <div class="chart-container">
                                    <canvas id="feeTypeChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Detailed Report Table -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="card-title mb-0">Detailed Fee Transactions</h4>
                                    <div>
                                        <button class="btn btn-sm btn-outline-secondary me-2 download-btn">
                                            <i class="fas fa-file-excel me-1"></i> Export Excel
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger download-btn">
                                            <i class="fas fa-file-pdf me-1"></i> Export PDF
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table report-table table-hover table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th>Receipt No.</th>
                                                <th>Date</th>
                                                <th>Student</th>
                                                <th>Program</th>
                                                <th>Fee Type</th>
                                                <th>Amount</th>
                                                <th>Payment Method</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>#RCPT2023001</td>
                                                <td>15 Aug 2023</td>
                                                <td>John Doe</td>
                                                <td>Computer Science</td>
                                                <td>Tuition Fee</td>
                                                <td>$1,200.00</td>
                                                <td>Bank Transfer</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td>#RCPT2023002</td>
                                                <td>10 Aug 2023</td>
                                                <td>Alice Smith</td>
                                                <td>Electrical Engineering</td>
                                                <td>Hostel Fee</td>
                                                <td>$800.00</td>
                                                <td>Credit Card</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>#RCPT2023003</td>
                                                <td>05 Sep 2023</td>
                                                <td>Robert Johnson</td>
                                                <td>Business Administration</td>
                                                <td>Examination Fee</td>
                                                <td>$150.00</td>
                                                <td>Cash</td>
                                                <td><span class="badge bg-danger">Overdue</span></td>
                                            </tr>
                                            <tr>
                                                <td>#RCPT2023004</td>
                                                <td>20 Aug 2023</td>
                                                <td>Mary Johnson</td>
                                                <td>Computer Science</td>
                                                <td>Library Fee</td>
                                                <td>$75.00</td>
                                                <td>Online Payment</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                            </tr>
                                            <tr>
                                                <td>#RCPT2023005</td>
                                                <td>18 Aug 2023</td>
                                                <td>David Wilson</td>
                                                <td>Computer Science</td>
                                                <td>Tuition Fee</td>
                                                <td>$1,200.00</td>
                                                <td>Check</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <!-- Pagination -->
                                <div class="row mt-3">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info">
                                            Showing 1 to 5 of 24 entries
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers">
                                            <ul class="pagination justify-content-end">
                                                <li class="paginate_button page-item previous disabled">
                                                    <a href="#" class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active">
                                                    <a href="#" class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item">
                                                    <a href="#" class="page-link">2</a>
                                                </li>
                                                <li class="paginate_button page-item">
                                                    <a href="#" class="page-link">3</a>
                                                </li>
                                                <li class="paginate_button page-item">
                                                    <a href="#" class="page-link">4</a>
                                                </li>
                                                <li class="paginate_button page-item">
                                                    <a href="#" class="page-link">5</a>
                                                </li>
                                                <li class="paginate_button page-item next">
                                                    <a href="#" class="page-link">Next</a>
                                                </li>
                                            </ul>
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

<?php include 'includes/rightbar.php'; ?>
<?php include 'includes/script.php'; ?>

<!-- Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<!-- Chart.js Implementation -->
<script>
    // Monthly Collection Chart
    const monthlyCtx = document.getElementById('monthlyCollectionChart').getContext('2d');
    const monthlyCollectionChart = new Chart(monthlyCtx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            datasets: [{
                label: 'Fee Collection',
                data: [18500, 19200, 21000, 19800, 22400, 23100, 24500, 26800, 19500],
                backgroundColor: 'rgba(58, 123, 213, 0.7)',
                borderColor: 'rgba(58, 123, 213, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Amount ($)'
                    }
                }
            }
        }
    });

    // Program Distribution Chart
    const programCtx = document.getElementById('programDistributionChart').getContext('2d');
    const programDistributionChart = new Chart(programCtx, {
        type: 'doughnut',
        data: {
            labels: ['Computer Science', 'Electrical Eng', 'Business Admin', 'Others'],
            datasets: [{
                data: [45, 25, 20, 10],
                backgroundColor: [
                    'rgba(58, 123, 213, 0.7)',
                    'rgba(108, 92, 231, 0.7)',
                    'rgba(0, 210, 255, 0.7)',
                    'rgba(244, 107, 69, 0.7)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'right',
                }
            }
        }
    });

    // Payment Status Chart
    const statusCtx = document.getElementById('paymentStatusChart').getContext('2d');
    const paymentStatusChart = new Chart(statusCtx, {
        type: 'pie',
        data: {
            labels: ['Paid', 'Pending', 'Overdue', 'Partial'],
            datasets: [{
                data: [65, 15, 12, 8],
                backgroundColor: [
                    'rgba(40, 167, 69, 0.7)',
                    'rgba(255, 193, 7, 0.7)',
                    'rgba(220, 53, 69, 0.7)',
                    'rgba(23, 162, 184, 0.7)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'right',
                }
            }
        }
    });

    // Fee Type Chart
    const feeTypeCtx = document.getElementById('feeTypeChart').getContext('2d');
    const feeTypeChart = new Chart(feeTypeCtx, {
        type: 'radar',
        data: {
            labels: ['Tuition', 'Hostel', 'Examination', 'Library', 'Lab', 'Sports'],
            datasets: [{
                label: 'Current Year',
                data: [85, 65, 45, 30, 25, 15],
                backgroundColor: 'rgba(58, 123, 213, 0.2)',
                borderColor: 'rgba(58, 123, 213, 1)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(58, 123, 213, 1)'
            }, {
                label: 'Previous Year',
                data: [75, 60, 40, 25, 20, 10],
                backgroundColor: 'rgba(108, 92, 231, 0.2)',
                borderColor: 'rgba(108, 92, 231, 1)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(108, 92, 231, 1)'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                r: {
                    angleLines: {
                        display: true
                    },
                    suggestedMin: 0,
                    suggestedMax: 100
                }
            }
        }
    });
</script>

</body>
</html>