<?php
session_start();
$error = "";
if (isset($_GET['error'])) {
    $error = "Invalid username or password.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login | St. Dominic Savio College</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: url('assets/images/campus3.jpg') center/cover no-repeat; /* PUT YOUR BG HERE */
            position: relative;
            font-family: "Segoe UI", sans-serif;
        }

        /* Dark overlay for readability */
        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            backdrop-filter: blur(0px);
        }

        .login-card {
            position: relative;
            z-index: 2;
            max-width: 430px;
            padding: 35px;
            margin: 90px auto;
            background: #ffffff86;
            border-radius: 15px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0);
        }

        .logo {
            width: 85px;
            display: block;
            margin: 0 auto 10px;
        }

        h3 {
            color: #0a472e; /* SDSC green */
            font-weight: 700;
            text-align: center;
        }

        label {
            font-weight: 600;
        }

        .btn-login {
            background: #0a472e;
            color: white;
            border-radius: 8px;
            padding: 10px;
            font-weight: 600;
            transition: 0.3s;
        }
        .btn-login:hover {
            background: #0d5f3b;
        }

        .error-text {
            color: red;
            font-weight: 600;
            text-align: center;
            margin-top: -5px;
            margin-bottom: 15px;
        }

        .toggle-eye {
            cursor: pointer;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            color: #f7f7f7;
            font-size: 14px;
            position: relative;
            z-index: 2;
        }
    </style>
</head>

<body>

    <div class="login-card">
        <img src="../sdscollege/assets/images/logo.png" class="logo">
        <h3>Admin Login</h3>
        <p class="text-center text-muted mb-3">Please enter your credentials</p>

        <?php if ($error != ""): ?>
            <div class="error-text"><?= $error ?></div>
        <?php endif; ?>

        <form action="admin_auth.php" method="POST">

            <!-- Username -->
            <div class="mb-3">
                <label class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text bg-white">
                        <i class="fa fa-user text-success"></i>
                    </span>
                    <input type="text" name="username" class="form-control" placeholder="Enter username" required>
                </div>
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label class="form-label">Password</label>
                <div class="input-group">
                    <span class="input-group-text bg-white">
                        <i class="fa fa-lock text-success"></i>
                    </span>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter password" required>
                    <span class="input-group-text bg-white toggle-eye" onclick="togglePassword()">
                        <i id="eyeIcon" class="fa fa-eye-slash"></i>
                    </span>
                </div>
            </div>

            <button type="submit" name="login" class="btn btn-login w-100">
                <i class="fa fa-sign-in-alt me-1"></i> Login
            </button>

            <!-- ⭐ VIEW ONLY BUTTON (added safely) -->
<a href="index.php" class="btn w-100 mt-3" 
   style="background:#ffffff; border:2px solid #0a472e; color:#0a472e; font-weight:600; border-radius:8px;">
    <i class="fa fa-eye me-1"></i> Not Admin? View-Only.
</a>
        </form>
    </div>

    <div class="footer">
        © <?= date("Y"); ?> St. Dominic Savio College • Love • Leadership • Service
    </div>  

    <script>
        function togglePassword() {
            let pw = document.getElementById("password");
            let icon = document.getElementById("eyeIcon");

            if (pw.type === "password") {
                pw.type = "text";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            } else {
                pw.type = "password";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            }
        }
    </script>

</body>
</html>
