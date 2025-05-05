<?php
$server = "locaLhost"; 
$username ="root"; 
$password=""; 
$db = "mac172"; 

//Create a connection
$conn = mysqli_connect($server,$username, $password, $db); 

//Check connection
if ($conn){
    die("Connection failed".mysqli_connect_error()); 
}
echo "Connection Successful";

?>