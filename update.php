<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $firstname = $_POST['firstname'];

        $user_id = $_POST['user_id'];

        $lastname = $_POST['lastname'];

        $email = $_POST['email'];

        $phone = $_POST['phone']; 

        $sql = "UPDATE `myfriend` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`phone`='$phone' WHERE `id`='$user_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $user_id = $_GET['id']; 

    $sql = "SELECT * FROM `myfriend` WHERE `id`='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $first_name = $row['firstname'];

            $lastname = $row['lastname'];

            $email = $row['email'];


            $phone = $row['phone'];

            $id = $row['id'];

        } 

    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">

        <h2>Friend Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Update Friend Info:</legend>
         
            First name:<br>

            <input type="text" name="firstname" value="<?php echo $first_name; ?>">

            <input type="hidden" name="user_id" value="<?php echo $id; ?>">

            <br>

            Last name:<br>

            <input type="text" name="lastname" value="<?php echo $lastname; ?>">

            <br>

            Email:<br>

            <input type="email" name="email" value="<?php echo $email; ?>">

            <br>

            Phone:<br>

            <input type="text" name="phone" value="<?php echo $phone; ?>">


            <br><br>

            <input type="submit" value="Update" name="update" >
            
            <a class="btn btn-primary" href="/dbproject/view.php" role="button">View</a>
       <br><br><br>

          </fieldset>

       

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 

<style>

    form

    {

        display: flexbox;
        width: 600px;
        justify-content: center;
        margin: auto;
    }
    h2

    {

        text-align: center;
        margin-top: 70px;
    }

    body

    {

        background-color: orange;
    }

    #btn btn-primary

    {
        width: 70px;
        height: 20px;
    }
</style>