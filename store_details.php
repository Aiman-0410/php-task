<?php
session_start(); // Start session

// Store bank details in session variables
$_SESSION['bank_name'] = "Axis Bank";
$_SESSION['account_number'] = "SSA12345678";
$_SESSION['account_holder'] = "Muhammad";
$_SESSION['balance'] = 50000;

// Confirmation message
echo "<p><strong>Bank details stored in session.</strong></p>";
?>