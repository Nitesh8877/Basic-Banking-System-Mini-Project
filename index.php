<?php
session_start();
?>


<html>
  <head>
   <title>Basic Banking System</title>
  <link rel="shortcut icon" href="images/logo.jpg">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/index.css">
  </head>
<body class="bg-warning">
   
      <?php
      include_once 'header.php';

      ?>
  <?php include_once 'mainContent.php' ?>
	   
     <?php 
     include_once 'footer.php';

     ?>
</body>
</html>