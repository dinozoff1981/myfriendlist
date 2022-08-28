<?php 

$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);


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
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

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

    <a class="btn btn-primary" href="/dbproject/view.php" role="button">View</a>
       <br><br><br>


  </fieldset>

</form>
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

</body>

</html>