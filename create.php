<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];

    $last_name = $_POST['lastname'];

    $email = $_POST['email'];


    $phone = $_POST['phone'];

    $sql = "INSERT INTO `myfriend`(`firstname`, `lastname`, `email`, `phone`) VALUES ('$first_name','$last_name','$email','$phone')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>

<!DOCTYPE html>

<html>

<body>

<h2>ADD FRIEND</h2>

<form action="" method="POST">

  <fieldset>

    <legend>ENTER YOUR FRIEND DETAIL:</legend>

    First name:<br>

    <input type="text" name="firstname">

    <br>

    Last name:<br>

    <input type="text" name="lastname">

    <br>

    Email:<br>

    <input type="email" name="email">

    <br>

    Phone:<br>

    <input type="text" name="phone">

    <br>

    
    <br><br>

    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>

</body>

</html>