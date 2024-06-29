<?php 
// DB credentials.
$host="localhost";

$user="root";

$password ="";

$db ="mentor_system";

$conn = mysqli_connect($host,$user,$password,$db);
// Establish database connection.

if(!$conn)
{
    die("connection failed". mysqli_connect_error());
}
else{
    //echo "connected successfully";
}


?>