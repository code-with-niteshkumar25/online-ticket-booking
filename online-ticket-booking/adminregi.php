<html>
<head><title>regi</title>
<link rel="stylesheet" type="text/css" href="adregi.css">
</head>
<style>
body{
	position:fixed;
	background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url('home2.jpg');
	border-radius:50px;
}
img{
position:relative;
left:430px;
top:5px;
border-radius:50px;
height:1000px;
width:1000px;

}
.d{
	border:1px solid white;
	position:relative;
	height:600px;
	width:450px;
	color:rgba(0,0,0,0.94);
	left:450px;
	top:40px;
	border-radius:50px;
}
.d:hover{
	box-shadow:0px 0px 120px 0px  white;
}
.n{
	

	font-size:50px;
	position:relative;
	left:90px;
	top:-10px;
	color:white;
}
.t{
	position:relative;
	font-size:25px;
	left:65px;
	color:white;
}
.t1{
	position:relative;
	font-size:25px;
left:65px;
color:white;
}
.t2{
	position:relative;
	font-size:25px;
	left:65px;
	color:white;
}
.t3{
	position:relative;
	font-size:25px;
	left:65px;
	color:white;
}
.t4{
	position:relative;
	font-size:25px;
	left:65px;
color:white;
}
.i{
	position:relative;
	top:-50px;
	height:35px;
	width:180px;
	left:240px;
	border-radius:10px;
	font-size:18px;
	
	
    
}
.i:hover{
	background-color:black;
	color:white;
	box-shadow:0px 0px 40px 0px white;
}
.i1{
	position:relative;
	top:10px;
	height:30px;
	width:120px;
	border-radius:10px;
	left:-15px;

}
	
</style>
<body>
<form method="post">
<div class="d">
<h1 class="n">Ragistration</h1>
<h1 class="t"> Your Name:</h1>
<input  class="i" type="text" placeholder="name" name="n1" required>
<h1 class="t1"> Mobile no:</h1>
<input class="i" type="text" maxlength="10" min="10" placeholder="mobile no" name="n2" required>
<h1 class="t2"> Address:</h1>
<input class="i" type="text" placeholder="address" name="n3" required>
<h1 class="t3"> E-mail:</h1>
<input  class="i" type="text" placeholder="e-mail" name="n4" required>
<h1 class="t4"> Password:</h1>
<input class="i" type="text" maxlength="8" min="8" placeholder="password" name="n5" required>
<input class="i1" type="submit" onclick="nan()" value="submit" name="ragi">
<script>
function nan()
{
alert('ragi. successfully');

}
</script>
<?php
error_reporting(0);
session_start();
include("conn.php");
if(isset($_POST['ragi']))
{
$r1=$_POST['n1'];
$r2=$_POST['n2'];
$r3=$_POST['n3'];
$r4=$_POST['n4'];
$r5=$_POST['n5'];
 if(empty($r1) or empty($r2) or empty($r3)  or empty($r4) or empty($r5))
 {
	 echo"<h3 style='color:white'>plz data required with coorect manner</h3>";
 }
 else
 {
	 if($r5)
		 $d="select *from adminregi;";
	      $d1=mysqli_query($conn,$d);
		  $d2=mysqli_num_rows($d1);
		  if($d2>=1)
		  {
			   echo"<h3 style='color:white'>Admin Already Register</h3>";
		  }
		  else
		  {
			  
$query="insert into adminregi values('$r1','$r2','$r3','$r4','$r5');";
$data=mysqli_query($conn,$query);

if($data>0)
{
 header('location:adminlog.php');
   
}
else
{
	echo"data not insert";

}
}}}
?>
</form>
</body>
</html>