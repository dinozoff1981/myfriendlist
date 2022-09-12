
<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Shalom Travel</title>

</head>

<style>

h2
{

    text-align: center;
    color: darkblue;
    font-family: 'Times New Roman', Times, serif;
    margin-top: 30px;
    text-decoration: underline;
    font-weight: bold;
}
</style> 
<body>
   <h2>MyFriends List</h2>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="create.php" class="text-light">ADD A FRIEND</a></button>



        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                
                $sql="SELECT * FROM friend";
                $result=mysqli_query($con,$sql);

                if($result){

                    
                    

                    while($row=mysqli_fetch_assoc($result)){

                            $id=$row['id'];
                            $fname=$row['fname'];
                            $lname=$row['lname'];
                            $email=$row['email'];
                            $mobile=$row['mobile'];

                            echo ' <tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$fname.'</td>
                            <td>'.$lname.'</td>
                            <td>'.$email.'</td>
                            <td>'.$mobile.'</td>

                            <td>
                             <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                             <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>


                            </td>

                        </tr>';


                    }
                }
                
                
                ?>

               



            </tbody>
        </table> 

    </div>



</body>

</html>