<?php
session_start();
include('admin/db.php');

$pass=$_POST['pass'];
$date=$_POST['date'];


$q1="select * from Test where dateofT='$date' and pc_id in (select pc_id from Passcode where passcode='$pass')
";
$res=mysqli_query($db,$q1);
if(mysqli_num_rows($res)>=1){

	$row=mysqli_fetch_array($res);
	$_SESSION['qpid']=$row['qp_id'];
	$time=((int)$row['etime'])*60;
	$_SESSION['time']=$time;

echo "1";

}
else{
	echo "your date has not matched with the test";
}

?>