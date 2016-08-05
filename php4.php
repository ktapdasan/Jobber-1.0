<?php
$error = "";

if($_POST['submit']){

	include("../../config.php");

	$user = $_POST['user1'];
	$pass = $_POST['pass1'];

	$submit= $_POST['submit'];

	if(empty($user) || empty($pass)){
		echo "wrong username or password";
	}
	else{
		mysql_connect("localhost","root","")or die("connection lost");
		mysql_select_db("chrslog");

		$q1=mysql_query("SELECT * FROM `chrs1` WHERE `User` = '$user' AND `Password` = '$pass' ");
		$row = mysql_num_rows($q1);

		if($row==1){

			header('location: bucket/Employer/index.php');
		}
		else{
			header('location: index.php');
		}
	}

}


?>


