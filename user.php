<?php 
session_start();
$con= mysqli_connect("localhost","root","");
mysqli_select_db($con, "banking_system");
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$email=$row['email'];
$current_balance=$row['current_balance'];
$_SESSION['name']=$name;

if($_SESSION['name']!=null){
?>

<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $name?></title>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
</head>
	<body class="bg-danger">
		
	<?php include_once 'header.php' ?>
	   <div class="main">
			<table class="table table-hover bg-info text-left">
				<tr>
					<th>Name</th>
					<td><?php echo $name?></td>
				</tr>
				<tr>
					<?php  
						$row=mysqli_fetch_array($result);
					?>
					<th>Email</th>
					<td><?php echo $email?></td>
				</tr>
			<tr>
					<?php  
						$row=mysqli_fetch_array($result);
					?>
					<th> Credits</th>
					<td><?php echo $current_balance?></td>
				</tr>
			</table>
			<br>
			<div class="text-center">
			<a href="transfer_to.php">
			<button type="button" class="btn btn-lg btn-primary text-center">Transfer To</button>
			</a>
			<br><br>
			
				<a href="ministatement.php">
				<button type="button" name="display" class="btn btn-lg btn-primary text-center">Mini Statement</button>

				</a>
				<a href="viewusers.php">
				<button type="button" name="disp" class="btn btn-lg btn-primary text-center">BACK</button>
				
				</a>
			</div>
		</div>	
		<?php include_once 'footer.php'; ?>	
    </body>
</html>
<?php }



?>