<?php
include("App/Global-scripts/init_register.php");
session_start();
if (!isset($_SESSION['username'])){
header('location:index.php');
}

$username = $_SESSION['username'];

$query=mysql_query ("SELECT * FROM users WHERE username ='$username'") or die(mysql_error());
$row=mysql_fetch_array($query);
$username=$row['username'];
$email=$row['email'];
$password=$row['password'];
?>