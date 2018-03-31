<!doctype>
<html>
<head>
<title>WeMail</title>
<link rel="icon" type="text/jpg" href="1.jpg">
<style>
	
	#top2{
		width:700px;
		border:1px solid black;
		display:inline-block;
		margin-bottom:10px;
		padding:3px 0px 3px 6px;
		height:20px;
	}
	#message{
		margin-top:30px;
		width:700px;
		height:500px;
		border:1px solid black;
		display:inline-block;
	}
	
#container{
	width:706px;
	margin-left:200px;
	display:inline-block;
	
}
</style>
</head>
<body>
<?php
	define('Db','newdb');
	define('Db_user','root');
	define('Db_host','localhost');
	define('Db_password','');
	mysql_connect(Db_host, Db_user, Db_password);
	mysql_select_db(Db) or die();	
	$num=$_POST['submit'];
	$result=mysql_query("SELECT * FROM messages WHERE inc='$num'");
	$row=mysql_fetch_array($result);
	$rec=$row['receiver'];
	$sub=$row['subject'];
	$msg=$row['message'];
?>
<div id="container">

	To&emsp;:&emsp;<div id="top2"><?php echo $rec;?></div>
	<br/>Subject&emsp;:&emsp;<div id="top2"><?php echo $sub; ?></div>
	</br><div id="message"><?php echo $msg;?></div>
</div>
</body>
</html>