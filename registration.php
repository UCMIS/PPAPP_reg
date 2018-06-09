<?php
session_start();
?>
<!DOCTYPE>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<style type="text/css">
	body{
		background-image: url("bg.png");
		background-size: cover;
	}
	a{
		color: black;
	}
</style>
</head>
<body>
	
	<div class="page-header">
		<h1>Parent Portal Application</h1> 
	</div>
	<div class="reg" style="margin-bottom: 4%;">
		<center>
			<h2>Admin</h2>
		</center>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-1"></div>
			<div class="col-sm-4">
				<center>
					<h3 style="margin-bottom: 10%;">Account Activation</h3>
					<form  method="post" action="reg_process.php">
						<div class="form-group">
							<label>Student ID:</label><br>
							<input type="text"  class="form-control" id="user_id" name="user_id" required="true">	
						</div>
						<div class="form-group">
							<label>Email:</label><br>
							<input type="text" class="form-control" id="email_add" name="email_add" required="true">	
						</div>
						<div class="form-group">
							<label>Mobile Num:</label><br>
							<input type="text" class="form-control" id="mobile_num" name="mobile_nums" required="true">	
						</div>
						<div class="form-group">
							<label>Security Question:</label><br>
							<!-- <input type="text" class="form-control" id="mobile_num" name="mobile_nums" required="true"> -->
							<select class="form-control" name="s_ques">
								<option disabled selected>-- Select an Option --</option>
								<option value="dog">dog?</option>
								<option value="cat">cat?</option>
								<option value="fish">fish?</option>
								<option value="bird">bird?</option>
								<option value="hamster">hamster?</option>
							</select>				
						</div>
						<div class="form-group">
							<label>Answer:</label><br>
							<input type="text" class="form-control" id="s_answer" name="s_answer" required="true">	
						</div>
						<center>
							<input type="submit" class="btn" value="Submit" id="sub" name="sub"><br>
						</center>
					</form>
				</center>
				</div>
				<div class="col-sm-2"></div>
				<div class="col-sm-4">
					<center>
						<h3 style="margin-bottom: 10%;">Password Reset</h3>
						<form method="POST" action="reg_process.php">
							<label >ID Number</label><br>
							<input type="text" class="form-control" name="id_num" required="true"><br>
							<input type="submit" name="rst-submit" class="btn" style="margin-top: 5px;"><br>
						</form>
					</center>
				</div>
				<div class="col-sm-1"></div>
			</div>

			<div class="row">
				<div class="col-cm-4"></div>
				<div class="col-cm-4">	
				</div>
				<div class="col-cm-4" style="text-align: center;">
					<?php  
					if (isset($_SESSION['message'])) {
						echo $_SESSION['message'];
						session_unset();
					}
					?>
				</div>
				<div class="col-cm-4">
				</div>
			</div>
		</div>
	</div>
</body>

