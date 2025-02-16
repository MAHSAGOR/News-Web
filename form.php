<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SG News-Login_Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #3da98b;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background: #cdf3e8;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.663);
            padding: 30px;
            width: 100%;
            max-width: 400px;
            position: relative; /* To position the back button */
        }
        .form-container .nav-tabs {
            justify-content: center;
            margin-bottom: 20px;
        }
        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: transparent;
            border: none;
            font-size: 1.5rem;
            color: #005eb0;
            cursor: pointer;
        }
        .back-button:hover {
            color: #fb2929;
        }
    </style>
</head>
<body>
    <div id="form" class="form-container">
        <!-- Back Button -->
        <a href="index.php"><button class="back-button" id="backButton" aria-label="Back">&larr;</button></a>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">
                    Login
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">
                    Register
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <!-- Login Form -->
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
            <form action="process.php" method="POST">
                <input type="hidden" name="action" value="login">
                <div class="mb-3">
                    <label for="loginEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="loginEmail" name="email" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label for="loginPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

            </div>
            <!-- Registration Form -->
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                <form action="process.php" method="POST">
                    <input type="hidden" name="action" value="register">
                    <div class="mb-3">
                        <label for="registerName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="registerName" name="name" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="registerEmail" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="registerPassword" name="password" placeholder="Create a password" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Register</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const loginForm = document.querySelector("#login form");
        const registerForm = document.querySelector("#register form");

        // Login form validation
        loginForm.addEventListener("submit", function (event) {
            const email = document.querySelector("#loginEmail").value.trim();
            const password = document.querySelector("#loginPassword").value.trim();

            if (!email || !password) {
                event.preventDefault(); // Prevent form submission
                alert("Please fill in all fields.");
            } else if (!validateEmail(email)) {
                event.preventDefault();
                alert("Please enter a valid email address.");
            }
        });

        // Registration form validation
        registerForm.addEventListener("submit", function (event) {
            const name = document.querySelector("#registerName").value.trim();
            const email = document.querySelector("#registerEmail").value.trim();
            const password = document.querySelector("#registerPassword").value.trim();
            const confirmPassword = document.querySelector("#confirmPassword").value.trim();

            if (!name || !email || !password || !confirmPassword) {
                event.preventDefault();
                alert("Please fill in all fields.");
            } else if (!validateEmail(email)) {
                event.preventDefault();
                alert("Please enter a valid email address.");
            } else if (!validatePassword(password)) {
                event.preventDefault();
                alert("Password must contain at least 4 characters, including an uppercase letter, a lowercase letter, a number, and a special character.");
            } else if (password !== confirmPassword) {
                event.preventDefault();
                alert("Passwords do not match.");
            }
        });

        // Email validation helper function
        function validateEmail(email) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        // Password validation helper function
        function validatePassword(password) {
            // At least 4 characters, one uppercase letter, one lowercase letter, one number, and one special character
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#])[A-Za-z\d@$!%*?&#]{4,}$/;
            return passwordRegex.test(password);
        }
    });
    </script>

</body>
</html>
