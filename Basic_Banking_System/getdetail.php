<?php 
session_start();
$con=mysqli_connect('localhost','root','','Basic-Banking-System');

$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

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
        
        <title>CUSTOMER</title>

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
        <div>
            <center><h2>LIST OF USERS</h2></center>
            <img src="imgs\transaction.jpg" alt="TRANSFER MONEY" class="center" >
        </div>
        <div class="container">
            <div class="table-responsive">
            <table class="table table-hover table-bordered">
			<thead>
			<tr class="bg-dark text-white text-center"><th>CUSTOMER ID </th> <th>NAME </th> <th>EMAIL </th> <th>ACCOUNT BALANCE</th>  <th>Transfer</th></tr>
			</thead>
                <tbody>
                    <tr class="text-center">
						<?php  
							$row=mysqli_fetch_array($result);
						?>
						<td> 1</td>
						<td><?php echo  $row["name"]; ?></td>
						<td><?php echo  $row["email"]; ?></td>
						<td><?php echo  $row["amount"]; ?></td>
						<td>
							<form action="user.php" method="post"  class="view">
								<button class="button" type="submit" name="name" value="Arya">Select</button>
							</form>
						</td>
					</tr>
					<tr class="text-center">
						<?php  
							$row=mysqli_fetch_array($result);
						?>
						<td> 2</td>
						<td><?php echo  $row["name"]; ?></td>
						<td><?php echo  $row["email"]; ?></td>
						<td><?php echo  $row["amount"]; ?></td>
						<td>
							<form action="user.php" method="post" class="view">
								<button class="button" type="submit" name="name" value="Nehalika">Select</button>
							</form>
						</td>
					</tr>
					<tr class="text-center">
						<?php  
							$row=mysqli_fetch_array($result);
						?>
						<td> 3</td>
						<td><?php echo  $row["name"]; ?></td>
						<td><?php echo  $row["email"]; ?></td>
						<td><?php echo  $row["amount"]; ?></td>
						<td>
							<form action="user.php" method="post" class="view">
							<button class="button" type="submit" name="name" value="Dhanya">Select</button>
							</form>
						</td>
					</tr>
					<tr class="text-center">
						<?php  
							$row=mysqli_fetch_array($result);
						?>
						<td> 4</td>
						<td><?php echo  $row["name"]; ?></td>
						<td><?php echo  $row["email"]; ?></td>
						<td><?php echo  $row["amount"]; ?></td>
						<td>
							<form action="user.php" method="post" class="view">
							<button class="button" type="submit" name="name" value="Diksha">Select</button>
							</form>
						</td>
			

					</tr>
					<tr class="text-center">
						<?php  
							$row=mysqli_fetch_array($result);
						?>
						<td> 5</td>
						<td><?php echo  $row["name"]; ?></td>
						<td><?php echo  $row["email"]; ?></td>
						<td><?php echo  $row["amount"]; ?></td>
						<td>
							<form action="user.php" method="post" class="view">
							<button class="button" type="submit" name="name" value="Mounika">Select</button>
							</form>
						</td>
					</tr>
					<tr class="text-center">
						<?php  
							$row=mysqli_fetch_array($result);
						?>
						<td> 6</td>
						<td><?php echo  $row["name"]; ?></td>
						<td><?php echo  $row["email"]; ?></td>
						<td><?php echo  $row["amount"]; ?></td>
						<td>
							<form action="user.php" method="post" class="view">
							<button class="button" type="submit" name="name" value="Tanmai">Select</button>
							</form>
						</td>
					</tr>
					<tr class="text-center">
						<?php  
				
							$row=mysqli_fetch_array($result);
						?>
						<td> 7</td>
						<td><?php echo  $row["name"]; ?></td>
						<td><?php echo  $row["email"]; ?></td>
						<td><?php echo  $row["amount"]; ?></td>
						<td>
							<form action="user.php" method="post" class="view">
							<button class="button" type="submit" name="name" value="Adi Lakshmi">Select</button>
							</form>
						</td>
					</tr>
					<tr class="text-center">
						<?php   
							$row=mysqli_fetch_array($result);
						?>
						<td> 8</td>
						<td><?php echo  $row["name"]; ?></td>
						<td><?php echo  $row["email"]; ?></td>
						<td><?php echo  $row["amount"]; ?></td>
						<td>
							<form action="user.php" method="post" class="view">
							<button class="button" type="submit" name="name" value="Madhuri">Select</button>
							</form>
						</td>
					</tr>
					<tr class="text-center">
						<?php  
							$row=mysqli_fetch_array($result);
						?>
						<td> 9</td>
						<td><?php echo  $row["name"]; ?></td>
						<td><?php echo  $row["email"]; ?></td>
						<td><?php echo  $row["amount"]; ?></td>
						<td>
							<form action="user.php" method="post" class="view">
							<button class="button" type="submit" name="name" value="Trupti">Select</button>
							</form>
						</td>
					</tr>
					<tr class="text-center">
						<?php  
							$row=mysqli_fetch_array($result);
						?>
						<td> 10</td>
						<td><?php echo  $row["name"]; ?></td>
						<td><?php echo  $row["email"]; ?></td>
						<td><?php echo  $row["amount"]; ?></td>
						<td>
							<form action="user.php" method="post" class="view">
							<button class="button" type="submit" name="name" value="Swapna">Select</button>
							</form>
						</td>
					</tr>
                    
                </tbody>
                
            </table>
</body>
</html>




    