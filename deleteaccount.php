<?php
session_start();
$server = "localhost";
$username = "tech";
$password = "password";
$database = "project";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$del = $_SESSION['username'];
        $delete_sql = "DELETE FROM `user` WHERE username='$del'";
        if (mysqli_query($conn, $delete_sql)) {
            echo "Account deleted successfully";
        } else {
            echo "Error deleting account: " . mysqli_error($conn);
        }
    session_unset();
    session_destroy();
    header("location: login.php")


?>
