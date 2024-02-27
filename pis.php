<?php
$Name=$_POST['NAME'];
$DOB=$_POST['DOB'];
$Gender=$_POST['GENDER'];
$Mobile=$_POST['MOBILE'];
$Address=$_POST['ADDRESS'];
$Pin=$_POST['PINCODE'];
$City=$_POST['CITY'];
$State=$_POST['STATE'];
$conn = mysqli_connect('localhost', 'root','') or die("cannot connect");
mysqli_select_db($conn,'personal') or die("cannot select DB");
$res = mysqli_query($conn,"insert into sample1 
values('$Name','$DOB','$Mobile','$Gender','$Address','$Pin code','$City','$State')") or die(mysqli_error());
if($res>0)
{
echo "Record created";
}
?>