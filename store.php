<?php 
include "dbconnexion.php"; 
$lastname=$_POST['lastname'];   
$firstname=$_POST['firstname'];
$email=$_POST['email'];
$phone=$_POST['phone']; 
$cnx->exec("INSERT INTO students (firstname,lastname,email,phone) VALUES ('$firstname','$lastname','$email','$phone')");
?>