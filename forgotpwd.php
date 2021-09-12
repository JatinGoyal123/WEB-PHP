<?php
include_once("connection1.php");
include_once("SMS_OK_sms.php");
$uid=$_GET["uid"];
$query = "select * from users where uid='$uid'";
$result=mysqli_query($dbCon,$query);

while($row=mysqli_fetch_array($result))
{
    $pwd = $row['pwd'];
    $mobile = $row['mobile'];
    
}
//echo json_encode($ary);
$msg = "Thank you for using our services. Your User-Id is '".$uid."' ! and the password of your MPS account is '".$pwd."' . Save it for future use.";
$a=SendSMS($mobile,$msg);
echo $a;
?>
