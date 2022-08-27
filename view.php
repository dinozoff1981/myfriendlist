<?php

include "config.php";

$sql="SELECT * FROM myfriend";
$result =$conn->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">

<h2>MY FRIENDS</h2>
<a class="btn btn-primary" href="/dbproject/create.php" role="button">Add Friend</a>
       <br><br><br>

<table class="table">

<head>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>EMail</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
</thread>
<tbody>

    <?php
    
    if ($result->num_rows>0){

      while($row=$result->fetch_assoc()){


    ?>
<tr>
 <td><?php echo $row ['id'];?></td>
 <td><?php echo $row ['firstname'];?></td>
 <td><?php echo $row ['lastname'];?></td>
 <td><?php echo $row ['email'];?></td>
 <td><?php echo $row ['phone'];?></td>
<td><a class="btn btn-info" href="update.php?id=<?php echo $row ['id'];?>">EDIT</a>&nbsp;
 <a class="btn btn-danger" href="delete.php?>id=<?php echo $row['id'];?>">DELETE</a></td>

</tr>


<?php 

}


}
?>

</tbody>
        

</head>

</table>

</div>
    
</body>
</html>