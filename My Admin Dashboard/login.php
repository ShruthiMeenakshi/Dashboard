<?php 
$page_title = "Login | College Management System";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php echo $page_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium College Management System" name="description" />
    <meta content="EduTech Solutions" name="author" />
    
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    
    <!-- Custom Css -->
   <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <div class="auth-container">
        <div class="auth-wrapper animate__animated animate__fadeIn">
            <div class="auth-illustration">
                <div class="illustration-content">
                    <h2>Welcome to CollegePro</h2>
                    <p>Streamline your academic operations with our comprehensive college management system designed for modern educational institutions.</p>
                    <img src="assets/images/login-illustration.svg" alt="Education Illustration" class="floating">
                </div>
            </div>
            
            <div class="auth-form-container">
                <div class="auth-logo">
                    <img src="assets/images/logo-dark.svg" alt="CollegePro Logo">
                </div>
                
                <h1 class="auth-title">Sign In</h1>
                <p class="auth-subtitle">Please enter your credentials to access your account</p>
                
                <form class="auth-form" action="authenticate.php" method="POST">
                    <div class="form-group">
                        <label for="username" class="form-label">Email Address</label>
                        <div class="position-relative">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" class="form-control" id="username" name="username" placeholder="Enter your email address" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <div class="position-relative">
                            <i class="fas fa-lock input-icon"></i>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                            <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                        </div>
                    </div>
                    
                    <div class="remember-forgot">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <a href="forgot-password.php" class="forgot-link">Forgot password?</a>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-login btn-block w-100 mb-3">
                        <i class="fas fa-sign-in-alt me-2"></i> Login
                    </button>
                    
                    <div class="divider">
                        <span class="divider-text">or continue with</span>
                    </div>
                    
                    <div class="social-login">
                        <a href="#" class="social-btn google" title="Login with Google">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-btn facebook" title="Login with Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-btn twitter" title="Login with Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                    
                    <div class="auth-footer">
                        Don't have an account? <a href="register.php">Create an account</a>
                        <div class="mt-2">© <?php echo date("Y"); ?> CollegePro. All rights reserved.</div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    
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
        
        // Add animation to form inputs on focus
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.borderColor = '#4e73df';
                this.parentElement.style.boxShadow = '0 0 0 0.2rem rgba(78, 115, 223, 0.25)';
            });
            
            input.addEventListener('blur', function() {
                this.parentElement.style.borderColor = '#d1d3e2';
                this.parentElement.style.boxShadow = 'none';
            });
        });
        
        // Add ripple effect to buttons
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function(e) {
                const x = e.pageX - this.offsetLeft;
                const y = e.pageY - this.offsetTop;
                
                const ripple = document.createElement('span');
                ripple.classList.add('ripple-effect');
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                
                this.appendChild(ripple);
                
                setTimeout(() => {
                    ripple.remove();
                }, 1000);
            });
        });
    </script>
</body>
</html>