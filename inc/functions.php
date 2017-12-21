<?php
$host     = "localhost";
$user     = "root";
$pass     = "";
$data     = "gameworld";

// connect using host, user, pass and database
$con     = mysqli_connect($host, $user, $pass, $data);

// check connection, if an errornumber is returned by the server
if (mysqli_connect_errno())
{
    // then print and die..
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

// define $query
$sql = "SELECT gameTitle, gameImage, gamePrice FROM games";

// perform $query on $con and store resource
$resource = mysqli_query($con, $sql);

// close dB connection for security
mysqli_close($con);


// custom function to use instead of default var_dump()
?>
