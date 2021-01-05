<?php
session_start();
if($_SERVER['REQUEST_METHOD']=="POST"){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$mobno=$_POST['mobno'];
	$blood=$_POST['blood'];
}
$server="localhost";
$user="root";
$pw="";
$db="sample";
$conn=new mysqli($server,$user,$pw,$db);
if($conn->$connect_error)
{
	die("connection failed:" .$conn->$conn_error);
}
else
{
	$sql="insert into register(name,email,password,mobno,blood) values('$name','$email','$password','$mobno','$blood')";
	$result=$conn->query($sql);
	if($result==TRUE)
	{
		echo '<script>window.alert("inserted successfully")</script>';
		echo '<script>setTimeout(function(){window.location.href="login.html"},100);</script>';
	}
	else{
		echo '<script>window.alert("error occured")</script>';
		echo '<script>setTimeout(function(){window.location.href="register.html"},100);</script>';
	}
}
$conn->close();
?>
		