<?php
$conn= new mysqli("localhost","root"," ","hotel");
if($conn->connect_error){
    die("conncetion failed". $conn->connect_error);
}?>