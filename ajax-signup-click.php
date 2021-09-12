<?php
include_once("connection1.php");
$userid=$_GET["uid"];
$pwdid=$_GET["pwd"];
$mobid=$_GET["mob"];
$cat=$_GET["uidd"];
/*if(isset($_GET["txtcat"]))
{
    $type=$_GET["txtcat"];
}*/	
if($userid==""||$pwdid==""||$mobid==""||$cat=="")
{
    echo "Please fill data";
}
else
{
$query="insert into users (uid,pwd,mobile,category,dos) values('$userid','$pwdid','$mobid','$cat',CURDATE())";
$table=mysqli_query($dbCon,$query);
  if($table==1)
{
    echo "<h3>Signed Up Successfully..</h3>";
}
else
{
    echo "Unsuccesfull..";
}
}
?>
