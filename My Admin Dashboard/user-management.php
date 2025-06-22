<?php 
$page_title = "User Management | College Management System";
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
    
    <!-- Custom CSS for User Management -->
    <style>
        :root {
            --primary-color: #3a7bd5;
            --secondary-color: #00d2ff;
            --accent-color: #6c5ce7;
            --light-bg: #f8f9fa;
            --card-shadow: 0 4px 24px 0 rgba(34, 41, 47, 0.1);
            --student-color: #4bc0c0;
            --faculty-color: #ff6384;
            --staff-color: #36a2eb;
            --admin-color: #ffcd56;
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
        
        .user-card {
            border: none;
            border-radius: 10px;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 24px;
        }
        
        .user-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(34, 41, 47, 0.15);
        }
        
        .user-card .card-header {
            background-color: white;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            padding: 15px 20px;
            border-radius: 10px 10px 0 0 !important;
        }
        
        .user-card .card-body {
            padding: 1.5rem;
        }
        
        .user-card .card-title {
            font-weight: 600;
            color: #2c304d;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
            display: flex;
            align-items: center;
        }
        
        .user-card .card-title i {
            margin-right: 10px;
            font-size: 22px;
            color: var(--primary-color);
        }
        
        /* User Role Badges */
        .badge-student {
            background-color: rgba(75, 192, 192, 0.1);
            color: var(--student-color);
        }
        
        .badge-faculty {
            background-color: rgba(255, 99, 132, 0.1);
            color: var(--faculty-color);
        }
        
        .badge-staff {
            background-color: rgba(54, 162, 235, 0.1);
            color: var(--staff-color);
        }
        
        .badge-admin {
            background-color: rgba(255, 205, 86, 0.1);
            color: var(--admin-color);
        }
        
        /* User Table */
        .user-table {
            border-collapse: separate;
            border-spacing: 0;
        }
        
        .user-table thead th {
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
            border-bottom: 2px solid #dee2e6;
            font-weight: 600;
            color: #495057;
        }
        
        .user-table tbody tr {
            transition: all 0.2s ease;
        }
        
        .user-table tbody tr:hover {
            background-color: rgba(58, 123, 213, 0.05);
        }
        
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 10px;
        }
        
        /* Action Buttons */
        .action-btn {
            width: 30px;
            height: 30px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all 0.3s ease;
        }
        
        .action-btn:hover {
            transform: scale(1.1);
        }
        
        .btn-edit {
            background-color: rgba(58, 123, 213, 0.1);
            color: var(--primary-color);
            border: none;
        }
        
        .btn-delete {
            background-color: rgba(255, 99, 132, 0.1);
            color: #ff6384;
            border: none;
        }
        
        .btn-view {
            background-color: rgba(75, 192, 192, 0.1);
            color: var(--student-color);
            border: none;
        }
        
        /* Filter Controls */
        .filter-controls {
            background: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: var(--card-shadow);
        }
        
        /* User Stats */
        .user-stats-card {
            text-align: center;
            padding: 20px;
            border-radius: 8px;
            color: white;
            margin-bottom: 20px;
        }
        
        .user-stats-card h3 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .stats-students {
            background: linear-gradient(135deg, var(--student-color), #2ecc71);
        }
        
        .stats-faculty {
            background: linear-gradient(135deg, var(--faculty-color), #c0392b);
        }
        
        .stats-staff {
            background: linear-gradient(135deg, var(--staff-color), #2980b9);
        }
        
        .stats-admins {
            background: linear-gradient(135deg, var(--admin-color), #f39c12);
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .filter-controls .col-md-3 {
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
                            <h4 class="mb-0">User Management</h4>
                            <div class="d-flex align-items-center">
                                <button class="btn btn-primary me-2">
                                    <i class="fas fa-user-plus me-1"></i> Add User
                                </button>
                                <button class="btn btn-outline-secondary">
                                    <i class="fas fa-download me-1"></i> Export
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- User Stats -->
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="user-stats-card stats-students">
                            <i class="fas fa-user-graduate fs-4 mb-3"></i>
                            <h3>1,258</h3>
                            <p>Students</p>
                            <small class="opacity-75">+12.5% from last semester</small>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="user-stats-card stats-faculty">
                            <i class="fas fa-chalkboard-teacher fs-4 mb-3"></i>
                            <h3>85</h3>
                            <p>Faculty Members</p>
                            <small class="opacity-75">+5 new this month</small>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="user-stats-card stats-staff">
                            <i class="fas fa-user-tie fs-4 mb-3"></i>
                            <h3>42</h3>
                            <p>Staff Members</p>
                            <small class="opacity-75">2 on leave</small>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="user-stats-card stats-admins">
                            <i class="fas fa-user-shield fs-4 mb-3"></i>
                            <h3>8</h3>
                            <p>Administrators</p>
                            <small class="opacity-75">3 with full access</small>
                        </div>
                    </div>
                </div>

                <!-- Filter Controls -->
                <div class="row filter-controls">
                    <div class="col-md-3">
                        <label class="form-label">User Role</label>
                        <select class="form-select">
                            <option value="">All Roles</option>
                            <option value="student">Students</option>
                            <option value="faculty">Faculty</option>
                            <option value="staff">Staff</option>
                            <option value="admin">Administrators</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Department</label>
                        <select class="form-select">
                            <option value="">All Departments</option>
                            <option>Computer Science</option>
                            <option>Engineering</option>
                            <option>Business Administration</option>
                            <option>Arts & Humanities</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">Status</label>
                        <select class="form-select">
                            <option value="">All Statuses</option>
                            <option>Active</option>
                            <option>Inactive</option>
                            <option>Suspended</option>
                            <option>Pending</option>
                        </select>
                    </div>
                    <div class="col-md-3 d-flex align-items-end">
                        <button class="btn btn-primary w-100">
                            <i class="fas fa-filter me-1"></i> Filter Users
                        </button>
                    </div>
                </div>

                <!-- User Management Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card user-card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title mb-0"><i class="fas fa-users"></i> User List</h5>
                                    <div class="d-flex">
                                        <input type="text" class="form-control form-control-sm me-2" placeholder="Search users..." style="width: 200px;">
                                        <button class="btn btn-sm btn-outline-secondary">
                                            <i class="fas fa-sync-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table user-table table-hover table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col">User</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Department</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Last Login</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="user-avatar" alt="John Doe">
                                                        <div>
                                                            <h6 class="mb-0">John Doe</h6>
                                                            <small class="text-muted">ID: CM2023001</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-student">Student</span></td>
                                                <td>Computer Science</td>
                                                <td>john.doe@college.edu</td>
                                                <td>2023-05-18 14:32</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>
                                                    <button class="action-btn btn-view me-1" title="View Profile">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="action-btn btn-edit me-1" title="Edit User">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="action-btn btn-delete" title="Delete User">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://randomuser.me/api/portraits/women/44.jpg" class="user-avatar" alt="Alice Smith">
                                                        <div>
                                                            <h6 class="mb-0">Alice Smith</h6>
                                                            <small class="text-muted">ID: CM2023002</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-faculty">Faculty</span></td>
                                                <td>Electrical Engineering</td>
                                                <td>alice.smith@college.edu</td>
                                                <td>2023-05-20 09:15</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>
                                                    <button class="action-btn btn-view me-1" title="View Profile">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="action-btn btn-edit me-1" title="Edit User">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="action-btn btn-delete" title="Delete User">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://randomuser.me/api/portraits/men/67.jpg" class="user-avatar" alt="Robert Johnson">
                                                        <div>
                                                            <h6 class="mb-0">Robert Johnson</h6>
                                                            <small class="text-muted">ID: CM2023003</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-staff">Staff</span></td>
                                                <td>Administration</td>
                                                <td>robert.j@college.edu</td>
                                                <td>2023-05-15 11:42</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                                <td>
                                                    <button class="action-btn btn-view me-1" title="View Profile">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="action-btn btn-edit me-1" title="Edit User">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="action-btn btn-delete" title="Delete User">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://randomuser.me/api/portraits/women/28.jpg" class="user-avatar" alt="Sarah Williams">
                                                        <div>
                                                            <h6 class="mb-0">Sarah Williams</h6>
                                                            <small class="text-muted">ID: CM2023004</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-admin">Administrator</span></td>
                                                <td>IT Department</td>
                                                <td>sarah.w@college.edu</td>
                                                <td>2023-05-21 08:05</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td>
                                                    <button class="action-btn btn-view me-1" title="View Profile">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="action-btn btn-edit me-1" title="Edit User">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="action-btn btn-delete" title="Delete User">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="https://randomuser.me/api/portraits/men/75.jpg" class="user-avatar" alt="Michael Brown">
                                                        <div>
                                                            <h6 class="mb-0">Michael Brown</h6>
                                                            <small class="text-muted">ID: CM2023005</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-student">Student</span></td>
                                                <td>Business Administration</td>
                                                <td>michael.b@college.edu</td>
                                                <td>2023-05-10 16:20</td>
                                                <td><span class="badge bg-danger">Suspended</span></td>
                                                <td>
                                                    <button class="action-btn btn-view me-1" title="View Profile">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="action-btn btn-edit me-1" title="Edit User">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                    <button class="action-btn btn-delete" title="Delete User">
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
                                            Showing 1 to 5 of 24 entries
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
                <!-- end row -->

                <!-- Bulk Actions Card -->
                <div class="row">
                    <div class="col-12">
                        <div class="card user-card">
                            <div class="card-header">
                                <h5 class="card-title mb-0"><i class="fas fa-tasks"></i> Bulk Actions</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Bulk Action</label>
                                            <select class="form-select">
                                                <option selected>Choose action...</option>
                                                <option>Activate Selected</option>
                                                <option>Deactivate Selected</option>
                                                <option>Change Role</option>
                                                <option>Change Department</option>
                                                <option>Export Selected</option>
                                                <option>Delete Selected</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Apply to Selected Users</label>
                                            <div class="input-group">
                                                <button class="btn btn-primary" type="button">Apply</button>
                                                <input type="text" class="form-control" placeholder="0 users selected" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Quick User Creation</label>
                                            <button class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#addUserModal">
                                                <i class="fas fa-user-plus me-1"></i> Add New User
                                            </button>
                                        </div>
                                    </div>
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

<!-- Add User Modal (would be included in a real implementation) -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>User creation form would appear here in a real implementation.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Create User</button>
            </div>
        </div>
    </div>
</div>

<!-- Custom User Management Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize user table interactions
        const userRows = document.querySelectorAll('.user-table tbody tr');
        userRows.forEach(row => {
            // Add click event for row selection
            row.addEventListener('click', function(e) {
                if (!e.target.closest('.action-btn')) {
                    this.classList.toggle('table-active');
                    updateSelectedCount();
                }
            });
            
            // Add double click event for quick view
            row.addEventListener('dblclick', function() {
                // In a real implementation, this would open the user view modal
                console.log('View user: ' + this.querySelector('h6').textContent);
            });
        });
        
        // Update selected users count
        function updateSelectedCount() {
            const selectedCount = document.querySelectorAll('.user-table tbody tr.table-active').length;
            document.querySelector('input[placeholder="0 users selected"]').value = selectedCount + ' users selected';
        }
        
        // Initialize action buttons
        const viewButtons = document.querySelectorAll('.btn-view');
        viewButtons.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                // In a real implementation, this would open the user view modal
                const userName = this.closest('tr').querySelector('h6').textContent;
                console.log('View user: ' + userName);
            });
        });
        
        const editButtons = document.querySelectorAll('.btn-edit');
        editButtons.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                // In a real implementation, this would open the user edit modal
                const userName = this.closest('tr').querySelector('h6').textContent;
                console.log('Edit user: ' + userName);
            });
        });
        
        const deleteButtons = document.querySelectorAll('.btn-delete');
        deleteButtons.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                // In a real implementation, this would show a delete confirmation
                const userName = this.closest('tr').querySelector('h6').textContent;
                if (confirm('Are you sure you want to delete ' + userName + '?')) {
                    console.log('Delete user: ' + userName);
                }
            });
        });
        
        // Initialize add user modal
        const addUserModal = new bootstrap.Modal(document.getElementById('addUserModal'));
        
        // Filter button functionality
        document.querySelector('.filter-controls button').addEventListener('click', function() {
            // In a real implementation, this would filter the user table
            console.log('Filter users applied');
        });
    });
</script>

</body>
</html>