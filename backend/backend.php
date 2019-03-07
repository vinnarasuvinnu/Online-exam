<?php
   include('db.php');

   $u= $_POST['email'];
   $p= md5($_POST['password']);

 $query = "SELECT * FROM `candidate` WHERE `email`='$u' AND `password`='$p'";
    $result = mysqli_query($db,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if($rows==1)
    {
    while($row = mysqli_fetch_array($result))  
                { 
                  session_start();
                  $_SESSION["email"] = $row['email'];
                  header('Refresh: 0; URL=../passcode.php');
                }
    }
    else
    {           
        ?>
        <script>alert('Failed to login. Click to retry');</script>
        <?php
        header('Refresh: 0; URL=../login.php');
        }
    ?>