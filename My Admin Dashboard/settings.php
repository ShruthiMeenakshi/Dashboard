<?php
$page_title = "System Settings | College Management System";
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php echo $page_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="College Management System" name="description" />
    <meta content="YourCompany" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <style>
        :root {
            --primary-color: #3a7bd5;
            --secondary-color: #00d2ff;
            --accent-color: #6c5ce7;
            --light-bg: #f8f9fa;
            --card-shadow: 0 4px 24px 0 rgba(34, 41, 47, 0.1);
            --system-color: #4bc0c0;
            --user-color: #ff6384;
            --security-color: #36a2eb;
            --notification-color: #ffcd56;
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

        .settings-card {
            border: none;
            border-radius: 10px;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 24px;
            border-top: 4px solid var(--primary-color);
        }

        .settings-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(34, 41, 47, 0.15);
        }

        .settings-card .card-header {
            background-color: white;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            padding: 15px 20px;
            border-radius: 10px 10px 0 0 !important;
        }

        .settings-card .card-body {
            padding: 1.5rem;
        }

        .settings-card .card-title {
            font-weight: 600;
            color: #2c304d;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .settings-card .card-title i {
            margin-right: 10px;
            font-size: 22px;
            color: var(--primary-color);
        }

        /* Settings Navigation */
        .settings-nav {
            position: sticky;
            top: 20px;
        }

        .settings-nav .nav-item {
            margin-bottom: 5px;
        }

        .settings-nav .nav-link {
            color: #495057;
            border-radius: 6px;
            padding: 12px 15px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
        }

        .settings-nav .nav-link i {
            margin-right: 10px;
            font-size: 18px;
            width: 24px;
            text-align: center;
        }

        .settings-nav .nav-link.active {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            box-shadow: 0 4px 15px rgba(58, 123, 213, 0.3);
        }

        .settings-nav .nav-link:hover:not(.active) {
            background-color: rgba(58, 123, 213, 0.1);
            color: var(--primary-color);
        }

        /* Form Styling */
        .settings-form .form-group {
            margin-bottom: 1.5rem;
        }

        .settings-form label {
            font-weight: 500;
            color: #495057;
            margin-bottom: 8px;
        }

        /* Toggle Switches */
        .form-switch .form-check-input {
            width: 48px;
            height: 24px;
            cursor: pointer;
        }

        /* Section Badges */
        .section-badge {
            padding: 6px 12px;
            font-weight: 500;
            border-radius: 50px;
            font-size: 12px;
            margin-left: 10px;
        }

        .system-badge {
            background-color: rgba(75, 192, 192, 0.1);
            color: var(--system-color);
        }

        .user-badge {
            background-color: rgba(255, 99, 132, 0.1);
            color: var(--user-color);
        }

        .security-badge {
            background-color: rgba(54, 162, 235, 0.1);
            color: var(--security-color);
        }

        .notification-badge {
            background-color: rgba(255, 205, 86, 0.1);
            color: var(--notification-color);
        }

        /* Save Button */
        .save-btn {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border: none;
            padding: 10px 25px;
            font-weight: 500;
            color: white;
            border-radius: 50px;
            transition: all 0.3s ease;
        }

        .save-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(58, 123, 213, 0.3);
            color: white;
        }

        /* System Status */
        .system-status {
            padding: 15px;
            border-radius: 8px;
            background-color: white;
            box-shadow: var(--card-shadow);
            margin-bottom: 20px;
        }

        .status-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .status-item:last-child {
            border-bottom: none;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .settings-nav {
                position: relative;
                top: 0;
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body data-sidebar="dark">

    <div id="layout-wrapper">

        <?php include 'includes/topbar.php'; ?>
        <?php include 'includes/sidebar.php'; ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">System Settings</h4>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-outline-secondary me-2" id="restoreDefaultsBtn">
                                        <i class="fas fa-history me-1"></i> Restore Defaults
                                    </button>
                                    <button class="btn save-btn" id="saveChangesBtn">
                                        <i class="fas fa-save me-1"></i> Save Changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card settings-nav">
                                <div class="card-body">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#system-settings" data-bs-toggle="tab">
                                                <i class="fas fa-cog"></i> System Settings
                                                <span class="section-badge system-badge">Admin</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#user-settings" data-bs-toggle="tab">
                                                <i class="fas fa-user-cog"></i> User Management
                                                <span class="section-badge user-badge">All</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#security-settings" data-bs-toggle="tab">
                                                <i class="fas fa-shield-alt"></i> Security
                                                <span class="section-badge security-badge">Critical</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#notification-settings" data-bs-toggle="tab">
                                                <i class="fas fa-bell"></i> Notifications
                                                <span class="section-badge notification-badge">Custom</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#academic-settings" data-bs-toggle="tab">
                                                <i class="fas fa-graduation-cap"></i> Academic
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#email-settings" data-bs-toggle="tab">
                                                <i class="fas fa-envelope"></i> Email
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#backup-settings" data-bs-toggle="tab">
                                                <i class="fas fa-database"></i> Backup
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#api-settings" data-bs-toggle="tab">
                                                <i class="fas fa-code"></i> API
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="system-status">
                                <h6 class="mb-3"><i class="fas fa-info-circle me-2"></i>System Status</h6>
                                <div class="status-item">
                                    <span>System Version</span>
                                    <strong>v3.2.1</strong>
                                </div>
                                <div class="status-item">
                                    <span>Last Updated</span>
                                    <strong>May 15, 2023</strong>
                                </div>
                                <div class="status-item">
                                    <span>Database Size</span>
                                    <strong>245 MB</strong>
                                </div>
                                <div class="status-item">
                                    <span>Active Users</span>
                                    <strong>48</strong>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="system-settings">
                                    <div class="card settings-card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0"><i class="fas fa-cog"></i> General Settings
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <form class="settings-form" id="generalSettingsForm">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="institutionName">Institution Name</label>
                                                            <input type="text" class="form-control"
                                                                id="institutionName" value="University of Technology">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="institutionLogo">Institution Logo</label>
                                                            <input type="file" class="form-control"
                                                                id="institutionLogo">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="systemTimezone">System Timezone</label>
                                                    <select class="form-select" id="systemTimezone">
                                                        <option>(UTC) Coordinated Universal Time</option>
                                                        <option selected>(UTC+05:30) India Standard Time</option>
                                                        <option>(UTC-05:00) Eastern Time</option>
                                                        <option>(UTC+01:00) Central European Time</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="dateFormat">Date Format</label>
                                                    <select class="form-select" id="dateFormat">
                                                        <option>YYYY-MM-DD (2023-05-20)</option>
                                                        <option selected>DD/MM/YYYY (20/05/2023)</option>
                                                        <option>MM/DD/YYYY (05/20/2023)</option>
                                                        <option>Month D, Y (May 20, 2023)</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>System Maintenance Mode</label>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="maintenanceMode">
                                                        <label class="form-check-label" for="maintenanceMode">Enable
                                                            maintenance mode</label>
                                                    </div>
                                                    <small class="text-muted">When enabled, only administrators can
                                                        access the system</small>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="card settings-card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0"><i class="fas fa-paint-brush"></i> Theme &
                                                Appearance</h5>
                                        </div>
                                        <div class="card-body">
                                            <form class="settings-form" id="themeAppearanceForm">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="primaryColor">Primary Color</label>
                                                            <input type="color" class="form-control form-control-color"
                                                                id="primaryColor" value="#3a7bd5"
                                                                title="Choose primary color">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="secondaryColor">Secondary Color</label>
                                                            <input type="color" class="form-control form-control-color"
                                                                id="secondaryColor" value="#00d2ff"
                                                                title="Choose secondary color">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="defaultTheme">Default Theme</label>
                                                    <select class="form-select" id="defaultTheme">
                                                        <option>Light</option>
                                                        <option selected>Dark</option>
                                                        <option>System Preference</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="sidebarStyle">Sidebar Style</label>
                                                    <select class="form-select" id="sidebarStyle">
                                                        <option selected>Default</option>
                                                        <option>Compact</option>
                                                        <option>Icon Only</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="user-settings">
                                    <div class="card settings-card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0"><i class="fas fa-users"></i> User Registration
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <form class="settings-form" id="userRegistrationForm">
                                                <div class="form-group">
                                                    <label>Allow New Registrations</label>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="allowRegistrations" checked>
                                                        <label class="form-check-label"
                                                            for="allowRegistrations">Enable user
                                                            registration</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="registrationMethod">Registration Method</label>
                                                    <select class="form-select" id="registrationMethod">
                                                        <option selected>Email Verification Required</option>
                                                        <option>Admin Approval Required</option>
                                                        <option>Open Registration</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="defaultUserRole">Default User Role</label>
                                                    <select class="form-select" id="defaultUserRole">
                                                        <option>Student</option>
                                                        <option selected>Faculty</option>
                                                        <option>Staff</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="usernameFormat">Username Format</label>
                                                    <select class="form-select" id="usernameFormat">
                                                        <option selected>Firstname.Lastname</option>
                                                        <option>Email Address</option>
                                                        <option>Custom ID</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="card settings-card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0"><i class="fas fa-user-shield"></i> User
                                                Permissions</h5>
                                        </div>
                                        <div class="card-body">
                                            <form class="settings-form" id="userPermissionsForm">
                                                <div class="form-group">
                                                    <label>Profile Updates</label>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="allowProfileUpdates" checked>
                                                        <label class="form-check-label"
                                                            for="allowProfileUpdates">Allow users to update their
                                                            profiles</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Password Changes</label>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="allowPasswordChanges" checked>
                                                        <label class="form-check-label"
                                                            for="allowPasswordChanges">Allow users to change
                                                            passwords</label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Account Deletion</label>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="allowAccountDeletion">
                                                        <label class="form-check-label"
                                                            for="allowAccountDeletion">Allow users to delete
                                                            accounts</label>
                                                    </div>
                                                    <small class="text-muted">When enabled, users can request account
                                                        deletion</small>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="security-settings">
                                    <div class="card settings-card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0"><i class="fas fa-lock"></i> Authentication
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <form class="settings-form" id="authenticationForm">
                                                <div class="form-group">
                                                    <label for="passwordPolicy">Password Policy</label>
                                                    <select class="form-select" id="passwordPolicy">
                                                        <option>Basic (6 characters minimum)</option>
                                                        <option selected>Standard (8 characters with complexity)</option>
                                                        <option>Strong (12 characters with complexity)</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Two-Factor Authentication</label>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="enable2FA">
                                                        <label class="form-check-label" for="enable2FA">Require 2FA for
                                                            all users</label>
                                                    </div>
                                                    <small class="text-muted">Users will need to set up authenticator
                                                        apps</small>
                                                </div>

                                                <div class="form-group">
                                                    <label for="sessionTimeout">Session Timeout</label>
                                                    <select class="form-select" id="sessionTimeout">
                                                        <option>15 minutes</option>
                                                        <option selected>30 minutes</option>
                                                        <option>1 hour</option>
                                                        <option>4 hours</option>
                                                        <option>Never (until logout)</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Failed Login Attempts</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <input type="number" class="form-control" id="failedAttempts"
                                                                value="5" min="1" max="10">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <select class="form-select" id="failedAttemptAction">
                                                                <option selected>Lock account for 30 minutes</option>
                                                                <option>Require admin unlock</option>
                                                                <option>Require email verification</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="card settings-card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0"><i class="fas fa-shield-virus"></i> Security
                                                Policies</h5>
                                        </div>
                                        <div class="card-body">
                                            <form class="settings-form" id="securityPoliciesForm">
                                                <div class="form-group">
                                                    <label>IP Restrictions</label>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="enableIPRestrictions">
                                                        <label class="form-check-label"
                                                            for="enableIPRestrictions">Enable IP whitelisting</label>
                                                    </div>
                                                    <small class="text-muted">Restrict access to specific IP
                                                        addresses</small>
                                                </div>

                                                <div class="form-group">
                                                    <label for="allowedIPAddresses">Allowed IP Addresses</label>
                                                    <textarea class="form-control" id="allowedIPAddresses" rows="3"
                                                        placeholder="Enter one IP per line"></textarea>
                                                </div>

                                                <div class="form-group">
                                                    <label>Content Security Policy</label>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="enableCSP"
                                                            checked>
                                                        <label class="form-check-label" for="enableCSP">Enable CSP
                                                            headers</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="notification-settings">
                                    <div class="card settings-card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0"><i class="fas fa-bell"></i> Email
                                                Notifications</h5>
                                        </div>
                                        <div class="card-body">
                                            <form class="settings-form" id="emailNotificationForm">
                                                <div class="form-group">
                                                    <label>New User Registration</label>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="notifyNewUser" checked>
                                                        <label class="form-check-label" for="notifyNewUser">Send email
                                                            to admins</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Course Enrollment</label>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="notifyEnrollment">
                                                        <label class="form-check-label"
                                                            for="notifyEnrollment">Notify students and
                                                            faculty</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="notificationFrequency">Digest Frequency</label>
                                                    <select class="form-select" id="notificationFrequency">
                                                        <option>Daily</option>
                                                        <option selected>Weekly</option>
                                                        <option>Monthly</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="academic-settings">
                                    <div class="card settings-card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0"><i class="fas fa-graduation-cap"></i> Academic
                                                Year & Terms</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-muted">Academic settings will be configured here.</p>
                                            <form class="settings-form" id="academicSettingsForm">
                                                <div class="form-group">
                                                    <label for="currentAcademicYear">Current Academic Year</label>
                                                    <input type="text" class="form-control" id="currentAcademicYear"
                                                        value="2024-2025">
                                                </div>
                                                <div class="form-group">
                                                    <label for="numberOfTerms">Number of Terms/Semesters</label>
                                                    <input type="number" class="form-control" id="numberOfTerms"
                                                        value="2" min="1">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="email-settings">
                                    <div class="card settings-card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0"><i class="fas fa-envelope"></i> SMTP Settings
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-muted">Configure your email sending settings.</p>
                                            <form class="settings-form" id="emailSettingsForm">
                                                <div class="form-group">
                                                    <label for="smtpHost">SMTP Host</label>
                                                    <input type="text" class="form-control" id="smtpHost"
                                                        placeholder="smtp.example.com">
                                                </div>
                                                <div class="form-group">
                                                    <label for="smtpPort">SMTP Port</label>
                                                    <input type="number" class="form-control" id="smtpPort" value="587">
                                                </div>
                                                <div class="form-group">
                                                    <label for="smtpUsername">SMTP Username</label>
                                                    <input type="text" class="form-control" id="smtpUsername"
                                                        placeholder="user@example.com">
                                                </div>
                                                <div class="form-group">
                                                    <label for="smtpPassword">SMTP Password</label>
                                                    <input type="password" class="form-control" id="smtpPassword"
                                                        placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                                                </div>
                                                <div class="form-group">
                                                    <label>Enable SSL/TLS</label>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="enableSslTls" checked>
                                                        <label class="form-check-label" for="enableSslTls">Use secure
                                                            connection</label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="backup-settings">
                                    <div class="card settings-card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0"><i class="fas fa-database"></i> Database
                                                Backup</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-muted">Manage your database backup settings.</p>
                                            <form class="settings-form" id="backupSettingsForm">
                                                <div class="form-group">
                                                    <label for="backupFrequency">Backup Frequency</label>
                                                    <select class="form-select" id="backupFrequency">
                                                        <option>Daily</option>
                                                        <option selected>Weekly</option>
                                                        <option>Monthly</option>
                                                        <option>Manual</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="backupRetention">Backup Retention</label>
                                                    <input type="number" class="form-control" id="backupRetention"
                                                        value="7" min="1">
                                                    <small class="text-muted">Number of days to retain backups.</small>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-primary" id="initiateBackup">
                                                        <i class="fas fa-arrow-alt-circle-down me-1"></i> Initiate
                                                        Manual Backup
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="api-settings">
                                    <div class="card settings-card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0"><i class="fas fa-code"></i> API Access</h5>
                                        </div>
                                        <div class="card-body">
                                            <p class="text-muted">Configure API access and keys.</p>
                                            <form class="settings-form" id="apiSettingsForm">
                                                <div class="form-group">
                                                    <label>Enable API Access</label>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="enableApiAccess">
                                                        <label class="form-check-label" for="enableApiAccess">Allow external applications to connect</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="apiKey">API Key</label>
                                                    <input type="text" class="form-control" id="apiKey"
                                                        value="********************" readonly>
                                                </div>
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-info" id="generateApiKey">
                                                        <i class="fas fa-key me-1"></i> Generate New API Key
                                                    </button>
                                                </div>
                                                <div class="form-group">
                                                    <label for="allowedApiIps">Allowed API IP Addresses</label>
                                                    <textarea class="form-control" id="allowedApiIps" rows="3"
                                                        placeholder="Enter one IP per line"></textarea>
                                                    <small class="text-muted">Only these IPs can use the API.</small>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> </div>
            <?php include 'includes/footer.php'; ?>
        </div>
        </div>
    <?php include 'includes/right-sidebar.php'; ?>
    <div class="rightbar-overlay"></div>

    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Tab switching logic
            const navLinks = document.querySelectorAll('.settings-nav .nav-link');
            const tabPanes = document.querySelectorAll('.tab-pane');

            navLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Remove active class from all nav links and tab panes
                    navLinks.forEach(nav => nav.classList.remove('active'));
                    tabPanes.forEach(pane => pane.classList.remove('show', 'active'));

                    // Add active class to the clicked nav link
                    this.classList.add('active');

                    // Show the corresponding tab pane
                    const targetId = this.getAttribute('href');
                    document.querySelector(targetId).classList.add('show', 'active');
                });
            });

            // Handle "Save Changes" button click
            const saveChangesBtn = document.getElementById('saveChangesBtn');
            saveChangesBtn.addEventListener('click', function () {
                // Get the currently active tab
                const activeTabPane = document.querySelector('.tab-pane.show.active');
                if (activeTabPane) {
                    const formId = activeTabPane.querySelector('form')?.id; // Get the ID of the form within the active tab
                    if (formId) {
                        const form = document.getElementById(formId);
                        const formData = new FormData(form);
                        const settings = {};

                        // Collect form data
                        for (let [name, value] of formData.entries()) {
                            // For checkboxes, check if they are checked
                            const inputElement = form.querySelector(`[name="${name}"]`);
                            if (inputElement && inputElement.type === 'checkbox') {
                                settings[inputElement.id] = inputElement.checked;
                            } else {
                                settings[inputElement.id || name] = value; // Use ID if available, otherwise name
                            }
                        }

                        console.log(`Saving changes for ${activeTabPane.id}:`, settings);
                        alert(`Settings for ${activeTabPane.id.replace('-', ' ')} saved successfully! (Check console for data)`);
                        // In a real application, you would send this data to your backend (e.g., via AJAX)
                        // Example: fetch('/api/save-settings', { method: 'POST', body: JSON.stringify(settings) });
                    } else {
                        console.warn("No form found in the active tab to save.");
                        alert("No settings to save in this section.");
                    }
                } else {
                    console.warn("No active tab found.");
                }
            });

            // Handle "Restore Defaults" button click
            const restoreDefaultsBtn = document.getElementById('restoreDefaultsBtn');
            restoreDefaultsBtn.addEventListener('click', function () {
                // In a real application, you would have default values stored and reload them
                // For demonstration, we'll just log and alert.
                console.log("Restoring default settings...");
                alert("Settings restored to defaults!");
                // You might want to refresh the page or reset form fields programmatically
                // e.g., document.getElementById('generalSettingsForm').reset();
            });

            // Example of handling specific form field changes (optional, but good for dynamic UI)
            const maintenanceModeSwitch = document.getElementById('maintenanceMode');
            if (maintenanceModeSwitch) {
                maintenanceModeSwitch.addEventListener('change', function () {
                    console.log('Maintenance Mode is now:', this.checked ? 'Enabled' : 'Disabled');
                    // You could trigger an immediate backend update or UI change here
                });
            }

            const enableIPRestrictionsSwitch = document.getElementById('enableIPRestrictions');
            const allowedIPAddressesTextarea = document.getElementById('allowedIPAddresses');
            if (enableIPRestrictionsSwitch && allowedIPAddressesTextarea) {
                // Initialize state based on checkbox
                allowedIPAddressesTextarea.disabled = !enableIPRestrictionsSwitch.checked;

                enableIPRestrictionsSwitch.addEventListener('change', function () {
                    allowedIPAddressesTextarea.disabled = !this.checked;
                    console.log('IP Restrictions are now:', this.checked ? 'Enabled' : 'Disabled');
                });
            }

            const enableApiAccessSwitch = document.getElementById('enableApiAccess');
            const apiKeyInput = document.getElementById('apiKey');
            const generateApiKeyBtn = document.getElementById('generateApiKey');
            const allowedApiIpsTextarea = document.getElementById('allowedApiIps');

            if (enableApiAccessSwitch && apiKeyInput && generateApiKeyBtn && allowedApiIpsTextarea) {
                // Initialize state
                const isApiEnabled = enableApiAccessSwitch.checked;
                apiKeyInput.disabled = !isApiEnabled;
                generateApiKeyBtn.disabled = !isApiEnabled;
                allowedApiIpsTextarea.disabled = !isApiEnabled;

                enableApiAccessSwitch.addEventListener('change', function() {
                    const isChecked = this.checked;
                    apiKeyInput.disabled = !isChecked;
                    generateApiKeyBtn.disabled = !isChecked;
                    allowedApiIpsTextarea.disabled = !isChecked;
                    console.log('API Access is now:', isChecked ? 'Enabled' : 'Disabled');
                });

                generateApiKeyBtn.addEventListener('click', function() {
                    const newKey = 'GeneratedAPIKey_' + Math.random().toString(36).substring(2, 15);
                    apiKeyInput.value = newKey;
                    alert('New API Key Generated: ' + newKey);
                    console.log('New API Key Generated:', newKey);
                });
            }

            const initiateBackupBtn = document.getElementById('initiateBackup');
            if (initiateBackupBtn) {
                initiateBackupBtn.addEventListener('click', function() {
                    if (confirm('Are you sure you want to initiate a manual backup?')) {
                        alert('Manual backup initiated!');
                        console.log('Manual backup initiated.');
                        // In a real application, you'd send an AJAX request to trigger the backup
                    }
                });
            }
        });
    </script>
</body>

</html>