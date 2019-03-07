<?php
include('db.php');

$qname=$_POST['qname'];
$cato=$_POST['paper'];
$qname=strtolower($qname);
$q1="insert into paper(q_name,c_id)values('$qname','$cato')";
$res=mysqli_query($db,$q1);
if($res){
	echo "Your question paper is added";
}
else{
	echo "Your question paper is not added";
}

?>