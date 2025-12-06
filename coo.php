<?php
$con=new mysqli("localhost","root","","college");
if($con){
    echo"connected";
}else{
    die(mysql_error($con));
}
?>