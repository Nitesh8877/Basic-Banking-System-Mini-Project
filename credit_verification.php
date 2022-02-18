<?php
session_start();

$con= mysqli_connect("localhost","root","");
mysqli_select_db($con, "banking_system");

$name=$_SESSION['name'];
$q1="select current_balance from users where name='$name'";
$result=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result);

$sender_balance=$row['current_balance'];
//fetching current_balance from senders database

$from=$_SESSION['name'];
//sender name
$to=$_POST['receiver'];
//receiver name

$q2="select current_balance from users where name='$to'";
//query to fetch current_balance from receiver database

$result1=mysqli_query($con,$q2);
//fetch current_balance from receiver database

$row=mysqli_fetch_array($result1);

$receiver_balance=$row['current_balance'];
//receiver current_balance
session_destroy();


if ( $sender_balance >= $_POST["transfer"] )
{
    $sub=$sender_balance-$_POST["transfer"];
    $q1="update users set current_balance='$sub' where name='$from' ";
    $result=mysqli_query($con,$q1);
    $sum=$receiver_balance+$_POST["transfer"];
    $q1="update users set current_balance='$sum' where name='$to' ";
    $result=mysqli_query($con,$q1);
	$transfer=$_POST["transfer"];
	$q1="insert into transaction(sender,receiver,amount)
		values('$from','$to',$transfer)";
	$result=mysqli_query($con,$q1);
    $message="Successful transfer";

   echo"<script type='text/javascript'>
    alert('$message');
    setTimeout(function () {
        window.location.href= 'viewusers.php';
     },1000);
    </script>";    
}
else
{
   $message="Insufficient Balance";
   echo"<script type='text/javascript'>alert('$message');
   setTimeout(function () {
    window.location.href= 'viewusers.php';
 },1000);
   </script>";
   
}
?>