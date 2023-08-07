<?php 

/* 
mysqli method syntax 

mysqli_connect(host, username, password, dbname)
------------------------------------------------
*/

$host = "localhost";
$username = "david";
$password = "test1010" ;
$dbname = "users";


$dbConnect = mysqli_connect($host, $username, $password, $dbname);

if(!$dbConnect){
    echo 'Connection error: ' . mysqli_connect_error();
} else {
    echo 'Database Connection Successful !!';
}

?>