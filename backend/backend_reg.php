<?php
include('db.php');
$email=$_POST['email'];
$password=md5($_POST['password']);
$class_ten=$_POST['class_ten'];
$class_twelve=$_POST['class_twelve'];

$query = "INSERT INTO `candidate` (`email`, `password`, `class_ten`, `class_twelve`) VALUES ('$email','$password','$class_ten','$class_twelve')";
$result = mysqli_query($db,$query);
if($result)
{	
	session_start();
	$_SESSION["email"] = $email;
	?>
	<script type="text/javascript">
		alert('Sucessfully signed up');
		window.location = "../passcode.php";
	</script>
	<?php
}
else{
	?>
	<script type="text/javascript">
		alert('Error');
		window.location = "../register.php";
	</script>
	<?php
}	
?>