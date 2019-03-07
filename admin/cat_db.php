<?php
include("db.php");
$catval=$_POST['name'];
$catval=strtolower($catval);
$q1="insert into catogery(c_name)values('$catval')";

$res=mysqli_query($db,$q1);
if($res){
	echo "Your catogery is succesfully added";
}
else{
	echo "Your catogery is not added ";
}


?>