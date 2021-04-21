<?php
session_start();
$con=mysqli_connect('localhost','root','','Basic-Banking-System');
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
$result=mysqli_query($con,$q);
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

   <title>Transfer</title>
	<style>
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
	<center>
		<div class="view">
			<br><br>
			<form action="check_transfer.php" method="post" >
				<div class="border">
				<table>
					<tr>
						<td style="font-size:15pt;color:black;">
							<label for="sender" align="left">Receiver Name :</label>
							&nbsp; <select name="receiver" style="font-size: 12pt; height: 28px; width:290px;">
           <?php while($row = $result->fetch_assoc()) { ?>
			<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
			<?php } ?>
			</td>
		</tr><br>
		<tr>
			<td style="font-size:15pt;color:black;">
			<br><label for="transfer">Amount :</label> 
			 &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<input type="number" name="transfer" style="font-size: 12pt; height: 28px; width:290px;" required></td>
		</tr>
       <tr>
			<td>
				<div>
				<br><center><button type="submit" class="button" value="Credit" >Transfer</button></center>
				</div>
		   </td>
        </tr>
       </table>
	   </div>
      </form>
    </div><br>
	
</center>
</body>
</html>