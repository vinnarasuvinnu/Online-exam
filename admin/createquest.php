<?php
include('db.php');
$cont=$_POST['content'];
$opt1=$_POST['opt1'];
$opt2=$_POST['opt2'];
$opt3=$_POST['opt3'];
$opt4=$_POST['opt4'];
$ans=$_POST['ans'];
$qpid=$_POST['qpid'];
$q1="insert into questions(q_name,opt1,opt2,opt3,opt4,ans,qp_id)values('$cont','$opt1','$opt2','$opt3','$opt4','$ans','$qpid')";
$res=mysqli_query($db,$q1);
if($res){
	echo "Question is added successfully";
}
else{
	echo "Question is unsuccessful";
}
?>