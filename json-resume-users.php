<?php
	include_once("connection1.php");
$uid=$_GET["uid"];

//$query="select * from onlineusers where uid='$uid'";
$query="update users set status='1' where uid='$uid'";
$table=mysqli_query($dbCon,$query);
/*
$ary=array();//JSON-1

while($row=mysqli_fetch_array($table))
{
	
	$ary[]=$row;
}
echo json_encode($ary);
*/
 if($table==1)
{
    echo "Status Updated User RESUMED he or she can again login";
}
else
{
    echo "Unable to Update Status";
}



?>
