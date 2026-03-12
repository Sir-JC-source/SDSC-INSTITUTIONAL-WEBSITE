<?php
session_start();
include('includes/dbcon.php');

function checkAuth($role = null)
{
    if (!isset($_SESSION['admin_id'])) {
        header("Location: login.php");
        exit();
    }

    if ($role && isset($_SESSION['role']) && $_SESSION['role'] !== $role) {
        header("Location: unauthorized.php");
        exit();
    }

    return $_SESSION;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM admins WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {

        // Plain text password check
        if ($password === $row['password']) {

            /* STORE SESSION */
$_SESSION['admin_id'] = $row['id'];
$_SESSION['username'] = $row['username'];
$_SESSION['fullname'] = $row['fullname'];
$_SESSION['role'] = $row['role'];
$_SESSION['branch'] = $row['branch'];

/* REDIRECT BASED ON ROLE */

if ($row['role'] === 'superadmin') {

    // Super admin can manage both campuses
    header("Location: admin_dashboard.php");
    exit();

}

if ($row['role'] === 'admin') {

    if ($row['branch'] === 'ibaan') {

        header("Location: ibaan_dashboard.php");

    } else {

        header("Location: admin_dashboard.php");

    }

    exit();

}

            // ADMIN → CHECK BRANCH
            if ($row['role'] === 'admin') {

                if ($row['branch'] === 'ibaan') {
                    header("Location: ibaan_dashboard.php");
                } else {
                    header("Location: admin_dashboard.php");
                }

                exit();
            }
        }
    }

    /* LOGIN FAILED */
    header("Location: login.php?error=1");
    exit();
}
?>