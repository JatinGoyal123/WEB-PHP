<?php
include_once("connection1.php");
$cuid=$_GET["cuid"];
$wuid=$_GET["wuid"];
/*if(isset($_GET["txtcat"]))
{
    $type=$_GET["txtcat"];
}*/	
$query="insert into rating values(default,'$cuid','$wuid',1)";
$table=mysqli_query($dbCon,$query);
$msg=mysqli_error($dbCon);
  if($msg=="")
{
    echo "<h3>Request Posted Successfully..</h3>";
}
else
{
    echo $msg;
}
?>
