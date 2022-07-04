<?php
//nama server
$server      = "localhost";
//username dan password server
$username_db = "root";
$password_db = "";
//nama database
$database    = "coba";

//menghubungkan database

$conn  = mysqli_connect($server,$username_db, $password_db, $database) or die('database error');
