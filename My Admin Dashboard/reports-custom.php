<?php 
$page_title = "Custom Reports | College Management System";
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
    
    <!-- Custom CSS for Custom Reports -->
    <style>
        :root {
            --primary-color: #3a7bd5;
            --secondary-color: #00d2ff;
            --accent-color: #6c5ce7;
            --light-bg: #f8f9fa;
            --card-shadow: 0 4px 24px 0 rgba(34, 41, 47, 0.1);
            --student-color: #4bc0c0;
            --faculty-color: #ff6384;
            --course-color: #36a2eb;
            --financial-color: #ffcd56;
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
        
        /* Report Type Cards */
        .report-type-card {
            text-align: center;
            padding: 25px 15px;
            border-radius: 8px;
            color: white;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .report-type-card:hover {
            transform: translateY(-5px) scale(1.02);
        }
        
        .report-type-card h3 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .report-type-card i {
            font-size: 36px;
            margin-bottom: 15px;
            display: block;
        }
        
        .report-type-card.student {
            background: linear-gradient(135deg, var(--student-color), #2ecc71);
        }
        
        .report-type-card.faculty {
            background: linear-gradient(135deg, var(--faculty-color), #c0392b);
        }
        
        .report-type-card.course {
            background: linear-gradient(135deg, var(--course-color), #2980b9);
        }
        
        .report-type-card.financial {
            background: linear-gradient(135deg, var(--financial-color), #f39c12);
        }
        
        /* Report Builder */
        .report-builder {
            background: white;
            border-radius: 10px;
            box-shadow: var(--card-shadow);
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .report-preview {
            background: white;
            border-radius: 10px;
            box-shadow: var(--card-shadow);
            padding: 20px;
            min-height: 400px;
            border: 2px dashed #e0e0e0;
        }
        
        /* Filter Controls */
        .filter-section {
            background: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: var(--card-shadow);
        }
        
        .filter-group {
            margin-bottom: 15px;
        }
        
        /* Saved Reports */
        .saved-report-item {
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border-left: 4px solid var(--accent-color);
        }
        
        .saved-report-item:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .saved-report-item h5 {
            font-weight: 600;
            color: var(--primary-color);
            margin-bottom: 5px;
        }
        
        .saved-report-item .badge {
            font-size: 12px;
            padding: 4px 8px;
        }
        
        /* Action Buttons */
        .action-btn {
            border-radius: 50px;
            padding: 8px 20px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .generate-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            border: none;
        }
        
        .generate-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(58, 123, 213, 0.3);
            color: white;
        }
        
        /* Custom Fields */
        .custom-field {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            border-left: 3px solid var(--accent-color);
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .report-type-card {
                margin-bottom: 15px;
            }
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
                            <h4 class="mb-0">Custom Report Builder</h4>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-primary me-2 action-btn generate-btn">
                                    <i class="fas fa-magic me-1"></i> Generate Report
                                </button>
                                <button class="btn btn-outline-secondary action-btn">
                                    <i class="fas fa-save me-1"></i> Save Template
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Report Type Selection -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="report-type-card student">
                            <i class="fas fa-user-graduate"></i>
                            <h3>Student Reports</h3>
                            <p>Enrollment, performance, attendance</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="report-type-card faculty">
                            <i class="fas fa-chalkboard-teacher"></i>
                            <h3>Faculty Reports</h3>
                            <p>Workload, performance, payroll</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="report-type-card course">
                            <i class="fas fa-book-open"></i>
                            <h3>Course Reports</h3>
                            <p>Enrollment, completion, evaluations</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="report-type-card financial">
                            <i class="fas fa-money-bill-wave"></i>
                            <h3>Financial Reports</h3>
                            <p>Revenue, expenses, budgets</p>
                        </div>
                    </div>
                </div>

                <!-- Report Builder Area -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="filter-section">
                            <h5 class="mb-3"><i class="fas fa-sliders-h me-2"></i>Report Parameters</h5>
                            
                            <div class="filter-group">
                                <label class="form-label">Report Type</label>
                                <select class="form-select">
                                    <option>Tabular Report</option>
                                    <option>Summary Statistics</option>
                                    <option>Graphical Report</option>
                                    <option>Detailed Analysis</option>
                                </select>
                            </div>
                            
                            <div class="filter-group">
                                <label class="form-label">Time Period</label>
                                <select class="form-select">
                                    <option>Current Semester</option>
                                    <option>Last Semester</option>
                                    <option>Current Academic Year</option>
                                    <option>Custom Range...</option>
                                </select>
                            </div>
                            
                            <div class="filter-group">
                                <label class="form-label">Department</label>
                                <select class="form-select">
                                    <option>All Departments</option>
                                    <option>Computer Science</option>
                                    <option>Engineering</option>
                                    <option>Business Administration</option>
                                    <option>Arts & Humanities</option>
                                </select>
                            </div>
                            
                            <div class="filter-group">
                                <label class="form-label">Output Format</label>
                                <select class="form-select">
                                    <option>PDF Document</option>
                                    <option>Excel Spreadsheet</option>
                                    <option>HTML Web Page</option>
                                    <option>CSV Data File</option>
                                </select>
                            </div>
                            
                            <hr>
                            
                            <h6 class="mb-3"><i class="fas fa-plus-circle me-2"></i>Custom Fields</h6>
                            <div class="custom-field">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="includeCharts">
                                    <label class="form-check-label" for="includeCharts">Include Charts</label>
                                </div>
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" id="includeSummary">
                                    <label class="form-check-label" for="includeSummary">Include Executive Summary</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="includeRawData">
                                    <label class="form-check-label" for="includeRawData">Include Raw Data</label>
                                </div>
                            </div>
                            
                            <button class="btn btn-outline-primary w-100 mt-2">
                                <i class="fas fa-plus me-1"></i> Add Custom Field
                            </button>
                        </div>
                        
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fas fa-bookmark me-2"></i>Saved Reports</h5>
                                <div class="saved-reports-list">
                                    <div class="saved-report-item">
                                        <div class="d-flex justify-content-between">
                                            <h5>Monthly Enrollment Report</h5>
                                            <span class="badge bg-primary">Student</span>
                                        </div>
                                        <p class="text-muted mb-1">Last generated: May 15, 2023</p>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-sm btn-outline-secondary me-1"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </div>
                                    <div class="saved-report-item">
                                        <div class="d-flex justify-content-between">
                                            <h5>Faculty Workload Analysis</h5>
                                            <span class="badge bg-danger">Faculty</span>
                                        </div>
                                        <p class="text-muted mb-1">Last generated: April 28, 2023</p>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-sm btn-outline-secondary me-1"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </div>
                                    <div class="saved-report-item">
                                        <div class="d-flex justify-content-between">
                                            <h5>Q1 Financial Summary</h5>
                                            <span class="badge bg-warning">Financial</span>
                                        </div>
                                        <p class="text-muted mb-1">Last generated: April 5, 2023</p>
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-sm btn-outline-secondary me-1"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-8">
                        <div class="report-builder">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5><i class="fas fa-tools me-2"></i>Report Builder</h5>
                                <div>
                                    <button class="btn btn-sm btn-outline-secondary me-1"><i class="fas fa-undo"></i> Reset</button>
                                    <button class="btn btn-sm btn-outline-primary"><i class="fas fa-question-circle"></i> Help</button>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Report Title</label>
                                    <input type="text" class="form-control" value="Custom Enrollment Report - Spring 2023">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Report Category</label>
                                    <select class="form-select">
                                        <option>Academic</option>
                                        <option selected>Administrative</option>
                                        <option>Financial</option>
                                        <option>Research</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Report Description</label>
                                <textarea class="form-control" rows="2">This report shows student enrollment statistics for Spring 2023 semester across all departments.</textarea>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Columns to Include</label>
                                    <select multiple class="form-select" size="6">
                                        <option selected>Student ID</option>
                                        <option selected>Full Name</option>
                                        <option selected>Department</option>
                                        <option selected>Course</option>
                                        <option>Enrollment Date</option>
                                        <option selected>Status</option>
                                        <option>GPA</option>
                                        <option>Credits Completed</option>
                                        <option>Contact Information</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Sort By</label>
                                    <select class="form-select mb-3">
                                        <option>Department (A-Z)</option>
                                        <option selected>Student Name (A-Z)</option>
                                        <option>Enrollment Date (Newest)</option>
                                        <option>Status</option>
                                    </select>
                                    
                                    <label class="form-label">Filter Conditions</label>
                                    <div class="input-group mb-2">
                                        <select class="form-select" style="flex: 0 0 30%;">
                                            <option>Status</option>
                                            <option>Department</option>
                                            <option>Course</option>
                                        </select>
                                        <select class="form-select" style="flex: 0 0 30%;">
                                            <option>=</option>
                                            <option>≠</option>
                                            <option>Contains</option>
                                        </select>
                                        <input type="text" class="form-control" placeholder="Value">
                                    </div>
                                    <button class="btn btn-sm btn-outline-primary">Add Filter</button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="report-preview">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <i class="fas fa-file-alt mb-3" style="font-size: 48px; color: #adb5bd;"></i>
                                <h5 class="text-muted">Report Preview</h5>
                                <p class="text-muted text-center">Configure your report parameters to see a preview of the generated report.</p>
                                <button class="btn btn-primary">
                                    <i class="fas fa-eye me-1"></i> Generate Preview
                                </button>
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

<!-- Custom Report Builder Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Report type selection
        const reportCards = document.querySelectorAll('.report-type-card');
        reportCards.forEach(card => {
            card.addEventListener('click', function() {
                reportCards.forEach(c => c.style.opacity = '0.7');
                this.style.opacity = '1';
                this.style.boxShadow = '0 10px 20px rgba(0,0,0,0.2)';
                
                // In a real implementation, this would update the report builder
                console.log('Selected report type: ' + this.querySelector('h3').textContent);
            });
        });
        
        // Generate report button
        const generateBtn = document.querySelector('.generate-btn');
        generateBtn.addEventListener('click', function() {
            // In a real implementation, this would generate the report
            alert('Report generation started! This would process your custom report in a real implementation.');
            this.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i> Generating...';
            setTimeout(() => {
                this.innerHTML = '<i class="fas fa-check me-1"></i> Report Generated';
            }, 2000);
        });
        
        // Add more interactive functionality as needed
    });
</script>

</body>
</html>