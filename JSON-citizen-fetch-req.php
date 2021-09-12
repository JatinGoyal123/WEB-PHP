<?php
include_once("connection1.php");
$uid=$_GET["uid"];
//$query="select * from onlineusers where uid='$uid'";
$query="select * from requirements where cuid='$uid'";
$table=mysqli_query($dbCon,$query);

$ary=array();//JSON-1

while($row=mysqli_fetch_array($table))
{
	
	$ary[]=$row;
}
echo json_encode($ary);
?>
