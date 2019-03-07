<?php
   include('db.php');

   $u= $_POST['uname'];
   $p= $_POST['pass'];
   $qq1="select * from register where uname='$u'";
   $result=mysqli_query($db,$qq1);
   if(mysqli_num_rows($result) == 0 ){
   $p=md5($p);
   $q1="insert into register(uname,password)values('$u','$p')";
   $res=mysqli_query($db,$q1);
   if($res){
    echo "your registraton is sucessful";
   }
   else{
    echo "Unable to register your profile";
   }
 }
 else{

  echo "your user name already exists";
}

    ?> 
