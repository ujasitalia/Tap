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
    <div class="container">
        <form action="load_selected_applicants.php" method="POST" class="form-check form-check-inline"> 
        <div class="form-group">
            <label for="city">Select City:</label>
            <select id="city" class="form-control" name="city">
                <option value="mumbai">Mumbai</option>
                <option value="pune">Pune</option>
            </select>
        </div>
        <div class="form-group">
        <label for="grade">Select Grade:</label>
            <select id="grade" class="form-control" name="grade">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select>
        </div>
        <div class="form-group">
        <label for="clubs">Select Clubs:</label>
            <select id="grade" class="form-control" name="club">
                  <option>coding</option>
                  <option>dance</option>
                  <option>drama</option>
                  <option>music</option>
                  <option>public speaking</option>
                  <option>electronics</option>
                  <option>visual arts</option>
                  <option>frisbee</option>
                  <option>school manager</option>
                </select>
            </select>
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Next" id="submit" />
        </div>      
        </form>

        <form action="sendmail.php" method="POST">
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="send mail" id="submit" />
        </div>
        </form>
    </div>
    <script src="load_selected_applicants.js"></script>
    <!-- <script src="sendmail.php"></script> -->
</body>
</html>