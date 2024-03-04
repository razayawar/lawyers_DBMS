<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "laywers";

$conn = mysqli_connect($server,$username,$password,$dbname);

if($conn == false){
    die("Failed to Connect Your Database".mysqli_connect_error());
}else{
    return $conn;
}
?>