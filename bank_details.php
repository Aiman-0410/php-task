<?php
session_start(); // Resume session

// Check if session variables are set
if(isset($_SESSION['bank_name']) && isset($_SESSION['account_number']) && isset($_SESSION['account_holder']) && isset($_SESSION['balance'])) {
    echo "<p><strong>Bank Details:</strong></p>";
    echo "<p>Bank Name: " . $_SESSION['bank_name'] . "</p>";
    echo "<p>Account Number: " . $_SESSION['account_number'] . "</p>";
    echo "<p>Account Holder: " . $_SESSION['account_holder'] . "</p>";
    echo "<p>Balance: ₹" . $_SESSION['balance'] . "</p>";
} else {
    echo "<p><strong>No bank details found in session.</strong></p>";
}
?>