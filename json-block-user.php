<?php
include_once("connection1.php");
$cat=$_GET["uidd"];
$query="update users set status='0' where uid='$cat'";
$table=mysqli_query($dbCon,$query);
//$ary=array();
//while($row=mysqli_fetch_array($table))
//{
//    $ary[]=$row;
//}
//e/cho json_encode($ary);

//?>
