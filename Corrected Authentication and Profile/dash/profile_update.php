<?php
session_start();
$username=$_SESSION['userid'];
include("db.php");

$email=$_POST['email'];
$phone=$_POST['phone'];
$interest=$_POST['interest'];
$address=$_POST['address'];


$s = "select * from faculty where Fac_ID='$username' || mobile='$username';";

$result= mysqli_query($con, $s);
$row=mysqli_fetch_assoc($result);


if($row['Fac_ID']==$username and $row['mobile']==$username ){
	$sql="update faculty set email_id='$email',interest='$interest', address='$address' where Fac_ID='$username' || mobile='$username'; ";
	if (mysqli_query($con, $sql)) {
        echo "<script> alert('Profile updated successfully.');</script>";
    	 echo "<script> window.location='settings.php';</script>";	
} else {
  
  echo "<script> alert('Error updating profile.');</script>";
  echo "<script> window.location='settings.php';</script>";	
}
	
}



?>