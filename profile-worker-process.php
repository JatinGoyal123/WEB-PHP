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
$con=$_POST["txtcon"];
$add=$_POST["txtadd"];
$city=$_POST["txtcit"];
$stat=$_POST["txtsta"];
$email=$_POST["txtema"];
$frm=$_POST["txtfirm"];
$cat=$_POST["txtcat"];
$spl=$_POST["txtspl"];
$exp=$_POST["txtexp"];
$pwork=$_POST["txtpwork"];
$orgName=$_FILES["profilePic"]["name"];
$orgName1=$_FILES["AadharCardPic"]["name"];
$tmpName=$_FILES["profilePic"]["tmp_name"];
$tmpName1=$_FILES["AadharCardPic"]["tmp_name"];
    $status=1;
//alert("hello");
$query="insert into workers values('$uid','$name','$con','$frm','$city','$add','$stat',
'$cat','$spl','$exp','$pwork','$orgName1','$orgName','$email',$status,0,0)";
mysqli_query($dbCon,$query);
$msg=mysqli_error($dbCon);
if($msg=="")
{
	move_uploaded_file($tmpName,"uploadw/".$orgName);
	move_uploaded_file($tmpName1,"uploadw/".$orgName1);
	echo "<h2>You are signed up successfully...</h2>";
}
else
	echo $msg;
}

/*
function doupdate($dbCon)
{

    $uid=$_POST["txtUid"];
$name=$_POST["txtnam"];
$con=$_POST["txtcon"];
$add=$_POST["txtadd"];
$city=$_POST["txtcit"];
$stat=$_POST["txtsta"];
$email=$_POST["txtema"];
$frm=$_POST["txtfirm"];
$cat=$_POST["txtcat"];
$spl=$_POST["txtspl"];
$exp=$_POST["txtexp"];
$pwork=$_POST["txtpwork"];
$orgName=$_FILES["profilePic"]["name"];
$orgName1=$_FILES["AadharCardPic"]["name"];
$tmpName=$_FILES["profilePic"]["tmp_name"];
$tmpName1=$_FILES["AadharCardPic"]["tmp_name"];
$status=1;

    if($orgName=="" && $orgName1=="")
    {
    
    $query="update workers set wname='$name',contact='$con',firmshop='$frm',city='$city',address='$add',stat='$stat',category='$cat',spel='$spl',exp='$exp',prwork='$pwork',email='$email' where uidd='$uid' AND status=1";
    mysqli_query($dbCon,$query);
    $count=mysqli_affected_rows($dbCon);
    if($count==1)
    {
        echo "updated without Aadhar card pic and profile pic";
    }
    else
    {
        echo "not updated";
    }
        
    }
    
    
    
    else if($orgName=="") 
    {
    
    $query="update workers set wname='$name',contact='$con',firmshop='$frm',city='$city',address='$add',stat='$stat',category='$cat',spel='$spl',exp='$exp',prwork='$pwork',apic='$orgName1',email='$email' where uidd='$uid' AND status=1";
    mysqli_query($dbCon,$query);
    $count=mysqli_affected_rows($dbCon);
        
        
       // move_uploaded_file($tmpName,"uploadw/".$orgName);
	move_uploaded_file($tmpName1,"uploadw/".$orgName1);
    if($count==1)
    {
        echo "Data updated with Aadhar Card pic";
    }
    else
    {
        echo "not updated";
    }
    }
    
    
    
    
    
    else if($orgName1=="")  
    {
    
    $query="update workers set wname='$name',contact='$con',firmshop='$frm',city='$city',address='$add',stat='$stat',category='$cat',spel='$spl',exp='$exp',prwork='$pwork',ppic='$orgName',email='$email' where uidd='$uid' AND status=1";
    mysqli_query($dbCon,$query);
    $count=mysqli_affected_rows($dbCon);
        move_uploaded_file($tmpName,"uploadw/".$orgName);
	//move_uploaded_file($tmpName1,"uploadw/".$orgName1);
    if($count==1)
    {
        echo "Data updated with profile pic";
    }
    else
    {
        echo "not updated";
    }
    }
    
    
    
    
    
   else
    {
    
    $query="update workers set wname='$name',contact='$con',firmshop='$frm',city='$city',address='$add',stat='$stat',category='$cat',spel='$spl',exp='$exp',prwork='$pwork',apic='$orgName1',ppic='$orgName',email='$email' where uidd='$uid' AND status=1";
    mysqli_query($dbCon,$query);
    $count=mysqli_affected_rows($dbCon);
       move_uploaded_file($tmpName,"uploadw/".$orgName);
	move_uploaded_file($tmpName1,"uploadw/".$orgName1);
    if($count==1)
    {
        echo "Data Updated with Aadhar card pic and profile pic";
    }
    else
    {
        echo "not updated";
    }
    
   }
    
}

*/

function doupdate($dbCon)
{

    $uid=$_POST["txtUid"];
$name=$_POST["txtnam"];
$con=$_POST["txtcon"];
$add=$_POST["txtadd"];
$city=$_POST["txtcit"];
$stat=$_POST["txtsta"];
$email=$_POST["txtema"];
$frm=$_POST["txtfirm"];
$cat=$_POST["txtcat"];
$spl=$_POST["txtspl"];
$exp=$_POST["txtexp"];
$pwork=$_POST["txtpwork"];
$hdnp=$_POST["hdnp"];
$hdna=$_POST["hdna"];
$orgName=$_FILES["profilePic"]["name"];
$orgName1=$_FILES["AadharCardPic"]["name"];
$tmpName=$_FILES["profilePic"]["tmp_name"];
$tmpName1=$_FILES["AadharCardPic"]["tmp_name"];
$status=1;
    
   if($orgName=="")//means user do not want to change the pic
	{
		$fileName=$hdnp;//hdn contains the name of old pic
	}
	else //user want to change the pic
	{
		$fileName=$orgName;//new name assigned
		move_uploaded_file($tmpName,"uploadw/".$orgName);
	}
    
    
    
    
    
    
    if($orgName1=="")//means user do not want to change the pic
	{
		$fileName1=$hdna;//hdn contains the name of old pic
	}
	else //user want to change the pic
	{
		$fileName1=$orgName1;//new name assigned
		move_uploaded_file($tmpName1,"uploadw/".$orgName1);
	}
    
    
 $query="update workers set wname='$name',contact='$con',firmshop='$frm',city='$city',address='$add',stat='$stat',category='$cat',spel='$spl',exp='$exp',prwork='$pwork',apic='$fileName1',ppic='$fileName',email='$email' where uidd='$uid' AND status=1";
    mysqli_query($dbCon,$query);
    
$msg=mysqli_error($dbCon);
if($msg=="")
{
	
	echo "<h2>Record Updated successfully...</h2>";
}
else
	echo $msg;
}

?>
