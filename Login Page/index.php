<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Main Container -->
    <div class="main-container">
        <!-- Image Section -->
        <div class="image-container">
            <img src="Image.jpg" alt="Image"/>
        </div>

        <!-- Login & Registration Section -->
        <div class="login-container">
            <!-- Tabs for switching between Login and Register -->
            <div class="tabs">
                <button class="tab" onclick="showTab('login')">Login</button>
                <button class="tab" onclick="showTab('register')">Register</button>
            </div>

            <!-- Login Form -->
            <div id="login" class="tabcontent">
                <h1>Login to Account</h1>
                <!-- Display Login Error if Any -->
                <?php if(isset($_GET['loginError'])): ?>
                    <p style='color:red'><?php echo htmlspecialchars($_GET['loginError']); ?></p>
                <?php endif; ?>
                <!-- Login Form Elements -->
                <form id="loginForm" method="post" action="login.php">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit">Login</button>
                </form>
            </div>

            <!-- Registration Form -->
            <div id="register" class="tabcontent" style="display:none;">
                <h1>Register Account</h1>
                <!-- Display Registration Errors Here -->
                <p id='registerError' style='color:red'></p>
                <!-- Registration Form Elements -->
                <form id="registerForm">
                    <input type="text" name="firstName" placeholder="First Name">
                    <input type="text" name="lastName" placeholder="Last Name">
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" name="confirmPassword" placeholder="Confirm Password">
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
