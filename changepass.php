<head>
	<style type="text/css">
	.form-group{
		
		color: blue;
		font-family: "Times New Roman", Times, serif;
		font-size: 30px;
	}

	#old_pass, #new_pass, #con_pass{
		width: 20%;
		padding: 8px;
		border: 1px solid green;
		border-radius: 4px;
		box-sizing: border-box;
		margin-top: 3px;
		margin-bottom: 5px;
		resize: vertical;

	}
	body{
		text-align: center;
	}
	h1{
		padding-top: 5%;
	}


</style>

</head>
<body>
	<div class="container">
		<div class="reg">
		<h1>Change Password</h1>
	</div>
		<form  method="post">
			<div class="form-group">
				<label for="md">Old Password:</label><br>
				<input type="Password" class="form-control" id="old_pass" name="old_pass">	
			</div>
			<div class="form-group">
				<label for="md">New Password</label><br>
				<input type="Password" class="form-control" id="new_pass" name="new_pass">
			</div>
			<div class="form-group">
				<label for="md">Confirm Password</label><br>
				<input type="Password" class="form-control" id="con_pass" name="con_pass">
			</div>
		</div>
	</form>
</body>