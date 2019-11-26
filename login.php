
<?php
session_start();

include("includes/connection.php");
	 if(isset($_POST['submit'])){

		$c_email = $_POST['txt_uname'];
		$c_pass = $_POST['txt_pwd'];

		$sel_c ="select * from user where email='$c_email' AND pass='$c_pass'";

		$run_c = mysqli_query($conn, $sel_c);

		$check_customer = mysqli_num_rows($run_c);

		if($check_customer==0){

		echo "<script>alert('Password or email is incorrect, plz try again!')</script>";
		exit();
		}
		else {
		$_SESSION['umail']=$c_email;
		header('location: home.php');

		}
	}
?>