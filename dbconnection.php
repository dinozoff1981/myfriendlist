



<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["cdbr-west-03.cleardb.net"];
$cleardb_username = $cleardb_url["b50d2d6a32b390"];
$cleardb_password = $cleardb_url["931391db"];
$cleardb_db = substr($cleardb_url["heroku_2844bab4cf30724"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>