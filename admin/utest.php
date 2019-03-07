<?php
include('db.php');
$pid=$_POST['pid'];
$date=$_POST['date'];
$time=$_POST['time'];
$qpid=$_POST['qpid'];
$tname=$_POST['tname'];
$tid=$_POST['eid'];
$q1="update Test set testname='$tname',dateofT='$date',etime='$time',qp_id='$qpid',pc_id='$pid' where tid='$tid'";
$res=mysqli_query($db,$q1);
if($res){
	echo "Test is edited successfully";
}
else{
	echo "Test editing is unsuccessful";
}
?>