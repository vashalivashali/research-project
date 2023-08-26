<?php
// Function to establish a database connection (con represent connection)
function connectToDatabase() {
    $hostname = 'localhost:3306'; //  database host
    $username = 'root'; //  MySQL username
    $password = 'Database123'; //  MySQL password
    $database = 'users'; //  database name


    //establish the connection
    $con = mysqli_connect($hostname, $username, $password, $database);

    // Check connection
    if (!$con) {
        die('Connection failed: ' . mysqli_connect_error());// if connection is not establish 
    }

    return $con; // connection establish
}