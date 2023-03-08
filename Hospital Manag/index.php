<?php
	include("connect.php");
		$q= "select * from hospital_db.patient";
		$query=mysqli_query($con,$q);
	
?>

<html>

<head>
	<meta http-equiv="Content-Type"
		content="text/html; charset=UTF-8">

	<title>View List</title>

	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<link rel="stylesheet"
		href="css/style.css">
	
</head>

<body style="background-image:url('bg.webp');">
	<div class="container mt-5">
		
		<!-- top -->
		<div class="row">
			<div class="col-lg-8">
				<h1>View Patient List</h1>
				<a href="add.php">Add Patient</a>
			</div>
		</div>

		<!-- Patient Cards -->
		<div class="row mt-4">
			<?php
				while ($qq=mysqli_fetch_array($query))
				{
			?>

			<div class="col-lg-12">
				<div class="card-columns mb-3">
					<div class="card-body">
						<h5 class="card-title">
							<?php echo $qq['pname']; ?>
						</h5>
						<h6 class="card-subtitle mb-2 text-muted">
							<?php echo
							$qq['mobile']; ?>
						</h6>
						<?php
						if($qq['pstatus'] == 0) {
						?>
						<p class="text-info">Discharged</p>

						<?php
						} else if($qq['pstatus'] == 1) {
						?>
						<p class="text-success">Admitted</p>

		
                        <?php } ?>
                        <a href=
                        "delete.php?pid=<?php echo $qq['pid']; ?>" 
                            class="card-link" style="color:red;">
                            Delete
                        </a>
					
						<a href=
						"update.php?pid=<?php echo $qq['pid']; ?>"
							class="card-link">
							Update
						</a>
					</div>
				</div><br>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</body>

</html>
