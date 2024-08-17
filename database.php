<?php
$servername = "localhost";
$dbusername = "root";
$password = "";
$dbname = "tts";

$conn = new mysqli($servername, $dbusername, $password, $dbname);
if($conn->connect_error){
    die("error".$conn->connect_error);
}
?>
