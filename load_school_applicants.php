<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            table{
                width: 80%;
                margin: 5% auto;
            }
            th,td{
                border: 1px solid;
                text-align: left;
                padding: 15px;
                height: 50px
            }
            #send-mail{
            text-align: center;
            }
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body class="bg-light">
        <?php
          $heading = $_POST['school'];
          echo '<div class="jumbotron jumbotron-fluid">
                  <div class="container" style="text-align: center">
                      <h1 class="display-4">'.$heading.' Volunteers</h1>
                  </div>
                </div>'
        ?>
        <div class="container">
        <?php
        $con = new mysqli("localhost","root","","tap");

        if ($con -> connect_errno) {
            echo "Failed to connect to MySQL: " . $con -> connect_error;
            exit();
          }
          

        $school = mysqli_real_escape_string($con, $_REQUEST['school']);   
        setcookie('school', mysqli_real_escape_string($con, $_REQUEST['school']));
        $sql = "SELECT Sr, name, email, phone, city, club, school FROM selected WHERE school = '$school'";   

        $result = $con -> query($sql); 

        echo "<table>";
        echo "<tr>";
        echo "<th>Sr</th>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>Phone</th>";
        echo "<th>City</th>";
        echo "<th>Club</th>";
        echo "<th>School</th>";
        echo "</tr>";

        while($row = mysqli_fetch_array($result))
          {
            echo "<tr>";
            echo "<td>" . $row['Sr'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['city'] . "</td>";
            echo "<td>" . $row['club'] . " </td>";
            echo "<td>" . $row['school'] . "</td>";
            echo "</tr>";
          }
        echo "</table>";
        mysqli_close($con);
        ?>
        
          <form action="main.php" id="send-mail" method="POST">
                <input class="btn btn-outline-success" id="mail" type="submit" value="Weekly confirmation mail!" id="submit"/>
                <sub class="text-muted" style="display: block; margin: 10px">*Weekly availability check.</sub>
          </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>