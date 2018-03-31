<?php
define('Db','newdb');
define('Db_user','root');
define('Db_host','localhost');
define('Db_password','');
mysql_connect(Db_host, Db_user, Db_password);
mysql_select_db(Db) or die();	
$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$name=$fname.$lname;
	$email=$_POST['username']."@wemail.com";
	$date=$_POST['date'];
	$mob=$_POST['mobile'];
	$gender=$_POST['gender'];
	$agree=$_POST['tc'];
	$password=$_POST['password'];
	$retpassword=$_POST['retpassword'];
	$ppic=$_POST['ppic'];
	if($password == $retpassword )
	{	
	$sql ="INSERT INTO table1 (email,password,Name,Dob,Gender,Mob,ppic) VALUES ('$email','$password','$name','$date','$gender','$mob','$ppic')";
	
	if (!mysql_query($sql)){
	die('Error: ' .mysql_error());
	}
	echo "Sucessfully registered";
mysql_close();
	}
	else{
		header('Location: signup_copy.php'); 
	}
		
?>
