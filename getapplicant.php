<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  
  <?php
  $link = mysqli_connect("localhost", "root", "", "tap");
  
  // Check connection
  if($link === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }

  $sql = "SELECT Sr, name, city, club, school, interests, why FROM applicants WHERE Sr = ?";

  $stmt = $link->prepare($sql);
  $stmt->bind_param("s", $_GET['q']);
  $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($sr, $name, $city, $club, $school, $interest, $why);
  $stmt->fetch();
  $stmt->close();

  echo "<table>";
  echo "<tr>";
  echo "<th>Sr.</th>";
  echo "<th>Name</th>";
  echo "<th>City</th>";
  echo "<th>Club</th>";
  echo "<th>School</th>";
  echo "<th>Interest</th>";
  echo "<th>Why</th>";
  echo "<th>Grade</th>";
  echo "</tr>";
  echo "<tr>";
  echo "<td>" . $sr . "</td>";
  echo "<td>" . $name . "</td>";
  echo "<td>" . $city . "</td>";
  echo "<td>" . $club . "</td>";
  echo "<td>" . $school . "</td>";
  echo "<td>" . $interest . "</td>";
  echo "<td>" . $why . "</td>";
  echo '<td>
          <form action="addgrade.php" class="form-check form-check-inline" method="post">
            <div class="form-group">
            <select  name="grade" class="form-control drop-grade">
            <option>A</option>
            <option>B</option>
            <option>C</option>        
            </select>
            
            <button type="submit" class="btn btn-primary btn-sm">Update</button>
            </div>
          </form>
        </td>';
  echo "</tr>";
  echo "</table>";

  echo ""
  ?>
</body>
</html>