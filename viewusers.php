 <?php 
 
session_start();
	 $con= mysqli_connect("localhost","root","");
	 mysqli_select_db($con, "banking_system");
	$q="select * from users ";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
?>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
   <title>viewUser</title>
   <!-- <link rel="stylesheet" href="css//viewusers.css"> -->
</head>
<body class="bg-danger">
	<?php include_once 'header.php' ?>
	
    <table class="table bg-info table-hover table-responsive">
	<h1>Account Holder Information</h1>
		<thead>
			<th>Sno.</th>
			<th>Name</th>
			<th>Email</th>
			<th>Credit</th>
			<th></th>
		</thead>
		<tbody>
		<?php for($i=1;$i<=$row_count;$i++){?>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
				if($row["name"!=null]){
					echo "<td> {$i}</td>
						  <td> {$row["name"]}</td>
						  <td> {$row["email"]}</td>
						  <td> {$row["current_balance"]} </td>
						  <td><form action='user.php' method='post' class='view'>
						      <button class='btn btn-sm btn-success'type='submit' name='name' value='{$row["name"]}'>View</button>
					          </form>
						  </td>:
					";}
										
			?>
		</tr>
		<?php }	?>
		</tbody>
	</table><br><br>
 <div class="form-group text-center">
	 <a href="index.php"><button class=" btn btn-lg from-control bg-primary ">BACK</button></a>
</div>


<?php include_once 'footer.php' ?>
</body>
</html>
