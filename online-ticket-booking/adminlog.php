<html>
<head>
<title> loginform</title>

<style>
body{
	
background:linear-gradient(rgb(0,0,0,0.6),rgb(0,0,0,0.6)),url('home2.jpg');
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
	top:130px;
	background:transparent;
	height:390px;
	width:350px;
	animation-name:satyam;
	animation-itration:1;
	animation-duration:2s;
	background:linear-gradient(rgb(0,0,0,0.7),rgb(0,0,0,0.7)),url('home.jpg');
	background-size:cover;
	}
	@keyframes satyam{
		from{
		top:-100px; left:500px;}
		to{top:130px; left:500px;
		}
	}
		
div:hover{
box-shadow:0px 2px 240px 30px white;

}
.i{
	position:relative;
	left:90px;
	top:20px;
font-size:35px;
color:white;
}
.i1{
	position:relative;
	top:20px;
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
	top:70px;
	left:-50px;
	height:30px;
	width:80px;
	border-radius:10px;
}





div:hover{
box-shadow:0px 2px 240px 30px white;

}
.i{
	position:relative;
	left:90px;
	top:-20px;
font-size:35px;
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
	top:30px;
	left:-50px;
	height:30px;
	width:80px;
	border-radius:10px;
}
img{
	position:relative;
	height:100px;
	width:100px;
	top:10px;
	left:130px;
	border-radius:10px;
	
	}
img:hover{
	
	box-shadow:0px 23px 260px 20px blue;
}
h6{
	position:relative;
	color:white;
	font-size:12px;
	left:20px;
}
h5{
	position:relative;
	color:white;
	font-size:12px;
	left:240px;
	top:-40px;
}
a{
	color:white;
}
	


</style>

<body>


<div>
<img src="loginicon.png">
<form method="POST">

<h1 class="i"> Your Name</h1>
<input class="i1" type="text" placeholder="name" name="n1" required>
<h1 class="i">Password</h1>
<input class="i1" type="password" maxlength="8" min="8" placeholder="password" name="n2"required>

<input class="i2" onclick="av();" type="Submit" value="ok" name="k">
<h6><a href="adminreset"> Forget pwd</a></h6>
<h5><a href="adminregi"> Registration</a></h5>
</div>
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
	
    $query="select *from adminregi where name='$u'and password='$p';";
	
	$result=mysqli_query($conn,$query);
    $data=mysqli_num_rows($result);
	if($data==1)
	{
	echo"login successfully";
	header('location:ditials.php');
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