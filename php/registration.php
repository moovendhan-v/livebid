<?php
include "db.php";
$lb_username=$_POST['fname'];
$lb_email=$_POST['email'];
$lb_address=$_POST['address'];
$lb_phone=$_POST['phone'];
$lb_password=$_POST['password'];
$lb_logo=$_POST['logo'];
$sql="insert into signup (fname,email,address,phone,password,logo) 
        values ('$lb_username','$lb_email','$lb_address','$lb_phone','$lb_password','$lb_logo')";
$connected=mysqli_query($connectDatabase,$sql);
if($connected){
    header("location: ../login.php");
}
else{
    echo "error";
}
?>

