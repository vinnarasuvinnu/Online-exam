<?php
session_start();
echo '<body style="background-color:#0e3997">';
$qpid=$_SESSION['qpid'];
$uid=$_SESSION['uid'];
include('admin/db.php');
$q1="select * from questions where qp_id='$qpid'";

$res=mysqli_query($db,$q1);
if($res){
	$flag=0;
	$output=array();
	$i=0;
	while($row=mysqli_fetch_array($res)){
		$qqid=$row['q_id'];
		$ans=$_POST[$qqid];
		if($ans==''){
			$ans="x";
		}
		$output[$i]=$ans;
$i++;

	}

	$output=json_encode(array('result'=>$output));
	//echo $output;

			$q2="INSERT INTO `answer` (`selectedanswer`, `uid`, `qid`) VALUES ( '$output', '$uid', '$qpid');";
		$res1=mysqli_query($db,$q2);
		if($res1){
		echo '<script>';
		echo 'alert("your answeres are submitted succesfully");location.href="endres.php"';

		echo '</script>';
		}

		echo '<script>';
		echo 'alert("Some things went wrong with your submission");location.href="question.php"';

		echo '</script>';

}


?>