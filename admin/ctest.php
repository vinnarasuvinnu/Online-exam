<?php
include('db.php');
$pid=$_POST['pid'];
$date=$_POST['date'];
$time=$_POST['time'];
$qpid=$_POST['qpid'];
$tname=$_POST['tname'];
$q1="insert into test(testname,dateofT,etime,qp_id,pc_id)values('$tname','$date','$time','$qpid','$pid')";
$res=mysqli_query($db,$q1);
if($res){
	echo "Test is added successfully";
}
else{
	echo "Test is unsuccessful";
}
?>