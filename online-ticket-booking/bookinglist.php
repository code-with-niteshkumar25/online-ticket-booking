 <html>
<head>
<style>
body{
	background-color:red;
	overflow-x:hidden;
overflow-y:hidden;
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
	width:70px;
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
	width:180px;
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
table,th ,td{
	border:1px solid white;
}
table {
	border-collapse:collapse;
	width:100%;
}
th{
color:black;
font-size:30px;
}
td{
color:white;
font-size:25px;
text-align:center;
}


</style>
<body>
<a href="ditials.php"><h1 class="m1">Home</h1></a>
<a href="regilist.php"><h1 class="m2">Registrations</h1></a>
<a href="bookinglist.php"><h1 class="m3">Bookings</h1></a>
<a href="fb.php"><h1  class="m4">Feedback</h1></a>
<form method="POST">
<?php
include("conn.php");

$query="select *from  booknow;";
$data=mysqli_query($conn,$query);
$table=mysqli_num_rows($data);
if($table>0)
{
	?>
	<table>
	<tr>
	<th>Name</th>
	<th>Bus_Name</th>
	<th>Booking_Date</th>
	<th>Sheet_No</th>
	<th>From1</th>
    <th>Place</th>
	<th>Time</th>
	<th>Date</th>
     </tr>
	 <?php
	 	 while($rows=mysqli_fetch_assoc($data))
	 {
		 echo"<tr>
		 <td>".$rows['name']."</td>
	 <td>".$rows['bus_name']."</td>
	 <td>".$rows['booking_date']."</td>
	 <td>".$rows['sheet_no']."</td>
	 <td>".$rows['from1']."</td>
     <td>".$rows['place']."</td>
	 <td>".$rows['time']."</td>
     <td>".$rows['date']."</td>
	 </tr>";
}}
	 else
	 {
		 echo"data not found";
	 }


?>
</table>
<form>
</body>
</html>