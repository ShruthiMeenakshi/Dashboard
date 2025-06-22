<?php
session_start();
require_once 'config/database.php';

$page_title = "Register | College Management System";

// Initialize variables
$errors = [];
$username = $email = $first_name = $last_name = '';

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $role_id = 3; // Default role_id for students (adjust as needed)

    // Validate inputs
    if (empty($username)) $errors[] = "Username is required";
    if (empty($email)) $errors[] = "Email is required";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format";
    if (empty($password)) $errors[] = "Password is required";
    if ($password !== $confirm_password) $errors[] = "Passwords don't match";
    if (empty($first_name)) $errors[] = "First name is required";
    if (empty($last_name)) $errors[] = "Last name is required";

    // Check if username/email exists
    if (empty($errors)) {
        try {
            $stmt = $conn->prepare("SELECT user_id FROM users WHERE username = ? OR email = ?");
            $stmt->execute([$username, $email]);
            if ($stmt->rowCount() > 0) {
                $errors[] = "Username or email already exists";
            }
        } catch (PDOException $e) {
            $errors[] = "Database error. Please try again later.";
        }
    }

    // Create account if no errors
    if (empty($errors)) {
        try {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (username, email, password_hash, role_id, first_name, last_name) 
                                   VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([$username, $email, $password_hash, $role_id, $first_name, $last_name]);

            $_SESSION['registration_success'] = true;
            header("Location: login.php");
            exit;
        } catch (PDOException $e) {
            $errors[] = "Registration failed. Please try again.";
        }
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
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        .register-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .form-icon {
            position: absolute;
            z-index: 2;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: #aaa;
        }
        .form-control {
            padding-left: 2.375rem;
        }
        .password-toggle {
            position: absolute;
            right: 10px;
            top: 10px;
            cursor: pointer;
            color: #aaa;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="register-container">
            <div class="text-center mb-4">
                <img src="assets/images/logo-dark.svg" alt="Logo" height="40">
                <h3 class="mt-3">Create Account</h3>
                <p class="text-muted">Fill in the form to register</p>
            </div>

            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <?php foreach ($errors as $error): ?>
                        <p class="mb-1"><?php echo htmlspecialchars($error); ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <form method="POST" action="register.php">
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <div class="position-relative">
                        <i class="fas fa-user form-icon"></i>
                        <input type="text" class="form-control" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <div class="position-relative">
                        <i class="fas fa-envelope form-icon"></i>
                        <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <div class="position-relative">
                        <i class="fas fa-id-card form-icon"></i>
                        <input type="text" class="form-control" name="first_name" value="<?php echo htmlspecialchars($first_name); ?>" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <div class="position-relative">
                        <i class="fas fa-id-card form-icon"></i>
                        <input type="text" class="form-control" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="position-relative">
                        <i class="fas fa-lock form-icon"></i>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <div class="position-relative">
                        <i class="fas fa-lock form-icon"></i>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                    </div>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="terms" required>
                    <label class="form-check-label" for="terms">I agree to the <a href="#">Terms and Conditions</a></label>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>

                <div class="mt-3 text-center">
                    <p>Already have an account? <a href="login.php">Login here</a></p>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this;
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });

        // Simple password strength indicator
        document.getElementById('password').addEventListener('input', function() {
            const strengthBadge = document.getElementById('password-strength');
            if (!strengthBadge) return;
            
            const strength = {
                0: "Very Weak",
                1: "Weak",
                2: "Medium",
                3: "Strong",
                4: "Very Strong"
            };
            
            let score = 0;
            if (this.value.match(/[a-z]+/)) score++;
            if (this.value.match(/[A-Z]+/)) score++;
            if (this.value.match(/[0-9]+/)) score++;
            if (this.value.match(/[$@#&!]+/)) score++;
            
            strengthBadge.innerHTML = strength[score];
            strengthBadge.className = 'badge bg-' + 
                (score < 2 ? 'danger' : score < 3 ? 'warning' : score < 4 ? 'info' : 'success');
        });
    </script>
</body>
</html>