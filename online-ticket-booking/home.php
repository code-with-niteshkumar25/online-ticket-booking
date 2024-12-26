<html>
<head>
<title>the home page</title>
</head>
<style>
body
{


position:relative;
 
	
	background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("home.jpg");
	background-position:center center;
	height:50px;
	width:50px;
	animation-name:av;
	animation-iteration-count:2;
	animation-duration:120s;
}
@keyframes  av{
0%
{
background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("home.jpg");
	background-position:center center;
	height:50px;
	width:50px;
}
25%{
background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("home1.jpg");
	background-position:center center;
	height:50px;
	width:50px;
}
50%{
background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("home2.jpg");
	background-position:center center;
	height:50px;
	width:50px;
}
75%{
background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("home3.jpg");

	background-position:center center;
	height:50px;
	width:50px;}
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
	background-color:black;
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
background-color:black;
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
	background-color:black;
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
background-color:black;
}
.m5{
	position:relative;
	color:lightblue;
	font-size:30px;
	left:480px;
	top:120px;
	width:170px;
	height:35px;
		border:1px solid white;
		animation-duration:1s;
animation-iteration-count:1;
animation-name:aa;
	  }
	  @keyframes aa{
		  from{left:0px ;top:120px;}
		  to{left:480px; top:120px;}
	  }
	
.m5:hover{
	color:white;
	text-shadow:3px 4px 6px white;
background-color:black
}
.m6{
	position:relative;
	color:lightblue;
	font-size:30px;
	left:660px;
	top:62px;
	width:160px;
	height:35px;
		border:1px solid white;
      animation-duration:1s;
animation-iteration-count:1;
animation-name:as;
	  }
	  @keyframes as{
		  from{left:1200px ;top:62px;}
		  to{left:660px; top:62px;}
	  }
.m6:hover{
	color:white;
	text-shadow:3px 4px 6px white;
background-color:black
}
h1{
	position:relative;
	left:100px;
	top:100px;
	font-size:30px;
	font-color:white;
}
div{
position:relative;
	height:30px;
	width:1200px;
	background-color:transparent;
	color:white;
	font-size:25px;
   left:80px;
   border:1px solid white;
   border-radius:20px;
}
h2{
border:1px solid white;
position:absolute;
height:50px;
width:1000px;
top:20px;

}
a{
	text-decoration:none;
}
.img{
	position:relative;
	top:-180px;
	left:580px;
	height:140px;
	width:140px;
	border-radius:50%;
	border:7px dotted black;
	background-color:white;
	
}

</style>
<body>
<div><marquee>***Welcome To Online Bus Ticket Booking*** </marquee></div>

<a href=""><h1 class="m1">Home</h1></a>
<a href="about.php"><h1 class="m2">About</h1></a>
<a href="booking.php"><h1 class="m3">Booking</h1></a>
<a href="contect.php"><h1  class="m4">Contact</h1></a>
<a href="adminlog.php"><h1  class="m5">AdminLogin</h1></a>
<a href="adminregi"><h1  class="m6">Registration</h1></a>
<image class="img" src="loginicon.png">
<body>
</html>
