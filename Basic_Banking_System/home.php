<!DOCTYPE html>
<html>
    <head>   
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Home Page</title>
        <style>
            * {
            box-sizing: border-box;
            }

            body {
            font-family: Arial, Helvetica, sans-serif;
            }

            /* Float four columns side by side */
            .column {
            float: left;
            width: 50%;
            padding: 0 10px;
            }

            /* Remove extra left and right margins, due to padding */
            .row {margin: 0 -5px;}

            /* Clear floats after the columns */
            .row:after {
            content: "";
            display: table;
            clear: both;
            }

            /* Responsive columns */
            @media screen and (max-width: 1100px) {
            .column {
                width: 100%;
                display: block;
                margin-bottom: 20px;
            }
            }

            /* Style the counter cards */
            .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 16px;
            text-align: center;
            background-color: #f1f1f1;
            }

            .button {
            background-color: blue;
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            }

            .button {
            background-color: white; 
            color: black; 
            border: 2px solid #008CBA;
            }

            .button:hover {
            background-color: #008CBA;
            color: white;
            }
        </style>
            
    </head>
    <body>
        <div>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="homepage.html">HOME</a></li>
                  </ul>
                  <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="getdetail.php">VIEW USER</a></li>
                        <li class="active"><a href="transaction.html">TRANSACTION HISTORY</a></li>
                    </ul>
                  </div>
                </div>
            </nav>        
        </div>

        <br>

        <div class="container">
            <center><h1>BASIC BANKING SYSTEM</h1></center>
            <br>
            <center><h1>SERVICES</h1></center>
            <div class="row">              
                <div class="column">
                  <div class="card">
                    <img src="imgs\user.gif" width="200px" height="200px">
                    <hr>
                    <a class="button" href="getdetail.php">VIEW USER</a>
                  </div>
                </div>
                
                <div class="column">
                  <div class="card">
                    <img src="imgs\transaction.gif" width="200px" height="200px">
                    <hr>
                    <a class="button" href="transaction.php">TRANSACTION HISTORY</a>
                  </div>
                </div>
              </div>

            </div>
        </div>        
    </body>
</html>