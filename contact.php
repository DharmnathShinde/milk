<?php
include('connection.php');
if(isset[$_post['submit']])

$name = $_post['enter your name'];
$email = $_post['enter your email'];
$address = $_post['enter address'];
$contact = $_post['enter your contact no'];
$message = $_post['enter message'];

$query = INSERT INTO `login cutomer` (`ID`, `Name`, `Email`, `Address`, `Contact no`, `Message`) VALUES (NULL, '$name', '$email', '$address', '$contact', '$message')
?>

