<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>selection2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Selection Form 2</h1>
        </div>
    </div>
    <div class="container" style="margin-top: 60px;">
          <form action="select2.php" method="post">
                <div class="form-group">
                  <label for="interests">Tell us about your interets</label>
                  <textarea class="form-control" rows="5" id="interests" name="interests"></textarea>
                </div>

                <div class="form-group">
                  <label for="why">Why do you want to join us?</label>
                  <textarea class="form-control" rows="5" id="why" name="why"></textarea>
                </div>

                <div class="form-group">
                <label for="exampleFormControlSelect1">Club Preference</label>
                <select class="form-control" id="exampleFormControlSelect1" name="club">
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
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">School Preference</label>
                <select class="form-control" id="exampleFormControlSelect1" name="school">
                  <option>ABMPS</option>
                  <option>BNMPS</option>
                  <option>LNMPS</option>
                  <option>MJPMPS</option>
                  <option>MLMPS</option>
                  <option>NMMPS</option>
                  <option>WBMPS</option>
                </select>
              </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>



                <!-- <div class="form-group">
                    <label for="interests">Tell us about your interets</label>
                    <textarea rows="4" cols="50" class="form-control" id="interests" >
                </div>
                <div class="form-group">
                    <label for="why">Why do you want to join us?</label>
                    <textarea rows="4" cols="50" class="form-control" id="why">
                </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">Club Preference</label>
                <select class="form-control" id="exampleFormControlSelect1">
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
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">School Preference</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>ABMPS</option>
                  <option>BNMPS</option>
                  <option>LNMPS</option>
                  <option>MJPMPS</option>
                  <option>MLMPS</option>
                  <option>NMMPS</option>
                  <option>WBMPS</option>
                </select>
              </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form> -->
    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>