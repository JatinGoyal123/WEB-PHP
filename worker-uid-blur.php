<?php
$userid=$_GET["uid"];
//echo "Welcome :".$userid;
include_once("connection1.php");


$query="select * from workers where uidd='$userid'";
$table=mysqli_query($dbCon,$query);//0-1
//alert("hello");
if(mysqli_num_rows($table)==1)
	echo "Already existed..";
else    
	echo "Continue...";
?>
