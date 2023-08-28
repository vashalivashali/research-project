<?php
$con = mysqli_connect('localhost:3306', 'root', 'Database123', 'users');

if (mysqli_connect_errno()){
    die("Connection Fail: ". mysqli_connect_error());
}
return $con;