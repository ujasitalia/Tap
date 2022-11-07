<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
    <?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost", "root", "", "tap");
    
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    $sql = "SELECT email FROM applicants WHERE selected = 'yes'";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            $to = $row["email"];
            $subject = "event";
            $message = "You have been selected as our partner further details will be sent soon.";
            $retval = mail($row["email"],"Congratulations!",$message);
        // if( $retval == true ) {
        //     echo "Message sent successfully...";
        //  }else {
        //     echo "Message could not be sent...";
        //  }
        }
    } else {
        echo "0 results";
    }

    $sql = "SELECT email FROM applicants WHERE selected = 'no'";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            $to = $row["email"];
            $subject = "event";
            $message = "You have not been selected as our partner .";
            $retval = mail($row["email"],"Sorry!",$message);
        // if( $retval == true ) {
        //     echo "Message sent successfully...";
        //  }else {
        //     echo "Message could not be sent...";
        //  }
        }header("Location: index.html");
    } else {
        echo "0 results";
    }
    header("index.html");
    // Close connection
    mysqli_close($link);
    ?>
</body>
</html>
