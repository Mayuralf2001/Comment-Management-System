<?php
$conn = new mysqli("localhost:3307","root","","comment");
if($conn->connect_error){
    die("Connection Failed!".$conn->connect_error);
}
?>