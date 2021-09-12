<?php
session_start();//creates session array

include_once("connection1.php");

$uid=$_GET["uid"];
$pwd=$_GET["pwd"];

$query="select * from users where uid='$uid' AND pwd='$pwd' AND status=1";
$table=mysqli_query($dbCon,$query);

$count=mysqli_num_rows($table);
if($count==1)
{
    $row=mysqli_fetch_array($table);
    $categoryy=$row["category"];
    $_SESSION["activeuser"]=$uid;//storeuid in session
    echo $categoryy;
}
else
{
    echo "INVALID ID OR PASSWORD";
}
?>
