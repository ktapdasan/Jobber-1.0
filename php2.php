<?php

$con=mysql_connect( "localhost","root","") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db('chrslog',$con) or die("Failed to connect to MySQL: " . mysql_error());
//inserting Record to the database

$fname = $_POST ['fname'];
$lname = $_POST ['lname'];
$user1 = $_POST ['user1'];
$pass1 = $_POST ['pass1'];

$query = "INSERT INTO chrs1(Firstname,Lastname,User,Password)VALUES('$fname','$lname','$user1','$pass1')";
$result = mysql_query($query);
if(!$result)

{
	die('Error: '.mysql_error($con));
}
echo "
<script>
	alert('Thank You For Registering you will be directed to the page');
	window.location.href = 'bucket/Home/index.php';
</script>";

mysql_close($con);
?>



