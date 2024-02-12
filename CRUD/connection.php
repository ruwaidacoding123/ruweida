<?php

$conn = new mysqli("localhost", "root", "","mdbphp");

if($conn->connect_error){
    echo $conn->error;
}




?>