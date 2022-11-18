<?php
    include "db.php";
    $lb_email=$_POST['email'];
    $lb_password=$_POST['password'];
    $sql="select * from signup where email='$lb_email' and password='$lb_password'";
    $livebid=mysqli_query($connectDatabase,$sql);
    $count= mysqli_num_rows($livebid);
    if($count>0){
        header ("location: ../livebid.html");
    }
    else{
        echo "error";
    }
?>