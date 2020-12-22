<?php
include_once 'dbh.inc.php';
require_once 'funkcii.inc.php';

$name = $_POST['name'];
$city = $_POST['city'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql =  $sql = "INSERT INTO reservation ( Name, Username, Password, City) VALUES ('$name', '$uid', '$pwd', '$city');";
mysqli_query($conn, $sql); 

header("Location: ../index.php");

if (emptyInputSignup($name, $uid, $pwd, $city, ) !== false) {

    header("location: ../index.php?error=emptyinput");  
    exit();

}