<?php
include_once("connection1.php");
$cat=$_GET["uid"];
$query="select * from users where category='$cat'";
$table=mysqli_query($dbCon,$query);
$ary=array();
while($row=mysqli_fetch_array($table))
{
    $ary[]=$row;
}
echo json_encode($ary);

?>
