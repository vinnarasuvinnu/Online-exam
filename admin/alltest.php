<?php


include('db.php');
$val=$_POST['val'];
$q1="select * from Test where dateofT='$val'";
$res=mysqli_query($db,$q1);
$out=array();
//echo json_encode($out= array('val' => $val ));
while($row=mysqli_fetch_array($res)){
	$pcid=$row['pc_id'];
	$qpid=$row['qp_id'];
	$q2="select * from Passcode where pc_id='$pcid'";
	$res1=mysqli_query($db,$q2);
	$row1=mysqli_fetch_array($res1);
	$q3="select * from Paper where  qp_id='$qpid'";
	$res2=mysqli_query($db,$q3);
	$row2=mysqli_fetch_array($res2);
	$out []=array('tid'=>$row['tid'],'testname'=>$row['testname'],'date'=>$row['dateofT'],'etime'=>$row['etime'],'pass'=>$row1['passcode'],'qpaper'=>$row2['q_name']);
}

echo json_encode($out);





?>