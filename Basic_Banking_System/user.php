<?php 
session_start();
$con=mysqli_connect('localhost','root','','Basic-Banking-System');
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name;

?>
<!DOCTYPE html>
<html>
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo $name?></title>
	<style>
            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }

			.button {
            background-color: blue;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
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
                    <li class="active"><a href="home.php">HOME</a></li>
                  </ul>
                  <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="getdetail.php">VIEW USER</a></li>
                        <li class="active"><a href="transaction.php">TRANSACTION HISTORY</a></li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>

		<div class="container">
            <div class="table-responsive">
            <table class="table table-hover table-bordered">
			<thead>
			<tr class="bg-dark text-white text-center"><th>NAME </th> <th>ACCOUNT BALANCE</th> </tr>
			</thead>
                <tbody>
                    <tr class="text-center">
						<?php  
							$row=mysqli_fetch_array($result);
						?>
						<td><?php echo $name?></td>
						<td><?php echo $amount?></td>
					</tr>
			</table>
		</div>
		</div>

     <center>
	<a href="transfer_to.php">
		<button class="button"> Transfer To</button>
	</a>

	 </center>
	<br>
	<br>

    </body>
</html>