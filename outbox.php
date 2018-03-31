<!doctype>
<html>
<head>
<title>WeMail</title>
<link rel="icon" type="text/jpg" href="1.jpg">
<style>
	img{
		height:100px;
		width:100px;
		border-radius:100%;
		float:left;
		border:2px solid red;
	}
	button{
		width:830px;
	margin-bottom:0px;
	text-align:left;
	padding : 3px;
	margin-left:20px;
	font-size : 14px;}
	form{
		margin-bottom:3px;
	}	}

	p{
		text-align: left;
	}
	#header{
		padding-top:20px;
		width:864px;
		
		height: 700px;
		float:left; 
		background-color:#f2f2f2;
		border-radius:12px;
	}
	
</style>
</head>
<body>

<?php
//$dbhost='localhost';
//$username='root';
//$password='';
//$db='New';
define('Db','newdb');
define('Db_user','root');
define('Db_host','localhost');
define('Db_password','');
mysql_connect(Db_host, Db_user, Db_password);
mysql_select_db(Db) or die();


$email =$_GET['email'];


$result=mysql_query("SELECT * FROM table1 WHERE email='$email'");
$row=mysql_fetch_array($result);
$name=$row['Name'];
$ppic=$row['ppic'];
	
?>
	<img src ="<?php echo $ppic;?>"/>
	<div id="header">

<?php	
	$result=mysql_query("SELECT * FROM messages WHERE sender='$email'");
	while ($row = mysql_fetch_assoc($result)) {
    

	$sub=$row['subject'];
	$rec=$row['receiver'];
	$num=$row['inc'];
	


?>


<form action="open_outbox_msg.php" method="post">
	
<button name="submit" type="submit"  value="<?php echo $num;?>">&emsp;&emsp;<strong>To</strong>&ensp;:&ensp;<?php echo $rec; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Subject</strong>&emsp;:&emsp;<?php echo $sub ?></button>
</form>

<?php
}
mysql_close();	
?>
</div>
</body>
</html>