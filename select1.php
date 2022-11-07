<?php

$link = mysqli_connect("localhost", "root", "", "tap");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
setcookie('name', mysqli_real_escape_string($link, $_REQUEST['name']), time() + (86400 * 30), "/");
setcookie('email', mysqli_real_escape_string($link, $_REQUEST['email']), time() + (86400 * 30), "/");
setcookie('phone', mysqli_real_escape_string($link, $_REQUEST['phone']), time() + (86400 * 30), "/");
setcookie('city', mysqli_real_escape_string($link, $_REQUEST['city']), time() + (86400 * 30), "/");
header("Location:selection2.php");

// $name = mysqli_real_escape_string($link, $_REQUEST['email']);
// $email = mysqli_real_escape_string($link, $_REQUEST['email']);
// $phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
// $city = mysqli_real_escape_string($link, $_REQUEST['city']);

// if(mysqli_query($link, $sql)){
//     echo "Records added successfully.";
    
//  } else{
//      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
//  }

mysqli_close($link);
?>