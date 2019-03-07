<?php
include("db.php");
$catval=$_POST['name'];
//$catval=strtolower($catval);
$q1="insert into Passcode(passcode)values('$catval')";

$res=mysqli_query($db,$q1);
if($res){
	echo "Your passcode is succesfully added";
}
else{
	echo "Your passcode is not added ";
}


?>