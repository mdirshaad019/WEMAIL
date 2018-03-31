<head>
<title>WeMail</title>
<link rel="icon" type="text/jpg" href="1.jpg">
<style>
body{
	background: url(wallpapers.jpg);
	overflow:auto;
}	
	#top2{
		width:700px;
		display:inline-block;
		margin-bottom:10px;
		padding:3px 0px 3px 6px;
		height:20px;
		background-color:white;
		border-radius:4px;
		opacity:0.8
		padding: 6px 6px;
		opacity:0.8;
		border:1px solid hsl(0, 0%, 75%);
	}
	#message{
		margin-top:30px;
		width:700px;
		height:500px;
		display:inline-block;
		background-color:white;
		border-radius:12px;
		border:1px solid hsl(0, 0%, 75%);
		padding: 6px 6px;
	}
h1{
	text-align:center;
}
	
#container{
	
	
	margin:40px 0px 100px 200px ;
	display:inline-block;
	border:2px solid black;
	width:730px;
	padding:25px 40px 60px 40px;
	background-color:hsl(0, 0%, 97%);
	border-radius:12px;
	border:1px solid hsl(0, 0%, 75%);
	-webkit-box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.75);
box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.75);
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
	$num=$_GET['inc'];
	$result=mysql_query("SELECT * FROM messages WHERE inc='$num'");
	$row=mysql_fetch_array($result);
	$send=$row['sender'];
	$sub=$row['subject'];
	$msg=$row['message'];
?>
<div id="container">
	<h1>INBOX</h1>
	FROM&emsp;:&emsp;<div id="top2"><?php echo $send;?></div>
	<br/>Subject&emsp;:&emsp;<div id="top2"><?php if($sub==''){echo "<None>";}else echo $sub; ?></div>
	</br><div id="message"><?php echo "<pre>$msg</pre>";?></div>
</div>
</body>
</html>