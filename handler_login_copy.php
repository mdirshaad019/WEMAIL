<!DOCTYPE html>
<html>
<head>
<style>
body{
	background: url(wallpapers.jpg);
	overflow:auto;
}	
body {font-family: "Lato", sans-serif;}
img{
		height:100px;
		width:100px;
		border-radius:100%;
	}
/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1; 
	width: 820px;
	-webkit-box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.75);
box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.75);
	
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}
hr{
	width:760px;
}
a{
	text-decoration:none;
	color:black;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
	width: 796px;
	background-color:white;
	-webkit-box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.75);
box-shadow: 6px 7px 5px 0px rgba(0,0,0,0.75);
}
a.x{
	border:2px solid red;
	height:80px;
	width: 150px;
	background-color:red;
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
	<a class="x" href="compose.php?email=<?php echo $email;?>">Compose</a>
	<div class="tab">
  <button class="tablinks" onclick="openTab(event, 'Inbox')">Inbox</button>
  <button class="tablinks" onclick="openTab(event, 'Outbox')">Outbox</button>
  
</div>

<div id="Inbox" class="tabcontent">
  <?php
	$result=mysql_query("SELECT * FROM messages WHERE receiver='$email'");
	while ($row = mysql_fetch_assoc($result)) {
	$sub=$row['subject'];
	$rec=$row['sender'];
	$num=$row['inc'];
  ?>
  <a href="open_inbox_msg_copy.php?inc=<?php echo $num;?> "><strong>From&emsp;:&emsp;</strong><?php echo $rec; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Subject&emsp;:&emsp;</strong> <?php echo $sub?></a>
  <hr>
  <?php }?>
</div>

	
<div id="Outbox" class="tabcontent">
 <?php
	$result=mysql_query("SELECT * FROM messages WHERE sender='$email'");
	while ($row = mysql_fetch_assoc($result)) {
	$sub=$row['subject'];
	$rec=$row['receiver'];
	$num=$row['inc'];
  ?>
  <a href="open_outbox_msg_copy.php?inc=<?php echo $num;?> "><strong>From&emsp;:&emsp;</strong><?php echo $rec; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<strong>Subject&emsp;:&emsp;</strong> <?php echo $sub?></a>
  <hr>
  <?php }?>
</div>

<?php }
else {
		header('Location: login_copy.php'); 
	}?>

<script>
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
 
</body>
</html> 
