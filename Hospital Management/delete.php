<?php
	include("connect.php");
	$pid = $_GET['pid'];
	$q = "delete from hospital_db.patient where pid = $pid ";
	mysqli_query($con,$q);	
?>
<html>
<head>
<title> Delete list </title>
<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image:url('bg.webp');">
<div class="container mt-5">
<center>

	<h1> Patient Deleted Successfully </h1>
	<br>
	<a href="add.php?>" class='btn btn-danger'>
							Add new Patient
						</a>
						<a href="index.php?>" class='btn btn-danger'>
							View Patient List
						</a></center></div>
</body>
</html>

