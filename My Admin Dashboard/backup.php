<?php 
$page_title = "Backup & Restore | College Management System";
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
    
    <!-- Custom CSS for Backup Page -->
    <style>
        :root {
            --primary-color: #3a7bd5;
            --secondary-color: #00d2ff;
            --accent-color: #6c5ce7;
            --light-bg: #f8f9fa;
            --card-shadow: 0 4px 24px 0 rgba(34, 41, 47, 0.1);
            --backup-color: #4bc0c0;
            --restore-color: #ff6384;
            --auto-color: #36a2eb;
            --storage-color: #ffcd56;
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
        
        .backup-card {
            border: none;
            border-radius: 10px;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 24px;
            border-top: 4px solid var(--primary-color);
        }
        
        .backup-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(34, 41, 47, 0.15);
        }
        
        .backup-card .card-header {
            background-color: white;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            padding: 15px 20px;
            border-radius: 10px 10px 0 0 !important;
        }
        
        .backup-card .card-body {
            padding: 1.5rem;
        }
        
        .backup-card .card-title {
            font-weight: 600;
            color: #2c304d;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
            display: flex;
            align-items: center;
        }
        
        .backup-card .card-title i {
            margin-right: 10px;
            font-size: 22px;
            color: var(--primary-color);
        }
        
        /* Backup Stats Cards */
        .stats-card {
            text-align: center;
            padding: 20px 0;
            border-radius: 8px;
            color: white;
            position: relative;
            overflow: hidden;
            margin-bottom: 20px;
        }
        
        .stats-card h3 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .stats-card i {
            font-size: 36px;
            margin-bottom: 15px;
            display: block;
        }
        
        .backup-stats {
            background: linear-gradient(135deg, var(--backup-color), #2ecc71);
        }
        
        .restore-stats {
            background: linear-gradient(135deg, var(--restore-color), #c0392b);
        }
        
        .auto-stats {
            background: linear-gradient(135deg, var(--auto-color), #2980b9);
        }
        
        .storage-stats {
            background: linear-gradient(135deg, var(--storage-color), #f39c12);
        }
        
        /* Backup Table */
        .backup-table {
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .backup-table thead th {
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
            border-bottom: 2px solid #dee2e6;
            font-weight: 600;
            color: #495057;
        }
        
        .backup-table tbody tr {
            transition: all 0.2s ease;
        }
        
        .backup-table tbody tr:hover {
            background-color: rgba(58, 123, 213, 0.05);
        }
        
        .backup-badge {
            padding: 6px 10px;
            font-weight: 500;
            font-size: 12px;
            border-radius: 4px;
        }
        
        .badge-full {
            background-color: rgba(75, 192, 192, 0.1);
            color: var(--backup-color);
        }
        
        .badge-diff {
            background-color: rgba(255, 99, 132, 0.1);
            color: var(--restore-color);
        }
        
        .badge-auto {
            background-color: rgba(54, 162, 235, 0.1);
            color: var(--auto-color);
        }
        
        /* Progress Bars */
        .storage-progress {
            height: 8px;
            border-radius: 4px;
            margin-bottom: 10px;
        }
        
        .progress-labels {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            color: #6c757d;
        }
        
        /* Action Buttons */
        .backup-btn {
            border-radius: 50px;
            padding: 8px 20px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-backup {
            background: linear-gradient(135deg, var(--backup-color), #2ecc71);
            color: white;
            border: none;
        }
        
        .btn-backup:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(75, 192, 192, 0.3);
            color: white;
        }
        
        .btn-restore {
            background: linear-gradient(135deg, var(--restore-color), #c0392b);
            color: white;
            border: none;
        }
        
        .btn-restore:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 99, 132, 0.3);
            color: white;
        }
        
        /* Backup Options */
        .backup-options {
            background: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: var(--card-shadow);
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .backup-options .col-md-4 {
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
                            <h4 class="mb-0">Backup & Restore</h4>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-outline-secondary me-2">
                                    <i class="fas fa-history me-1"></i> Backup Logs
                                </button>
                                <button class="btn btn-primary">
                                    <i class="fas fa-cog me-1"></i> Settings
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Backup Stats -->
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="stats-card backup-stats">
                            <i class="fas fa-database"></i>
                            <h3>24</h3>
                            <p>Total Backups</p>
                            <small class="opacity-75">3 this week</small>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="stats-card restore-stats">
                            <i class="fas fa-redo"></i>
                            <h3>8</h3>
                            <p>Restores</p>
                            <small class="opacity-75">Last: May 15</small>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="stats-card auto-stats">
                            <i class="fas fa-robot"></i>
                            <h3>12</h3>
                            <p>Auto Backups</p>
                            <small class="opacity-75">Next: Tonight</small>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="stats-card storage-stats">
                            <i class="fas fa-hdd"></i>
                            <h3>68%</h3>
                            <p>Storage Used</p>
                            <small class="opacity-75">42GB of 62GB</small>
                        </div>
                    </div>
                </div>

                <!-- Backup Options -->
                <div class="row backup-options">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Backup Type</label>
                            <select class="form-select">
                                <option selected>Full Backup</option>
                                <option>Database Only</option>
                                <option>Files Only</option>
                                <option>Custom Selection</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Storage Location</label>
                            <select class="form-select">
                                <option selected>Local Server</option>
                                <option>Google Drive</option>
                                <option>Amazon S3</option>
                                <option>Dropbox</option>
                                <option>FTP Server</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label">Actions</label>
                            <div class="d-flex">
                                <button class="btn btn-backup backup-btn me-2 flex-grow-1">
                                    <i class="fas fa-plus-circle me-1"></i> Create Backup
                                </button>
                                <button class="btn btn-restore backup-btn flex-grow-1">
                                    <i class="fas fa-redo me-1"></i> Restore
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Storage Status -->
                <div class="row">
                    <div class="col-12">
                        <div class="card backup-card">
                            <div class="card-header">
                                <h5 class="card-title mb-0"><i class="fas fa-hdd"></i> Storage Status</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="progress-labels">
                                        <span>Used: 42GB</span>
                                        <span>Free: 20GB</span>
                                    </div>
                                    <div class="progress storage-progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="text-end">
                                        <small class="text-muted">Total: 62GB</small>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Cleanup Old Backups</label>
                                            <select class="form-select">
                                                <option selected>Keep all backups</option>
                                                <option>Delete backups older than 30 days</option>
                                                <option>Delete backups older than 90 days</option>
                                                <option>Delete backups older than 1 year</option>
                                                <option>Custom cleanup...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Storage Limit</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" value="62">
                                                <span class="input-group-text">GB</span>
                                                <button class="btn btn-outline-primary" type="button">Update</button>
                                            </div>
                                            <small class="text-muted">Set 0 for unlimited storage</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Backup List -->
                <div class="row">
                    <div class="col-12">
                        <div class="card backup-card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title mb-0"><i class="fas fa-database"></i> Backup Archives</h5>
                                    <div class="d-flex">
                                        <input type="text" class="form-control form-control-sm me-2" placeholder="Search backups..." style="width: 200px;">
                                        <button class="btn btn-sm btn-outline-secondary">
                                            <i class="fas fa-sync-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table backup-table table-hover table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">Backup Name</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Date Created</th>
                                                <th scope="col">Size</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>full_backup_20230521.zip</td>
                                                <td><span class="backup-badge badge-full">Full Backup</span></td>
                                                <td>2023-05-21 02:30</td>
                                                <td>2.4 GB</td>
                                                <td>Local Server</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-success me-1">
                                                        <i class="fas fa-redo"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>db_only_20230518.sql</td>
                                                <td><span class="backup-badge badge-diff">Database Only</span></td>
                                                <td>2023-05-18 14:15</td>
                                                <td>1.2 GB</td>
                                                <td>Google Drive</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-success me-1">
                                                        <i class="fas fa-redo"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>auto_backup_20230515.zip</td>
                                                <td><span class="backup-badge badge-auto">Auto Backup</span></td>
                                                <td>2023-05-15 02:30</td>
                                                <td>2.1 GB</td>
                                                <td>Local Server</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-success me-1">
                                                        <i class="fas fa-redo"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>files_backup_20230510.tar.gz</td>
                                                <td><span class="backup-badge badge-diff">Files Only</span></td>
                                                <td>2023-05-10 03:45</td>
                                                <td>3.7 GB</td>
                                                <td>Amazon S3</td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-success me-1">
                                                        <i class="fas fa-redo"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>full_backup_20230507.zip</td>
                                                <td><span class="backup-badge badge-full">Full Backup</span></td>
                                                <td>2023-05-07 02:30</td>
                                                <td>2.3 GB</td>
                                                <td>Local Server</td>
                                                <td><span class="badge bg-warning">Partial</span></td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-primary me-1">
                                                        <i class="fas fa-download"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-success me-1">
                                                        <i class="fas fa-redo"></i>
                                                    </button>
                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <!-- Pagination -->
                                <div class="row mt-3">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_info">
                                            Showing 1 to 5 of 24 backups
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_paginate paging_simple_numbers float-end">
                                            <ul class="pagination">
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

                <!-- Auto Backup Settings -->
                <div class="row">
                    <div class="col-12">
                        <div class="card backup-card">
                            <div class="card-header">
                                <h5 class="card-title mb-0"><i class="fas fa-robot"></i> Automatic Backups</h5>
                            </div>
                            <div class="card-body">
                                <form class="settings-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Auto Backup Status</label>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="autoBackupEnabled" checked>
                                                    <label class="form-check-label" for="autoBackupEnabled">Enable automatic backups</label>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Backup Frequency</label>
                                                <select class="form-select">
                                                    <option>Daily</option>
                                                    <option selected>Weekly</option>
                                                    <option>Monthly</option>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Backup Time</label>
                                                <input type="time" class="form-control" value="02:00">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Backup Retention</label>
                                                <select class="form-select">
                                                    <option>Keep all backups</option>
                                                    <option selected>Keep last 4 backups</option>
                                                    <option>Keep last 8 backups</option>
                                                    <option>Keep last 12 backups</option>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Backup Type</label>
                                                <select class="form-select">
                                                    <option selected>Full Backup</option>
                                                    <option>Database Only</option>
                                                    <option>Files Only</option>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Storage Location</label>
                                                <select class="form-select">
                                                    <option selected>Local Server</option>
                                                    <option>Google Drive</option>
                                                    <option>Amazon S3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="text-end mt-3">
                                        <button type="button" class="btn btn-primary">
                                            <i class="fas fa-save me-1"></i> Save Settings
                                        </button>
                                    </div>
                                </form>
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

<!-- Custom Backup Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize backup creation
        const backupBtn = document.querySelector('.btn-backup');
        backupBtn.addEventListener('click', function() {
            // In a real implementation, this would initiate backup
            const originalText = this.innerHTML;
            this.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i> Creating Backup...';
            
            setTimeout(() => {
                this.innerHTML = '<i class="fas fa-check me-1"></i> Backup Created';
                setTimeout(() => {
                    this.innerHTML = originalText;
                }, 2000);
            }, 3000);
        });
        
        // Initialize restore button
        const restoreBtn = document.querySelector('.btn-restore');
        restoreBtn.addEventListener('click', function() {
            // In a real implementation, this would open restore modal
            console.log('Restore functionality would be implemented here');
        });
        
        // Initialize backup table actions
        const downloadBtns = document.querySelectorAll('.btn-outline-primary');
        downloadBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const backupName = this.closest('tr').querySelector('td').textContent;
                console.log('Download backup: ' + backupName);
            });
        });
        
        const restoreBtns = document.querySelectorAll('.btn-outline-success');
        restoreBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const backupName = this.closest('tr').querySelector('td').textContent;
                if (confirm('Are you sure you want to restore from ' + backupName + '?')) {
                    console.log('Restore from backup: ' + backupName);
                }
            });
        });
        
        const deleteBtns = document.querySelectorAll('.btn-outline-danger');
        deleteBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const backupName = this.closest('tr').querySelector('td').textContent;
                if (confirm('Are you sure you want to delete ' + backupName + '?')) {
                    console.log('Delete backup: ' + backupName);
                }
            });
        });
    });
</script>

</body>
</html>