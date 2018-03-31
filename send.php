<?php
	session_start();
	$sender = $_SESSION['sender'];
	$rec=$_POST['receiver'];
	$sub=$_POST['subject'];
	$msg=$_POST['msg'];
	define('Db','newdb');
define('Db_user','root');
define('Db_host','localhost');
define('Db_password','');
mysql_connect(Db_host, Db_user, Db_password);
mysql_select_db(Db) or die();
$sql ="INSERT INTO messages (sender,receiver,subject,message) VALUES ('$sender','$rec','$sub','$msg')";
if (!mysql_query($sql)){
	die('Error: ' .mysql_error());
	}
	echo "Sucessfully sent";
mysql_close();
?>