<?php

include('db.php');
$val=$_POST['val'];
$q1="select * from paper where c_id='$val'";
$res=mysqli_query($db,$q1);
$out=array();
while($row=mysqli_fetch_array($res)){
	$out []=array('c_name'=>$row['q_name'],'q_id'=>$row['qp_id']);
}

echo json_encode($out);
?>