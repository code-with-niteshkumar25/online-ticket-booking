<html>
<head>
<title> loginform</title>

<style>
body{
	
background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("home1.jpg");
	background-position:center center;
	height:50px;
	width:50px;				
}
a{
	text-decoration:none;
}


div{
	border:2px solid black;
	border-radius:10px;
	position:relative;
	left:500px;
	top:100px;
	background-color:crimson;
	height:390px;
	width:350px;
	

}
div:hover{
box-shadow:0px 2px 240px 30px white;

}
.i{
	position:relative;
	left:90px;
	top:-20px;
font-size:35px;
color:white;
}
.i1{
	position:relative;
	top:-20px;
	left:90px;
	height:35px;
	border-radius:10px;
		border-color:red;
}
.i:hover{
	box-shadow:0px,0px,120px,0px yellow;
}
.i2
{
	position:relative;
	top:40px;
	left:-50px;
	height:30px;
	width:80px;
	border-radius:10px;
}
img{
	position:relative;
	height:100px;
	width:100px;
	top:7px;
	left:130px;
	border-radius:10px;
	background-color:white;
	border-radius:50%;
	}
img:hover{
	
	box-shadow:0px 23px 260px 20px blue;
}

</style>

<body>



<div>
<img src="loginicon.png">
<form method="POST">
<h1 class="i"> Your Name</h1>
<input class="i1" type="text" placeholder="name" name="n1" required>
<h1 class="i">Password</h1>
<input class="i1" type="password" maxlength="8" min="8" placeholder="Password" name="n2"required>

<input class="i2" onclick="av();" type="submit" value="Submit" name="k">

<script>
function av()
{
alert('login successfully');
}
</script>
<?php
error_reporting(0);
include('conn.php');
session_start();
	if(isset($_POST['k']))
{

	$u=$_POST['n1'];
	$p=$_POST['n2'];
	
    $query="select *from regi where name='$u'and password='$p';";
	
	$result=mysqli_query($conn,$query);
    $data=mysqli_num_rows($result);
	if($data==1)
	{
	echo"login successfully";
	header('location:booknow.php');
	}
	
	else
	{
	echo"you have entered incorrect password";
 
}	 }
	
	?>

</body>
</form>
</div>
</head>
<html>