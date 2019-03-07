<?php
include('admin/db.php');
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$ten=$_POST['class_ten'];
$twelve=$_POST['class_twelve'];
$pass=md5($pass);
$gender=$_POST['gender'];
$study=$_POST['study'];
$dob=$_POST['dob'];


$q1="INSERT INTO `userregister` (`username`, `email`, `password`, `tenth`, `twelth`,`gender`, `study`, `dob`) VALUES ('$name', '$email', '$pass', '$ten', '$twelve','$gender','$study','$dob')";
$res=mysqli_query($db,$q1);
if($res){
	echo "your registration is successful";
}
else{
	echo "your registration is unsuccessful please try again";
}



?>