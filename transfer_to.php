<?php
session_start();
$con= mysqli_connect("localhost","root","");
mysqli_select_db($con, "banking_system");
 $name=$_SESSION['name'];
$q="select name from users";
$result=mysqli_query($con,$q);
if($name==null){ 
	echo"<script type='text/javascript'>
    setTimeout(function () {
        window.location.href= 'index.php';
     },1000);
    </script>"; 
}
else{
?>
<html>
<head>
   <title>Transfer</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
</head>
<body class="bg-danger">
	<?php 
	include_once 'header.php';
	?>
	
	<div class="main">
		<div class="sub-main">
			<form action="credit_verification.php" method="post">
			<div class="text-center">
				<label for="receiver" >Receiver</label><br>
				<select name="receiver" class="form-control">
					<?php while($row = $result->fetch_assoc()) { ?>
					<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
					<?php } ?>
				</select>
				<br><br>
				<label for="amount">Amount </label><br>
				<input type="number" class="form-control" name="transfer" placeholder="Enter Amount">
				<br><br><br>
				<button  class="btn btn-lg btn-success form-control " type="submit" name="submit" value="Credit">Transfer</button><br><br>
					</div>
			</form>
			
		</div>	
	</div>
	
	<?php include_once 'footer.php' ?>
</body>
</html>

<?php } ?>