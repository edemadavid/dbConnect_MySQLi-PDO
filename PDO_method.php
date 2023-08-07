<?php 

/* 
mysqli method syntax 

PDO("mysql:host=$servername;dbname=myDB", $username, $password)
------------------------------------------------
*/

$host = "localhost";
$username = "david";
$password = "test1010" ;
$dbname = "users";

try {
$dbConnect = new PDO("mysql: host= $host; dbname= $dbname", $username, $password);

$dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Database Connection Successful !!";

} catch (PDOException $e) {
    echo 'Connection error: ' . $e -> getMessage();
}
