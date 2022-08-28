//<?php
//$con=mysqli_connect("eu-cdbr-west-03.cleardb.net", "b50d2d6a32b390", "931391db", "heroku_2844bab4cf30724");
//if(mysqli_connect_errno())
//{
//echo "Connection Fail".mysqli_connect_error();
//}
//?>

<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>