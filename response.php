<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$con = new mysqli("localhost","root","123","tap");

if ($con -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con -> connect_error;
    exit();
  }

$sname = mysqli_real_escape_string($con, $_REQUEST['C']);
$snum = mysqli_real_escape_string($con, $_REQUEST['D']);
$semail = mysqli_real_escape_string($con, $_REQUEST['B']);

$sname = $_COOKIE['C'];
$semail = $_COOKIE['B'];
$sphone = $_COOKIE['D'];

$sql = "SELECT * FROM `form responses 1` WHERE H =  'Yes' "



  mysqli_close($con);
?>
</body>
</html>