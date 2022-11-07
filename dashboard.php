<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selection</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        table{
            width: 100%;
            margin:5% auto;
        }
        th,td{
            border: 1px solid;
            text-align: left;
            padding: 10px;
            
        }
        form .form-group{
            display: flex;
            justify-content: center;
        }
        #applicant-dropbox{
            margin: 0 1%;
            text-align: center;
            text-align-last: center;
        }
        main.container{
            padding: 5%
        }
        .drop-grade{
            margin-right: 5px
        }
    </style>
    </head>

        <body class="bg-light">
        <div class="jumbotron jumbotron-fluid">
            <div class="container" style="text-align: center">
                <h1 class="display-4">Grade Applicants</h1>
            </div>
        </div>

            <main class="container">
                <form action="">             
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm" type="button" id="previous">Previous</button>
                        <select id='applicant-dropbox' name="applicants" onchange="showCustomer(this.value)">
                            <option value="">Select an applicant:</option>
                            <option value="1">1</option>
                            <option value="10">500</option>
                            <option value="15">1000</option>
                        </select>
                        <button class="btn btn-primary btn-sm" type="button" id="next">Next</button>
                    </div>

                    <div class="form-group">
                        <div id="txtHint">Customer info will be listed here...</div>
                    </div>
        
                    <div class="form-group">
                        <input class="btn btn-outline-primary btn-sm" type="button" value=" Select Applicants" id="show-applicants" onclick="forward()" />
                    </div>
                    <div class="form-group">
                        <a class="btn btn-outline-primary btn-sm" href="admin-dashboard.php" onclick="forward()">Dashboard</a>
                    </div>
                </form>
            </main>

            <script src="load-applicants.js"></script>
        </body>

</html>