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
	}
	button{
		width:830px;
	margin-bottom:0px;
	text-align:left;
	padding : 3px;
	font-size : 14px;}
	form{
		margin-bottom:3px;
	}	}

	p{
		text-align: left;
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


$email =$_POST['email'];
$pass=$_POST['password'];

$result=mysql_query("SELECT * FROM table1 WHERE email='$email'");
$row=mysql_fetch_array($result);
if($row['password']==$pass)
{
	$name=$row['Name'];
	
	$ppic=$row['ppic'];
	
	?>
	<img src ="<?php echo $ppic;?>"/>
	<?php
?>
<a href="outbox.php?email=<?php echo $email;?> " >Outbox</a>

<?php	
	$result=mysql_query("SELECT * FROM messages WHERE receiver='$email'");
	while ($row = mysql_fetch_assoc($result)) {
    

	$sub=$row['subject'];
	$send=$row['sender'];
	$num=$row['inc'];
	


?>


<form action="open_inbox_msg.php" method="post">
	
<button name="submit" type="submit"  value="<?php echo $num;?>">&emsp;&emsp;<strong>FROM</strong>&ensp;:&ensp;<?php echo $send; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Subject</strong>&emsp;:&emsp;<?php echo $sub ?></button>
</form>

<?php
	}
?>


<?php
mysql_close();}
else{
		header('Location: login_copy.php'); 
	}

?>
</body>
</html>