<?php
session_start();

// Redirect to login if not authenticated
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

// Get user from session
$user = $_SESSION['user'];

// Set page title based on role
$page_title = "Dashboard | " . ucfirst($user['role']) . " Panel";

// Redirect to appropriate dashboard if accessing index.php directly
if (basename($_SERVER['PHP_SELF']) == 'index.php') {
    header("Location: " . getDashboardByRole($user['role']));
    exit;
}

function getDashboardByRole($role) {
    switch (strtolower($role)) {
        case 'admin': return 'admin/dashboard.php';
        case 'teacher': return 'teacher/dashboard.php';
        case 'student': return 'student/dashboard.php';
        default: return 'dashboard.php';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title><?php echo $page_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="College Management System" name="description" />
    <meta content="YourCompany" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Simple loading CSS -->
    <style>
        .auth-loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        .spinner {
            width: 3rem;
            height: 3rem;
        }
    </style>
</head>

<body>
    <!-- Loading indicator while redirecting -->
    <div class="auth-loading">
        <div class="text-center">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
            <p class="mt-2">Redirecting to your dashboard...</p>
        </div>
    </div>

    <!-- JavaScript to handle immediate redirect -->
    <script>
        // Redirect immediately to the appropriate dashboard
        window.location.href = "<?php echo getDashboardByRole($user['role']); ?>";
    </script>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>