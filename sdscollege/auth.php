<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function checkAuth($roles = null)
{
    if (!isset($_SESSION['admin_id'])) {
        header("Location: login.php");
        exit();
    }

    // ROLE HIERARCHY
    $roleHierarchy = [
        'superadmin' => ['superadmin','admin'],
        'admin' => ['admin']
    ];

    if ($roles !== null) {

        $roles = (array)$roles;

        $userRole = $_SESSION['role'] ?? 'admin';

        if (!isset($roleHierarchy[$userRole]) ||
            !array_intersect($roles, $roleHierarchy[$userRole])) {

            header("Location: unauthorized.php");
            exit();
        }
    }

    // Ensure campus exists to avoid warnings
    if (!isset($_SESSION['campus'])) {
        $_SESSION['campus'] = 'main';
    }

    return $_SESSION;
}