<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    // Redirect to login page if not logged in
    header("Location: ../login/index.php");
    exit();
}
include_once "../db_conn.php";
?>
