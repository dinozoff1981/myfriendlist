
<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql="SELECT * FROM friend WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$fname=$row['fname'];
$lname=$row['lname'];
$email=$row['email'];
$mobile=$row['mobile'];

if(isset($_POST['submit'])){

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

$sql="UPDATE friend SET id=$id,fname='$fname',lname='$lname',email='$email',mobile='$mobile' WHERE id=$id";

$result=mysqli_query($con,$sql);

if($result){
 //echo "updated Successfully";
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

  <h2>Update A Friend</h2>
<div class="container my-5">

    <form method="POST">
            <div class="mb-3">
            <label >First Name</label>
            <input type="text" class="form-control" placeholder="First Name" name="fname" value=<?php echo $fname;?>>
            </div>

            <div class="mb-3">
            <label >Last  Name</label>
            <input type="text" class="form-control" placeholder="Last Name" name="lname"value=<?php echo $lname;?>>

            </div>

            <div class="mb-3">
            <label >Email</label>
            <input type="email" class="form-control" placeholder="Email" name="email"value=<?php echo $email;?>>
            </div>  

            <div class="mb-3">
            <label >Mobile</label>
            <input type="text" class="form-control" placeholder="Mobile" name="mobile"value=<?php echo $mobile;?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>


</div>
  </body>
</html>