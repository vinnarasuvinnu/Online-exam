<?php 

include("db.php");
$cont=$_POST['content'];
$opt1=$_POST['opt1'];
$opt2=$_POST['opt2'];
$opt3=$_POST['opt3'];
$opt4=$_POST['opt4'];
$ans=$_POST['ans'];
$qpid=$_POST['qpid'];
$qid=$_POST['eid'];

$q1="update Questions set qp_id='$qpid',opt1='$opt1',opt1='$opt1',opt2='$opt2',opt3='$opt3',opt4='$opt4',ans='$ans' where q_id='$qid'";
$res=mysqli_query($db,$q1);
if($res){
	echo "Your question is updated";
}
else{
	echo "Your question is not updated";
}


?>