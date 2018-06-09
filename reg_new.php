<?php
session_start();
$servername = "172.16.0.13";
$username = "intern";
$password = "int3rn2018";
$dbname = "db_mobile_shs";
$conn = mysqli_connect($servername.':3309', $username, $password, $dbname);

?>
<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<title>Registration Form</title>
	
	<style>
		body{
			background-image: url("bg.png");
			background-size: cover;
		}
		a{
			color: black;
		}
		td {
			cursor: pointer;
		}

		.selected {
			background-color: #FFF;
			color: #000;
		}
	</style>
</head>

<body>
	<!-- HEADER -->
	<div class="page-header">
		<h1>Parent Portal Application</h1> 
	</div>
	<!-- HEADER -->

	<!-- BANNER -->
	<div class="reg" style="margin-bottom: 4%;">
		<center>
			<h2>Registration</h2>
		</center>
	</div>
	<!-- BANNER -->

	<div class="container">
		<div class="row">
			<!-- TABLE -->
			<div class="col-sm-12">
				<table class="table" id="reg_table">
					<tr>
						<th>ID Number</th>
						<th>Student Name</th>
						<th>Track</th>
					</tr>
					<?php
					$x = intval(0);
					$sql = "SELECT * FROM user_data LIMIT 10 OFFSET ".$x;
					$res = mysqli_query($conn,$sql);
					while ($row = mysqli_fetch_array($res)) {
						echo "<tr>
						<td>".$row['id_number']."</td>
						<td>".$row['lname'].", ".$row['fname']."</td>
						<td>".$row['track']."</td>
						</tr>";
					}
					?>
				</table>
				<script>
					function highlight(e) {
						if (selected[0]) selected[0].className = '';
						e.target.parentNode.className = 'selected';
					}

					var table = document.getElementById('reg_table'),
					selected = table.getElementsByClassName('selected');
					table.onclick = highlight;

					function fnselect(){
						var fnidnum = $("tr.selected td:first").text();
						$('#user_id').val(fnidnum);
						
						var fname = $("tr.selected td:nth-child(2)").text();
						$('#f_name').val(fname);
					}
				</script>
			</div>
			<!-- TABLE -->

			<!-- MODAL -->
			<div class="container">
				<button type="button" class="btn btn btn-lg" data-toggle="modal" data-target="#myModal" onclick="fnselect()">Activate</button>

				<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Activate Account</h4>
							</div>
							<div class="modal-body">
								<form  method="post" action="reg_process.php">
									<div class="form-group">
										<label>Student ID Number:</label><br>
										<input readonly type="text"  class="form-control" id="user_id" name="user_id" required="true">	
									</div>
									<div class="form-group">
										<label>Full Name</label><br>
										<input readonly type="text" class="form-control" id="f_name" name="f_name" required="true">	
									</div>
									<div class="form-group">
										<label>Mobile Number:</label><br>
										<input type="text" class="form-control" id="mobile_num" name="mobile_nums" required="true">
									</div>
									<div class="form-group checkbox" style="padding-left: 3%">
										<label><input type="checkbox" value="">Accept SMS?</label>
									</div>
									<div class="form-group">
										<label>E-mail Address:</label><br>
										<input type="text" class="form-control" id="email" name="email" required="true">
									</div>
									<div class="form-group">
										<label>Security Question:</label><br>
										<select class="form-control" name="s_ques">
											<option disabled selected>Select an Option</option>
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
										<input type="submit" class="btn" value="Submit" id="sub" name="sub">
										<button type="button" class="btn" data-dismiss="modal">Close</button>
									</center>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- MODAL -->

			<!-- <div class="col-sm-4">
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
							<select class="form-control" name="s_ques">
								<option disabled selected>Select an Option</option>
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
			</div> -->
			<!-- <div class="col-sm-4">
				<center>
					<h3 style="margin-bottom: 10%;">Password Reset</h3>
					<form method="POST" action="reg_process.php">
						<label >ID Number</label><br>
						<input type="text" class="form-control" name="id_num" required="true"><br>
						<input type="submit" name="rst-submit" class="btn" style="margin-top: 5px;"><br>
					</form>
				</center>
			</div> -->
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
</html>
