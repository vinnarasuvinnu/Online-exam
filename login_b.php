<?php
session_start();
include('admin/db.php');
$email=$_POST['email'];
$password=$_POST['password'];
$q1="select * from userregister where email='$email' and dob='$password'";
$res=mysqli_query($db,$q1);
$row=mysqli_fetch_array($res);

if($res){
	$q2="select * from test";
	$res2=mysqli_query($db,$q2);
	$row2=mysqli_fetch_array($res2);
	$_SESSION['qpid']=$row2['qp_id'];
	$_SESSION['time']=(int)($row2['etime'])*60;
	$_SESSION['uname']=$row['username'];
$_SESSION['uid']=$row['uid'];
$_SESSION['email']=$row['email'];
	echo '1';
}
else{
	echo "your email or password is wrong";
}

?>