<?php
session_start();
$servername = "172.16.0.13";
$username = "intern";
$password = "int3rn2018";
$dbname = "db_mobile_shs";

$conn = mysqli_connect($servername.':3309', $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['sub'])) {
	$student_id = $_POST['user_id'];
	$email_add = $_POST['email_add'];
	$mobile_num = $_POST['mobile_nums'];
	$ques = $_POST['s_ques'];
	$ans = $_POST['s_answer'];

	$qry = "SELECT * from user_data WHERE id_number = '$student_id';";
	$res = mysqli_query($conn,$qry);
	if($res){
		$row = mysqli_fetch_array($res);
		if (mysqli_num_rows($res) > 0) {
			$sql = "INSERT INTO logins (
			user_index,
			password, 
			user_id, 
			mobile_num, 
			email_add,
			forget_pass_question,
			forget_pass_ans)
			VALUES (".$row['user_index'].", '".$row['id_number']."','".$row['id_number']."','$mobile_num', '$email_add', '$ques', '$ans')";
			$res =mysqli_query($conn, $sql);
			if ($res) {
				sendBack("Account Successfully Activated","registration.php");
				
			} else {
				sendBack("Error","registration.php");
			}
		}
		else{
			sendBack("Invalid user ID","registration.php");
		}
	}
	else{
		sendBack("Connection Error","registration.php");
	}
}
elseif (isset($_POST['rst-submit'])) {
	$idnum = $_POST['id_num'];
	$qry="SELECT * FROM logins where user_id = '$idnum' ";
	$res = mysqli_query($conn, $qry);
	if ($res) {
		if (mysqli_num_rows($res) > 0) {
			$qry = "UPDATE logins set password = '$idnum' where user_id = '$idnum'";
			$res = mysqli_query($conn, $qry);
			if ($res) {
				sendBack("Account Successfully Reset","registration.php");
			}else{
				sendBack("Error","registration.php");
			}
		}else{
			sendBack("Invalid user ID","registration.php");
		}
	}else{
		sendBack("Connection Error","registration.php");
	}
}

function sendBack($msg,$src)
{
	$_SESSION['message'] = $msg;
	header("location: ".$src);
}
?>