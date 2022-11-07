<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    </style>
</head>
<body class="bg-light">
  <div class="jumbotron jumbotron-fluid">
      <div class="container" style="text-align: center">
          <h1 class="display-4">Selection And School Allocation</h1>
          <p class="text-mute">The volunteers are selected based on their grades and phone interview.</p>
      </div>
  </div>
  <div class="container-fluid">
      <?php
      $con = new mysqli("localhost","root","","tap");

      if ($con -> connect_errno) {
          echo "Failed to connect to MySQL: " . $con -> connect_error;
          exit();
        }

      $city = mysqli_real_escape_string($con, $_REQUEST['city']);
      $grade = mysqli_real_escape_string($con, $_REQUEST['grade']);
      $club = mysqli_real_escape_string($con, $_REQUEST['club']);

      $sql = "SELECT Sr, name, email, phone, city, club, school, grade FROM applicants WHERE city = '$city' and grade = '$grade' and club = '$club' ";
      $result = $con -> query($sql); 

      echo "<table>";
      echo "<tr>";
      echo "<th>Name</th>";
      echo "<th>Email</th>";
      echo "<th>Phone</th>";
      echo "<th>City</th>";
      echo "<th>Club</th>";
      echo "<th>School</th>";
      echo "<th>Grade</th>";
      echo "<th>Selected/Edit School</th>";
      echo "</tr>";


      while($row = mysqli_fetch_array($result))
        {
          echo "<tr>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "<td>" . $row['phone'] . "</td>";
          echo "<td>" . $row['city'] . "</td>";
          echo "<td>" . $row['club'] . " </td>";
          echo "<td>" . $row['school'] . "</td>";
          echo "<td>" . $row['grade'] . "</td>";
          echo '<td><form action="select.php" method="POST">
                  <div class="form-group">
                      <select name="select">
                      <option>Yes</option>
                      <option>No</option>
                      </select> /
                      <select name="school1">
                            <option>ABMPS</option>
                            <option>BNMPS</option>
                            <option>LNMPS</option>
                            <option>MJPMPS</option>
                            <option>MLMPS</option>
                            <option>NMMPS</option>
                            <option>WBMPS</option>
                          </select>
                      <input name="add" type="submit" value=' . $row["Sr"] . ' onclick = getsr(this.value)  class="btn btn-primary btn-sm"> 
                  </div>           
                </form></td>';
          echo "</tr>";
        }
      echo "</table>";
      ?>
  </div>
</body>
</html>