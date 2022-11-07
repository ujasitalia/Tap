<?php

$link = mysqli_connect("localhost", "root", "", "tap");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$interests = mysqli_real_escape_string($link, $_REQUEST['interests']);
$why = mysqli_real_escape_string($link, $_REQUEST['why']);
$club = mysqli_real_escape_string($link, $_REQUEST['club']);
$school = mysqli_real_escape_string($link, $_REQUEST['school']);

// $_COOKIE[$name] = mysqli_real_escape_string($link, $_REQUEST['name']);
// $_COOKIE[$email] = mysqli_real_escape_string($link, $_REQUEST['email']);
// $_COOKIE[$phone] = mysqli_real_escape_string($link, $_REQUEST['phone']);
// $_COOKIE[$city] = mysqli_real_escape_string($link, $_REQUEST['city']);
 $name = $_COOKIE['name'];
$email = $_COOKIE['email'];
$phone = $_COOKIE['phone'];
$city = $_COOKIE['city'];
 if($city == "mumbai" or $city == "pune"){
    $sql = "INSERT INTO applicants (sr, name, email, phone, city, club, school, interests, why) VALUES ('', '$name', '$email', '$phone', '$city', '$club', '$school', '$interests', '$why')";
    if(mysqli_query($link, $sql)){
        echo "<script type='text/javascript'>
        if (confirm('application registered!')) {
            window.location = 'index.html';
        }
        else {
            window.location = 'index.html';
        }
        </script>";
    } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
} else{
    echo "<script type='text/javascript'>
            if (confirm('Not Available in your region but thank you for your support.')) {
                window.location = 'index.html';
            }
            else {
                window.location = 'index.html';
            }
            </script>";
}
//  {
//     echo 'inside if';
//     echo '<script type="text/javascript">';
//     echo ' alert("not eligible")';  
//     echo '</script>'; 
//     header("Location:index.html");
// // }
// // else {
//     $sql = "INSERT INTO applicants (sr, name, email, phone, city, club, school, interests, why) VALUES ('', '$name', '$email', '$phone', '$city', '$club', '$school', '$interests', '$why')";
//     if(mysqli_query($link, $sql)){
//      echo "Records added successfully.";
//      header("Location:index.html");
//     } else{
//       echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
//     }
// }



mysqli_close($link);
?>