<?php
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "addressbook");
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['email'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT email from registration where email = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['email'];
?>
