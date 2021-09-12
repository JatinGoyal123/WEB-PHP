<?php
include_once("connection1.php");
$rid=$_GET["rid"];
//$query="select * from onlineusers where uid='$uid'";
$query="delete from requirements where rid=$rid";
$table=mysqli_query($dbCon,$query);
$msg=mysqli_error($dbCon);

if($msg=="")
{
    echo "REcord Deleted";
}
//echo json_encode($ary);
else
    
{
    echo $msg;
}
?>
