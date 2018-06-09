<?php
session_start();
?>
<!DOCTYPE>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<style type="text/css">
	body{
		background-image: url("bg.png");
		background-size: cover;
	}
</style>
</head>
<body>
	<div class="container">
		
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4" style="padding-top: 10%;">
				<center>
					<h3 style="margin-bottom: 10%;">RESET</h3>
					<form method="POST" action="reg_process.php">
						<label >ID Number</label><br>
						<input type="text" name="id_num"><br>
						<input type="submit" name="rst-submit" class="btn" style="margin-top: 5px;"><br>
						<?php  
						if (isset($_SESSION['message'])) {
							echo $_SESSION['message'];
							session_unset();
						}
						?>
					</form>
				</center>

			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>