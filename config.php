<?php
error_reporting(0);
define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","chrslog");
define("SITE_TITLE","CHRS");


$con=mysql_connect(HOST,USER,PASS) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB,$con) or die("Failed to connect to MySQL: " . mysql_error());


?>