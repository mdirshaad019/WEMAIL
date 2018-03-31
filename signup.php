<?php

?>
<!doctype>
<html>
<head>
<title>WeMail</title>
<link rel="icon" type="text/jpg" href="1.jpg">
<style>
	form
	{
		text-align:center-right;
		padding:20px;
		width:400px;
		background-color: #754448;
		position:absolute;
		color:white;
		font-weight:italic;
		top:170px;
		left:370px;
		font-size:20px;
		height:770px;
		margin-bottom:100px;
		-webkit-box-shadow: 10px 10px 5px -3px rgba(0,0,0,0.75);
		-moz-box-shadow: 10px 10px 5px -3px rgba(0,0,0,0.75);
		box-shadow: 10px 10px 5px -3px rgba(0,0,0,0.75);
		opacity:0.7;
	
	}
	body {
		background-image:boat.jpg;
	}
	
	h1 {
		
		margin-top:30px;
		margin-left:400px;
		font-weight:400px;
		font-family:Roboto Slab;
		font-size:4em;
		color:white;
		width:300px;
		height:70px;
		padding:20px;
		background: rgba(70, 72, 82, 0.2);
	}
	
	input{
	border-color:black;
	border-width:1px;
	font-size:14px;
	font-weight:300;}
	
	
	a {
		color:pink;
		text-decoration:none;
	}
	a:hover{
		color:orange;
		text-decoration:underline;
	}
	input ,select{
	padding:4px 10px 4px 5px;
	border-radius:3px;
	width:165px;
	}
	input.user, input.pass,input.ret,input.ppic{
	width:350px;
	}
	input.lname{
	
	width:165px;
	
	}
	input.fname{
	margin-right:5px;
	}
	input.mob{
	
	margin-left:0px;
	width: 150px;
	}
	a.lin{
	color:white;
	text-decoration:none;}
	a:hover{
	text-decoration:underline; 
	}
	input.button{
	font-size:15px;
	
	webkit-box-shadow: 7px 7px 5px -3px rgba(51,22,35,1);
		-moz-box-shadow: 7px 7px 5px -3px rgba(51,22,35,1);
		box-shadow: 7px 7px 5px -3px rgba(51,22,35,1);

	}
	h2{
	padding-left:100px;
	font-size:2em;
	}
	input.user{
	width:220px;
	font-weight:700;}
	select.gender,input.ppic{
	border:1px solid black;
	background-color:white;
	font-weight:500;
	color:black;
	font-size:15px;
	}
	input.gender{
		margin-right:5px;
		}
	#radio{
		width:20px;
		}
	input{
		font-size:15px;
		}
</style>
</head>
<body background="photo_bg2.jpg"> 
<h1>WE MAIL</h1>

	<form action="handler_signup.php" method="post">
		<h2>SIGN UP</h2>
		Name :<br><input class="fname" placeholder="First Name" type="text" size="20" maxlength="20" name="fname">
		&emsp;&emsp;
		<input  placeholder="Last Name" class="lname"type="text" size="20" maxlength="20" name="lname">
		<br />
		<br />
		Date of Birth :<br><input type="date" value="current" name="date">
		<br />
		<br />
	
		Gender :&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;Mobile no :<br><select class="gender"name="gender">
			<option>Male</option>
			<option>Female</option>
			<option>Transgender</option>
		</select>&emsp;&emsp;&emsp;
		<input class="mob" type="text" size="10" maxlength="20" name="mobile">
		<br/>
		<br/>
		Choose username :<br><input class="user "type="text" size="20" maxlength="20" name="username">
		@wemail.com
		<br><br>Password :<br><input class="pass" type="password" name="password">
		<br/>
		<br/>
		Retype Password:<br><input class="ret" type="password" name="retpassword">
		<br/>
		<br/>
		Profile Pic
		<br/>
		
		<input class="ppic" type="file" name="ppic">
		<br/>
		<br/>
		<a class="lin" href="t&c.html">Term & condition</a>
		<br/>
		<input id="radio" type="radio" name="tc">&ensp;
		I Agree
		<br/>
		<br/>
		<input class="button" type="submit" value="Submit" name="submit">
	</form>
</body>
</html>