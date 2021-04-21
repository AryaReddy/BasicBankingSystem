<?php
session_start();
$con=mysqli_connect('localhost','root','','Basic-Banking-System');
$q="select *from mini_statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
	<head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >


        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Transaction</title>
	<style>

	</style>
	</head>
	<body>
	<div>
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

		<center><h2>LIST OF USERS</h2>
            <img src="imgs\success.gif" alt="TRANSACTION HISTORY" width="500px" height="350px">
			</center>
        </div>

        <div class="container">
            <div class="table-responsive">
            <table class="table table-hover table-bordered">
			<thead>
			<tr class="bg-dark text-white text-center"><th>Sender</th> <th>Receiver <th>Amount</th></tr>
			</thead>
                <tbody>
				<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
				</tbody>
			</table>
			</div>
		</div>
		
		
			
		<!-- <form action="index.php" method="post">
			<div class="buttons">
	<a href="home.php">
    <button class="glow-on-hover">BACK</button>
	</a>
		</form> -->
		
	</body>
</html>