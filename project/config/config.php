<?php
session_start();
error_reporting(0);

$dbhost = "sql103.infinityfree.com";
$dbuser = "if0_39654695";
$dbpass = "aaditya25";
$dbname = "if0_39654695_shop_adda";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("database not connect" . mysqli_connect_error());
}
?>