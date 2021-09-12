<?php
include_once("connection1.php");
$uid=$_GET["uid"];
$cat=$_GET["cat"];
$loc=$_GET["loc"];
$prob=$_GET["prob"];
$city=$_GET["city"];
/*if(isset($_GET["txtcat"]))
{
    $type=$_GET["txtcat"];
}*/	
$query="insert into requirements(rid,cuid,category,problem,location,city,dop,deadline) values(default,'$uid','$cat','$prob','$loc','$city',CURDATE(),CURDATE()+INTERVAL 10 DAY)";
$table=mysqli_query($dbCon,$query);
$msg=mysqli_error($dbCon);
  if($msg=="")
{
    echo "Record Saved Successfully..";
}
else
{
    echo $msg;
}
?>
