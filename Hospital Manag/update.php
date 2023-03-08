<?php
	include("connect.php");
	if(isset($_POST['btn']))
	{
		$p_name=$_POST['iname'];
		$p_mobile=$_POST['iqty'];
		$pstatus=$_POST['istatus'];
		$pid = $_GET['pid'];
		$q= "update patient set pname='$p_name', mobile='$p_mobile',
		pstatus='$istatus' where pid=$pid";
		$query=mysqli_query($con,$q);
		header('location:index.php');
	}
	else if(isset($_GET['pid']))
	{
		$q = "SELECT * FROM patient WHERE pid='".$_GET['pid']."'";
		$query=mysqli_query($con,$q);
		$res= mysqli_fetch_array($query);
	}
?>
<html>

<head>
	<meta http-equiv="Content-Type"
		content="text/html; charset=UTF-8">
	
	<title>Update List</title>

	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container mt-5">
		<h1>Update Patient List</h1>
		<form method="post">
			<div class="form-group">
				<label>Patient name</label>
				<input type="text"
					class="form-control"
					name="iname"
					placeholder="Patient name"
					value=
		"<?php echo $res['pname'];?>" />
			</div>

			<div class="form-group">
				<label>Patient Mobile</label>
				<input type="text"
					class="form-control"
					name="iqty"
					placeholder="Patient Mobile"
value="<?php echo $res['mobile'];?>" />
			</div>

			<div class="form-group">
				<label>Patient status</label>
				<select class="form-control"
					name="istatus">
					<?php
						if($res['pstatus'] == 0) {
					?>
					<option value="0" selected>DISCHARGED</option>
					<option value="1">ADMITTED</option>
					<?php } else if($res['pstatus'] == 1) { ?>
					<option value="0">DISCHARGED</option>
					<option value="1" selected>ADMITTED</option>
					<?php
						}
					?>
				</select>
			</div>


			<div class="form-group">
				<input type="submit" value="Update"
					name="btn" class="btn btn-danger">
			</div>
		</form>
	</div>
</body>

</html>

