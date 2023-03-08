<html>

<head>
	<meta http-equiv="Content-Type"
		content="text/html; charset=UTF-8">

	<title>Add List</title>

	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body style="background-image:url('bg1.jpg');">
	<div class="container mt-5">
		<h1>Add Patient List</h1>
		<form action="add.php" method="POST">
			<div class="form-group">
				<label>Patient name</label>
				<input type="text"
					class="form-control"
					placeholder="Patient name"
					name="iname" />
			</div>

			<div class="form-group">
				<label>Contact</label>
				<input type="text"
					class="form-control"
					placeholder="Mobile"
					name="iqty" />
			</div>

			<div class="form-group">
				<label>Patient status</label>
				<select class="form-control"
					name="istatus">
					<option value="0">
						DISCHARGED
					</option>
					<option value="1">
						ADMITTED
					</option>
				</select>
			</div>
			<div class="form-group">
				<input type="submit"
					value="Add"
					class="btn btn-danger"
					name="btn">
			</div>
		</form>
	</div>

	<?php
		if(isset($_POST["btn"])) {
			include("connect.php");
			$item_name=$_POST['iname'];
			$item_mobile=$_POST['iqty'];
			$item_status=$_POST['istatus'];
	

			$q="insert into patient(pname,
			mobile,pstatus)
			values('$item_name','$item_mobile',
			'$item_status')";

			mysqli_query($con,$q);
			header("location:index.php");
		}
		
		// if(!mysqli_query($con,$q))
		// {
			// echo "Value Not Inserted";
		// }
		// else
		// {
			// echo "Value Inserted";
		// }
	?>
</body>

</html>

