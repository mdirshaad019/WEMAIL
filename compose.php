<?php
	session_start();
	$email=$_GET['email'];
	$_SESSION['sender'] = $email;
	
?>
<html>
<head>
<title>WeMail</title>
<link rel="icon" type="text/jpg" href="1.jpg">
<style></style>
<body>
<form action="send.php" method="post">
	
		<strong>To:</strong><input class = "a1" type="text" name="receiver" size = 30 />
		<br />
		<br />
		<strong>Subject</strong><input class = "a1" type="text" name="subject" size = 30  />
		<br/>
		<br/>
		
		<textarea  class = "msg"name="msg" cols="70" rows="10"></textarea>
		<br>
		<input class="x" type="submit" value="Sign In">
		</form>
</body>
</html>