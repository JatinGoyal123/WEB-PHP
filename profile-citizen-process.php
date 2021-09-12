<?php
include_once("connection1.php");
$btn=$_POST["btn"];
if($btn=="Save")
{
    doSignup($dbCon);
}
else
{
    doupdate($dbCon);
}

function doSignup($dbCon)
{
$uid=$_POST["txtUid"];
$name=$_POST["txtnam"];
$mob=$_POST["txtcon"];
$add=$_POST["txtadd"];
$city=$_POST["txtcit"];
$stat=$_POST["txtsta"];
$email=$_POST["txtema"];
$orgName=$_FILES["profilePic"]["name"];
$tmpName=$_FILES["profilePic"]["tmp_name"];
$query="insert into citizens values('$uid','$name','$mob','$add','$city','$stat','$orgName','$email')";
mysqli_query($dbCon,$query);
$msg=mysqli_error($dbCon);
if($msg=="")
{
	move_uploaded_file($tmpName,"uploads/".$orgName);
	echo "<h2>You are signed up successfully...</h2>";
}
else
	echo $msg;
}

function doupdate($dbCon)
{

$uid=$_POST["txtUid"];
$name=$_POST["txtnam"];
$mob=$_POST["txtcon"];
$add=$_POST["txtadd"];
$city=$_POST["txtcit"];
$stat=$_POST["txtsta"];
$email=$_POST["txtema"];
$orgName=$_FILES["profilePic"]["name"];
$tmpName=$_FILES["profilePic"]["tmp_name"];

    if($orgName=="")
    {
    $query="update citizens set uid='$uid',name='$name',contact='$mob',address='$add',city='$city',state='$stat',email='$email' where uid='$uid'";
    mysqli_query($dbCon,$query);
    $count=mysqli_affected_rows($dbCon);
    if($count==1)
    {
        echo "Updated without Pic";
    }
    else
    {
        echo "Not updated";
    }
    }
   else
    {
        $query="update citizens set uid='$uid',name='$name',contact='$mob',address='$add',city='$city',state='$stat',email='$email',pic='$orgName' where uid='$uid'";
       mysqli_query($dbCon,$query);
       $msg=mysqli_error($dbCon);
       if($msg=="")
       {
	       move_uploaded_file($tmpName,"uploads/".$orgName);
	       echo "<h2>Updated successfully...</h2>";
       }
          else
	           echo $msg;
    }
}
?>
