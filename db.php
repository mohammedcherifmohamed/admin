<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "admin" ;

$conn = new mysqli($servername,$username,$password,$dbname) ;
if($conn->connect_error){
    die("ERRROOOOOOR__-_-_-_-__" . $conn->connect_error) ;
}
error_reporting(E_ALL);
ini_set('display_errors', 1);