<?php
$server="localhost";
$username="tech";
$password="password";
$database = "project";
$conn= mysqli_connect($server,$username,$password,$database);
if (!$conn){
    echo "error";
}
?>