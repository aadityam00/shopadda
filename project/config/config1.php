<?php
session_start();
error_reporting(0);

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "shop_adda";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("database not connect" . mysqli_connect_error());
}
?>