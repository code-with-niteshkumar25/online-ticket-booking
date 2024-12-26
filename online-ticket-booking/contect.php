<html>
</head>
<title>booking</title></head>
<style>
body{
	
background:linear-gradient(dodgerblue,aqua);

}
.m1{
	position:relative;
	color:lightblue;
	font-size:30px;
	left:180px;
	top:40px;
	color:black;
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
	color:black;
	}
.m2:hover{
	color:white;
	text-shadow:3px 4px 6px white;
	border:1px solid red;
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
	color:black;
	}
.m3:hover{
	color:white;
	text-shadow:3px 4px 6px white;
	border:1px solid aqua;
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
	color:black;
	}
.m4:hover{
	color:white;
	text-shadow:3px 4px 6px white;
	border:1px solid yellow;
	width:100px;
	height:35px;
	border-radius:2px;
}
.o{
	position:relative;
	top:-10px;
	border:1px solid white;
	height:900px;
	width:1330px;
	border-radius:20px;
}
.n{
position:relative;
	top:20px;
    left:350px;
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
    left:750px;
	font-size:30px;
	color:white;
	border-radius:2px;
	background:transparent;
}

	.ii{
		
	position:relative;
	font-size:30px;
 color:white;
	left:-200px;
	TOP:200px;
	width:90px;
	background:transparent;
	}
.s{
		position:relative;
	font-size:30px;
 color:white;
	left:310px;
	TOP:30px;
	height:100px;
	width:800px;

	background:transparent;
}
a{
	text-decoration:none;
	color:white;
}
.facbook{
	position:relative;
	height:120px;
	width:120px;
	top:150px;
	left:200px;
	
	border-radius:10px;
}
.facbook:hover{
	box-shadow:0px 0px 55px 0px white;
	border:2px dotted yellow;
}
.insta{
	position:relative;
	height:120px;
	width:120px;
	top:160px;
	left:500px;
	
	border-radius:10px;
}
.insta:hover{
	box-shadow:0px 0px 55px 0px white;
	border:2px dotted yellow;
}
.google{
	position:relative;
	height:120px;
	width:120px;
	top:160px;
	left:800px;
	
	border-radius:10px;
}
.google:hover{
	box-shadow:0px 0px 55px 0px white;
	border:2px dotted yellow;
}

div{
	background-color:black;
	height:600px;
	width:1330px;
	border-radius:10px;
}
h4{
	position:relative;
	color:white;
	font-size:25px;
	top:200px
}
h5{
	position:relative;
	color:white;
	font-size:25px;
	top:60px;
	left:950px;
}
h6{
	position:relative;
	color:white;
	font-size:80px;
	top:20px;
left:200px;
text-shadow:3px 2px 13px  red;
animation-name:av;
animation-iteration-count:10;
animation-duration:3s
}
@keyframes a{
	0%{
		color:red;
		text-shadow:3px 2px 50px  silver;
	}
	20%{
		color:blue;
		text-shadow:3px 2px 50px  yellow;
	}
	40%{
		color:aqua;
		text-shadow:3px 2px 50px  syn;
	}
	60%{
		color:yellow;
		text-shadow:3px 2px 50px  green;
	}
	80%{
		color:silver;
		text-shadow:3px 2px 50px  white;
	}
	100%{
		color:red;
		text-shadow:3px 2px 50px  blue;
	}
}
h2{
	position:relative;
	left:600px;
}
	
	
</style>
<body>
<a href="home.php">
<h1 class="m1">Home</h1></a>
<a href="about.php"><h1 class="m2">About</h1></a>
<a href="booking"><h1 class="m3">Booking</h1></a>
<a href=""><h1  class="m4">Contact</h1></a>
<h3 class="o">
<form method="POST">
<h2>Feedback</h2>
<p class="n">Name:</p>

<input class="i"type="text" placeholder="name"  name="v1" required>
<p class="n">Mobile No:</p>
<input class="i"type="number" maxlength="10" min="10" placeholder="mo.no" name="v2" required>

<p class="n">Date</p>
<input class="i"type="date"  name="v3" required>
<p class="n">Suggest Now</p>
<textarea class="s" value="" rows="4" cols="2" maxlength="100" min="100" placeholder="type feedback"  name="v4" required>
</textarea>


<input class="ii" type="submit" onclick="av();" value="ok"  name="ok">
<script>
function av()
{
	alert("Thank for suggest us");
}
</script>
</h3>
<div>
<a href=""><image class="facbook" src="facbook.gif"></a>
<a href=""><image class="insta" src="insta.gif"></a>
<a href=""><image class="google" src="google.png"></a>

<h4> Contect now:9301255512 Rampal goud</h4>
<h4> Contect now:7999738580 Satyanarayan yadav</h4>
<h5><a href="">rampalgoud10@gmail.com</a></h5>
<h5><a href="">satyamyadav2845@gmail.com</a></h5>
<h6><marquee>***have a nice journey***</marquee></h6>
<?php
include('conn.php');
session_start();
if(isset($_POST['ok']))
{
$b1=$_POST['v1'];
$b2=$_POST['v2'];
$b3=$_POST['v3'];
$b4=$_POST['v4'];
$query="insert into fb values('$b1','$b2','$b3','$b4');";
$data=mysqli_query($conn,$query);
$table=mysqli_num_rows($data);
}
?>
</form>

</body>
</html>