<?php

$connectDatabase=mysqli_connect("localhost","root","","livebid");
if($connectDatabase){
    echo "";
}
else{ 
    echo "Database connection error"; 
}

?>