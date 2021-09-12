<?php
include_once("connection1.php");
$category=$_GET["category"];
$city=$_GET["city"];

//$query="select * from onlineusers where uid='$uid'";
$query="select * from workers where category='$category' and city='$city'";
$table=mysqli_query($dbCon,$query);

$ary=array();//JSON-1

while($row=mysqli_fetch_array($table))
{
	
	$ary[]=$row;
}
echo json_encode($ary);
?>
