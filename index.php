
<?php
include_once("db_class.php");
?>
<!DOCTYPE>
<html>
<title>ONLINE MBA-MCA COUNSELLING WEBSITE</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script  type="text/javascript" src="js/bootstrap.min.js"></script>
<script   src="js/jquery.min.js"></script>

<body>
<style>

						.head{
	background-color:  lightgery;
	padding-bottom:10px;
	padding-left:10px;
	padding-right:20px;padding-top:10px;
	box-shadow:5px 5px 5px steelblue ;
}
						.tab1 {
  
							font-family: Times New Roman, Times, serif; font-size: 20px;border-collapse: collapse;border-right:20px solid #003333;
					 border-left:20px solid #003333;
					 border-top:20px solid #003333;border-bottom:20px solid #003333;box-shadow:5px 5px 5px grey ;
						}
						
					 .tab1 th{ 
							background-color:lightgrey;font-size: 25px; padding-top: 12px; 
	padding-left: 12px;padding-right: 12px;padding-bottom: 12px;color:blue;border:1px solid #aa80ff;
					 }
					 .tab1 td{
						 padding-top: 12px; 
	padding-left: 12px;padding-right: 12px;padding-bottom: 12px;
					 }
					 .sample{
  background-color: #ff6666;
  color: white;
  padding: 4px 12px;
  text-align: center;
  
}


.sample:hover{	
  background-color: green;
}			 
						</style>
						
<h2 class="head">
MBA-MCA COUNSELLING
    <marquee direction="left" style="background-color:#cac3c36b;border-radius:20px;padding-left:30%;color:#FFF;margin-top:4px;margin-left:30%;" width="40%"height="5%" >
		<b style="color:#FF0;font-size:14px">:) :) </b>
		<i style="font-family: Times New Roman, Times, serif; font-size: 20px;color:black;"> Welcome dude!!! Have a great learning.... </i>
	</marquee>
</h2>

<br>
<br>
<br>
<body>
<?php
if(isset($_POST['log']))
{
	$user=$_POST['user'];
	$pass=$_POST['pwd'];
	$a1=mysql_query("select * from log where username='$user' and password='$pass'");
	$b1=mysql_fetch_array($a1);
	if($b1==0)
	{
		?>
		<script>
		alert("Invalid username or password!!");
		window.location.href="index.php";
		</script>
		<?php
	}
	else
	{   ?>
		<script>
		alert("You are login successfully!!Welcome!");
		window.location.href="home.php";
		</script>
		<?php
	}
	?>
	<script>
		window.location.href="index.php";
	</script>
<?php	
}
?>
<form method="POST">
<table align="center" class="tab1"  width="40%">
<tr>
<th colspan="2">Login to getin!!
</th></tr>
<tr>
<td>Username
</td>
<td>
<input type="text" name="user" placeholder="enter ur email id" required style="border-radius:8px;height:25px;" width="70px"  >
</td>
</tr>
<tr>
<td>Password
</td>
<td>
<input type="password" name="pwd" placeholder="enter password" required style="border-radius:8px;height:25px;" width="70px" >
</td>
</tr>
<tr>
<td>
<a href="register.php">New User??
</a>
</td>
<td colspan="" align="right">
<input type="submit" class="sample" value="login" name="log">

</td>
</tr>
</table>
</form>
</body>
</html>