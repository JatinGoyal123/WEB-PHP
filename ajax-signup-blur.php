<?php
$uid=$_GET["uid"];
//echo "Welcome :".$userid;
include_once("connection1.php");
$query="select * from users where uid='$uid'";
$table=mysqli_query($dbCon,$query);//0-1
if(mysqli_num_rows($table)==1)
	echo "<h6>Already existed</h6>";
else
	echo "<h6>Continue..</h6>";
?>
