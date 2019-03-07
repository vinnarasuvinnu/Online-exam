<?php
include('db.php');
$qid=$_POST['id'];
$q1="delete from Test where tid='$qid'";
$res=mysqli_query($db,$q1);
if($res){
	echo "Test is deleted";
}
else{
	echo "Test is not deleted";
}


?>