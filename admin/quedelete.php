<?php
include('db.php');
$qid=$_POST['id'];
$q1="delete from Questions where q_id='$qid'";
$res=mysqli_query($db,$q1);
if($res){
	echo "Question paper is deleted";
}
else{
	echo "Question paper is not deleted";
}


?>