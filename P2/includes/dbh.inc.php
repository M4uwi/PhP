<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbPassword);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}