<?php


include('db.php');
$val=$_POST['val'];
$q1="select * from Questions where qp_id='$val'";
$res=mysqli_query($db,$q1);
$out=array();
while($row=mysqli_fetch_array($res)){
	$out []=array('q_id'=>$row['q_id'],'q_name'=>$row['q_name'],'opt1'=>$row['opt1'],'opt2'=>$row['opt2'],'opt3'=>$row['opt3'],'opt4'=>$row['opt4'],'ans'=>$row['ans']);
}

echo json_encode($out);





?>