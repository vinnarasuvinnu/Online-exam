<?php 

include("db.php");
$qpname=$_POST['qname'];
$paper=$_POST['paper'];
$eid=$_POST['eid'];

$q1="update Paper set q_name='$qpname',c_id='$paper' where qp_id='$eid'";
$res=mysqli_query($db,$q1);
if($res){
	echo "Your question paper is updated";
}
else{
	echo "Your question paper is not updated";
}


?>