<?php

include "config.php";

if (isset($_GET['id'])){

    $user_id=$_GET['id'];

    $sql="DELETE FROM 'myfriend' WHERE 'id'='$user_id'";

    $result=$conn->query($sql);

    if($result==TRUE){

        echo "FRIEND DELETED";
    }else{


        echo "ERROR:".$sql."<br>".$conn->error;
    }
}


?>