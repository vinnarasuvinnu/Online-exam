<?php
session_start();
include('db.php');
$qpid=$_POST['val'];
	$i=0;

$q2="select ans from Questions where qp_id='$qpid'";
	$result=mysqli_query($db,$q2);
	$output=array();

	while($row1=mysqli_fetch_array($result)){
			$output[$i]=$row1['ans'];
			$i++;
	}


$q5="select * from answer inner JOIN userregister on answer.uid = userregister.uid and qid='$qpid'
";
$rest=mysqli_query($db,$q5);
$out=array();

while($restrow=mysqli_fetch_array($rest)){
	$uid=$restrow['uid'];
/*$q1="select * from answer where uid='$uid'";
$res=mysqli_query($db,$q1);*/
	$data=$restrow['selectedanswer'];
	$data=json_decode($data);
	$data=$data->result;	
	$totalquest=mysqli_num_rows($result);
	$atten=0;$correct=0;$wrong=0;



	foreach ($data as $key => $value) {

	
			if($value != "x"){
				$atten++;

				if($value==$output[$key]){

					$correct++;
				}
				else{
					$wrong++;
				}

			}


	}
$out []=array('username'=>$restrow['username'],'all'=>$totalquest,'atten'=>$atten,'correct'=>$correct,'wrong'=>$wrong,'marks'=>$correct);

}
echo json_encode(array('result'=>$out));
?>