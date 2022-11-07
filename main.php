
<?php
    $link = mysqli_connect("localhost", "root", "", "tap");

    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    $school = $_COOKIE['school'];
    $sql = "SELECT email FROM selected WHERE school  = '$school'";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            $to = $row["email"];
            $subject = "Reminder";
            $message = "You ave a session this saturday at " . $school . ". If you will be absent fill the form in the link. Link:https://docs.google.com/forms/d/e/1FAIpQLSddwvuMd54TmYnihp1AKGy5Z18Gixr1dr7vJJ-tGZ92mv_gew/viewform?usp=sf_link";
            $retval = mail($row["email"],"Reminder!",$message);
        }header("Location: admin-dashboard.php");
    } else {
        echo "0 results";
    }
    mysqli_close($link);
?>
    

