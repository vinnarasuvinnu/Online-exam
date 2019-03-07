<?php
include('db.php');
$q1="delete from answer";
$res=mysqli_query($db,$q1);
if($res){
	echo "your file is stored as the csv file and deleted from the database";
}
else{
	echo "sorry not able to delete your file and save as csv";
}

?>