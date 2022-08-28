
<?php
include 'connect.php';

if(isset($_POST['submit'])){

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

$sql="INSERT INTO friend (fname,lname,email,mobile) VALUES ('$fname','$lname','$email','$mobile')";

$result=mysqli_query($con,$sql);

if($result){

  header('location:index.php');
}else{

  die(mysqli_error($con));
}


}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My friends</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
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


  <h2>Add A Friend</h2>
<div class="container my-5">

    <form method="POST">
            <div class="mb-3">
            <label >First Name</label>
            <input type="text" class="form-control" placeholder="First Name" name="fname">
            </div>

            <div class="mb-3">
            <label >Last  Name</label>
            <input type="text" class="form-control" placeholder="Last Name" name="lname">

            </div>

            <div class="mb-3">
            <label >Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email">
            </div>  

            <div class="mb-3">
            <label >Mobile</label>
            <input type="text" class="form-control" placeholder="Mobile" name="mobile">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>


</div>
  </body>
</html>