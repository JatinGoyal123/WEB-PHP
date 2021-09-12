<?php

include_once("connection1.php");
$rid=$_GET["rid"];
 $query = "SELECT * from workers where uidd='$rid'";
 $result = mysqli_query($dbCon,$query);
 while($row = mysqli_fetch_array($result))
     {
        $rating = $row['rating'];
        $count = $row['count'];
        $tot = $row['total'];
     }
    

$cou=$count+1;

$rval=$_GET["ratvalue"];

$total=$tot+$rval;
$rat=($total)/$cou;

$query1="update workers set count='$cou',rating='$rat',total='$total' where uidd='$rid'";
$table=mysqli_query($dbCon,$query1);


  if($table==1)
{
    echo "RAting Done Successfully..";
}
else
{
    echo "Unable to Rate";
}


?>