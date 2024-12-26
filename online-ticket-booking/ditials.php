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
@keyframes  a{
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
	left:400px;
	top:-15px;
	}
.m2:hover{
	color:white;
	text-shadow:3px 4px 6px white;
	border:1px solid white;
	width:170px;
	height:35px;
	border-radius:2px;
background-color:black;
}
.m3{
	position:relative;
	color:lightblue;
	font-size:30px;
	left:700px;
	top:-70px;
	}
.m3:hover{
	color:white;
	text-shadow:3px 4px 6px white;
	border:1px solid white;
	width:120px;
	height:35px;
	border-radius:2px;
	background-color:black;
}
.m4{
	position:relative;
	color:lightblue;
	font-size:30px;
	left:980px;
	top:-125px;
	}
.m4:hover{
	color:white;
	text-shadow:3px 4px 6px white;
	border:1px solid white;
	width:130px;
	height:35px;
	border-radius:2px;
background-color:black;
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
.m5{
	position:relative;
	top:50px;
	left:600px;
color:white;
font-size:30px;
border:1px solid white;
height:35px;
width:100px;
}

</style>
<body>
<div><marquee>***Welcome to Online Bus Ticket Booking*** </marquee></div>
<a href=""><h1 class="m1">Home</h1></a>
<a href="regilist.php"><h1 class="m2">Registrations</h1></a>
<a href="bookinglist.php"><h1 class="m3">Bookings</h1></a>
<a href="fb.php"><h1  class="m4">Feedback</h1></a>
<a href="home.php"<h1 class="m5">Logout</h1>
<body>
</html>
