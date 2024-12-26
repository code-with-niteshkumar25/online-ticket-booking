<html>
</head>
<title>booking</title></head>
<style>
body{
	
background:linear-gradient(slateblue,violet);
overflow-x:hidden;
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
	background-color:slateblue;
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
	background-color:slateblue;
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
	left:400px;
	TOP:-400px;
	width:90px;
	background:transparent;
	}
table{
	border-collapse:collapse;
	border:1px solid white;
	width:100%;
}
td,th{
	border:1px solid white;
	text-align:left;
	padding:8px;
	
	font-size:20px;
	
}
th{
	font-size:30px;
	color:white;
}

td{
color:white;	
}
	h4{
		position:relative;
	  color:white;
	  font-size:30px;
	  left:650px;
	  top:20px;
	  height:35px;
	  width:100px;
	  border:1px solid white;
	  }
	  a{
		  color:white;
           text-decoration:none;	  
	  }
		
</style>
<body>
<h3 class="o">
<form method="POST">
<h2>Booking now</h2>
<p class="n">Name:</p>
<input class="i"type="text" placeholder="name"  name="s1" required>
<p class="n">Bus Name:</p>
<select class="i"type="text" placeholder="bus name" name="s2" required>
<option value="Kewalram">Kewalram</option>
<option value="Rathod">Rathod</option>
<option value="Rajpal">Rajpal</option>
<option value="Krishna">krishna</option>
<option value="Rajeev">Rajeev</option>
<option value="Aarya">Aarya</option>
</select>
<p class="n">Booking Date:</p>
<input class="i"type="date" placeholder="booking  date" name="s3" required>
<p class="n">Sheet No:</p>
<select class="i"type="number" placeholder="sheet no" name="s4" required>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
</select>
<p class="n1">From:</p>
<input class="i1"type="text" placeholder="start journey" name="s5" required>
<p class="n1">Place:</p>
<input class="i1"type="text" placeholder="place" name="s6" required>
<p class="n1">Time:</p>
<input class="i1"type="time"  name="s7" required>
<p class="n1">Date</p>
<input class="i1"type="date"  name="s8" required>
<input class="ii" type="submit" onclick="av();" value="ok"  name="ok">
</h3>
<h4><a href="home.php">Logout</h4>
<script>
function av()
{
	alert("Booking successfully");
}
</script>
<?php
include('conn.php');
session_start();
if(isset($_POST['ok']))
{
$n1=$_POST['s1'];
$n2=$_POST['s2'];
$n3=$_POST['s3'];
$n4=$_POST['s4'];
$n5=$_POST['s5'];
$n6=$_POST['s6'];
$n7=$_POST['s7'];
$n8=$_POST['s8'];

$query="insert into booknow values('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8');";
$data=mysqli_query($conn,$query);
$table=mysqli_num_rows($data);
}
?>
</table>
</form>
</h3>
</body>
</html>