<?php
$DATABASE_HOST = 'localhost:3306';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'lavajava';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if(mysqli_connect_error()){
    exit("Error connecting to the database" . mysqli_connect_error());
}
?>
