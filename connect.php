<?php

$con = new mysqli("localhost","root","","newdb");

if(!$con){
    die(mysqli_error($con));
}


?>