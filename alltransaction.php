<?php

session_start();
 $con= mysqli_connect("localhost","root","");
 mysqli_select_db($con, "banking_system");
$q="select * from transaction";
$result=mysqli_query($con,$q);
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Transaction</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
	</head>
	<body class="bg-danger">
		<?php
		include_once'header.php';
		?>
		
		<table class="table bg-info">
				<th>Sender</th>
				<th>receiver</th>
				<th>Amount</th>
			</tr>
			<tr>
			<?php while($row = $result->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<a href="index.php"> <button class="btn btn-info">BACK</button></a>

		<?php include_once 'footer.php' ?>
	</body>
</html>