<?php

$hostname="localhost";
$dbuser="root";
$dbpassword="";
$dbname="dpa";

$conn = mysqli_connect($hostname, $dbuser, $dbpassword, $dbname);
if (!$conn) {
    die("Something went wrong");
}
?>