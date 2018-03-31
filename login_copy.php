<?php

?>
<!doctype>
<html>
<head>
<title>Wemail</title>
<link rel="icon" type="text/jpg" href="1.jpg">
<style>
	*{
		font-family:Roboto;
		}
		h2{
		top : 20px;
		font-size:2em;}
	form {
		
		text-align:center-right;
		padding:20px;
		width:280px;
		height: 350px;
		position:absolute;
		color:white;
		font-weight:italic;
		top:150px;
		left:450px;
		margin: 30px;
		background-color: #754448;
		margin-left: 20px;
		
		opacity: 0.7;
		-webkit-box-shadow: 10px 10px 5px -3px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px -3px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px -3px rgba(0,0,0,0.75);
		
}
	}
	p{
		display: inline-block;
		font-size=3em;
		font-family: Helvetica;
		display: inline-block;
	}
	.lin{
		
		color:white;
		font-size=3em;
		font-family: Helvetica;
		display: inline-block;
		text-decoration: none
	}
	p:hover {
		
		
		text-decoration:underline;
	}
	body {
		
		
		
		background-repeat: no-repeat;
	}
	
	h1 {
		margin-top:30px;
		margin-left:450px;
		font-weight:400px;
		font-family:Roboto Slab;
		font-size:4em;
		color:white;
		width:300px;
		height:70px;
		padding:20px;
		background: rgba(70, 72, 82, 0.2);
	}
	
	.a1{
		left : 30px;
		background-color:white;
		opacity:1;
		border-color: black;
		border-width:1px;
		height=35px;
		padding : 5px 10px;
		border-radius: 3px;
		font-size: 15px;
		}
		
	strong
	{
	font-size:20px;
	padding-bottom: 7px;
	font-weight: 200px;
	}
	.x
	{
		color: 
		padding:5px 5px;
		#754448;
		font-size : 15px;
		border-radius:3px;
		background-color: white;
		-webkit-box-shadow: 7px 7px 5px -3px rgba(51,22,35,1);
		-moz-box-shadow: 7px 7px 5px -3px rgba(51,22,35,1);
		box-shadow: 7px 7px 5px -3px rgba(51,22,35,1);
	}
	h4{
		color : red;
	}
</style>
</head>
<body background="photo_bg1.jpg"> 
<h1>WE MAIL</h1>

	<form action="handler_login_copy.php" method="post">
		<h2> &emsp;&emsp;LOG IN </h2>
		<strong>Email<br/></strong><input class = "a1" type="text" name="email" size = 30 />
		<br />
		<br />
		<strong>Password<br/></strong><input class = "a1" type="password" name="password" size = 30  />
		<br/>
		<br/>
		<h4> Wrong ID or Password </h4>
		
		<input class="x" type="submit" value="Sign In">
		&emsp;Or&emsp;
		<a class = "lin" href="wemail2final.php"><p>Create an Account</p></a>
	</form>
</body>
</html>