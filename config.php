<?php

$server = "localhost";
$username = "root";
$password = "root";
$database = "todo_app";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}


?>