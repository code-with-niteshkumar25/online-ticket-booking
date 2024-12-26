<html>
</head>
<title>booking</title></head>
<style>
body{
	
background:linear-gradient(black,blue);
overflow-x:hidden;
}
.m1{
	position:relative;
	color:lightblue;
	font-size:30px;
	left:180px;
	top:40px;
	}
.m1:hover{
	color:white;
	text-shadow:3px 4px 6px white;
	border:1px solid white;
	width:80px;
	height:35px;
	border-radius:2px;
	
}
.m2{
	position:relative;
	color:lightblue;
	font-size:30px;
	left:350px;
	top:-15px;
	}
.m2:hover{
	color:white;
	text-shadow:3px 4px 6px white;
	border:1px solid white;
	width:80px;
	height:35px;
	border-radius:2px;
}
.m3{
	position:relative;
	color:lightblue;
	font-size:30px;
	left:520px;
	top:-70px;
	}
.m3:hover{
	color:white;
	text-shadow:3px 4px 6px white;
	border:1px solid white;
	width:110px;
	height:35px;
	border-radius:2px;
}
.m4{
	position:relative;
	color:lightblue;
	font-size:30px;
	left:730px;
	top:-125px;
	}
.m4:hover{
	color:white;
	text-shadow:3px 4px 6px white;
	border:1px solid white;
	width:100px;
	height:35px;
	border-radius:2px;
}
.img1{
	position:relative;
	height:420px;
	width:350px;
	top:20px;
	left:40px;
	border-radius:20px;

}
.img2{
	position:relative;
	height:420px;
	width:350px;
	top:20px;
	left:170px;
	border-radius:20px;

}

.img3{
	position:relative;
	height:420px;
	width:350px;
	top:20px;
	left:270px;
	border-radius:20px;

}

.img4{
	position:relative;
	height:420px;
	width:350px;
	top:150px;
	left:40px;
	border-radius:20px;

}
.img5{
	position:relative;
	height:420px;
	width:350px;
	top:150px;
	left:170px;
	border-radius:20px;

}

.img6{
	position:relative;
	height:420px;
	width:350px;
	top:150px;
	left:270px;
	border-radius:20px;
}
.o{
	position:relative;
	top:100px;
	border:1px solid white;
	height:900px;
	width:1330px;
	border-radius:20px;
}
.n{
position:relative;
	top:20px;
    left:40px;
	font-size:30px;
	color:white;
}	
.n1{
position:relative;
	top:-520px;
    left:660px;
	font-size:30px;
	color:white;

}	
.i
{
	position:relative;
	top:-43px;
    left:250px;
	font-size:30px;
	color:white;
	border-radius:20px;
	background:transparent;
}
.i1
{
	position:relative;
	top:-585px;
    left:850px;
	font-size:30px;
	color:white;
	border-radius:20px;
	background:transparent;
	background-color:blue;
}
h2{
	position:relative;
	font-size:60px;
	color:white;
	left:500px;
	}
	.ii{
		
	position:relative;
	font-size:30px;
 color:white;
	left:250px;
	TOP:-400px;
	width:90px;
	background:transparent;
	}
.l{	
	position:relative;
	font-size:30px;
 color:white;
	left:630px;
	TOP:-400px;
	width:90px;
	background:transparent;
		}
.d1{
	position:relative;
top:-410px;
left:50px;
color:white;	
	font-size:30px;
}
.d2{
	position:relative;
top:-510px;

left:550px;
color:white;	
	font-size:30px;
}
.d3{
	position:relative;
top:-610px;

left:970px;
color:white;	
	font-size:30px;
}
.d4{
	position:relative;
top:-150px;
left:100px;
color:white;	
	font-size:30px;
}
.d5{
	position:relative;
top:-240px;

left:600px;
color:white;	
	font-size:30px;
}
.d6{
	position:relative;
top:-340px;

left:1050px;
color:white;	
	font-size:30px;
}
a{
	text-decoration:none;
}
</style>
<body>
<a href="home.php">
<h1 class="m1">Home</h1></a>
<a href="about.php"><h1 class="m2">About</h1></a>
<a href="booking"><h1 class="m3">Booking</h1></a>
<a href="contect.php"><h1  class="m4">Contact</h1></a>
<image class="img1" src="bus1.jpg">
<image class="img2" src="bus2.jpg">
<image class="img3" src="bus3.jpg">
<image class="img4" src="bus4.jpg">
<image class="img5" src="bus5.jpg">
<image class="img6" src="bus6.jpg">

<p class="d1">Krishna<br>mp12:6353</br></h1> 
<p class="d2">Kewalram<br>mp12:6343</br></h1>
<p class="d3">Rathod<br>mp12:6253</br></h1>
<p class="d4">Rajpal<br>mp12:1323</br></h1>
<p class="d5">Rajeev<br>mp12:6753</br></h1>
<p class="d6">Aarya<br>mp12:6453</br></h1>
<h3 class="o">
<form method="POST">

<h2>Ragistration</h2>
<p class="n">Name:</p>
<input class="i"type="text" placeholder="name"  name="s1" required>
<p class="n">Address:</p>
<input class="i"type="text" placeholder="address" name="s2" required>
<p class="n">Mobile Number:</p>
<input class="i"type="text"  maxlength="10" min="10"placeholder="mo number" name="s3" required>
<p class="n">E_mail:</p>
<input class="i"type="text" placeholder="gmail" name="s4" required>
<p class="n1">Gender:</p>
<select class="i1"type="text" placeholder="Geander" name="s5" required>
<option value="Male ">Male</option>
<option value="Female ">Female</option>
<option value="Other">Other</option>
</select>
<p class="n1">Age:</p>
<input class="i1"type="text" placeholder="age" name="s6" required>
<p class="n1">Date:</p>
<input class="i1"type="date"  name="s7" required>
<p class="n1">Password</p>
<input class="i1"type="password" maxlength="8" min="8"  name="s8" required>
<input class="ii" type="submit" onclick="av();" value="ok"  name="k">
<a href="login.php"><p class="l">*login*</p></a>
<script>
function av()
{
alert("ragistration successfully");
}
</script>

<?php
error_reporting(0);
$srnm="localhost";
$pass="root";
$usernm="";
$dbnm="satyam";
$conn=mysqli_connect($srnm,$pass,$usernm,$dbnm);
?>
<?php
session_start();
include("conn.php");
if(isset($_POST['k']))
{
	
$n1=$_POST['s1'];
$n2=$_POST['s2'];
$n3=$_POST['s3'];
$n4=$_POST['s4'];
$n5=$_POST['s5'];
$n6=$_POST['s6'];
$n7=$_POST['s7'];
$n8=$_POST['s8'];

$query="insert into regi values('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8');";
$data=mysqli_query($conn,$query);
$table=mysqli_num_rows($data);
if(!$table>0)
{
	echo"successfully";
 header('location:login.php');
}
else
{
	echo"not found";
}
}

?>


</form>
</h3>
</body>
</html>