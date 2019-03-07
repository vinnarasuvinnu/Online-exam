<?php
session_start();
include('admin/db.php');
$uid=$_SESSION['uid'];
$qpid=$_SESSION['qpid'];
echo '<body style="background-color:#0e3997">';

$q1="select * from answer where uid='$uid'";
$res=mysqli_query($db,$q1);
if($res){
	$row=mysqli_fetch_array($res);

	$data=$row['selectedanswer'];
	$data=json_decode($data);
	$data=$data->result;

	$q2="select ans from Questions where qp_id='$qpid'";
	$result=mysqli_query($db,$q2);
	$output=array();
	$i=0;
	$atten=0;$correct=0;$wrong=0;

	while($row1=mysqli_fetch_array($result)){
			$output[$i]=$row1['ans'];
			$i++;
	}
$Total=0;
	foreach ($data as $key => $value) {
		$Total++;

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
}
session_destroy();
?>


<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	setTimeout(function(){
		location.href="index.php";
	},30000);
})
</script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-lg-6 offset-3 align-self-center" style="margin-top: 100px;">

			<div class="card">
				<h4 class="text-center">Exam Results</h4>
			</div><br>
				<div class="card">
										<p style="margin-left: 20px;">Total questions &nbsp&nbsp:&nbsp&nbsp&nbsp<?php echo $Total; ?></p>

					<p style="margin-left: 20px;">Attended &nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp<?php echo $atten; ?> </p>
				


				</div>

			
		</div>
	</div>
</div>
</body>
</html>