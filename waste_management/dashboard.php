<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$userRole = $_SESSION['role'];

switch ($userRole) {
    case 'admin':
        include 'admin_dashboard.php';
        break;
    case 'collector':
        include 'collector_dashboard.php';
        break;
    case 'user':
        include 'user_dashboard.php';
        break;
    default:
        echo "Access denied.";
}
?>
