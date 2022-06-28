<?php
// database connection
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server,$username,$password,$database);

    if(isset($_POST ['submitApplication']))
    {
        $fullName = $_POST['fullname'];
        $phoneNumber = $_POST['phonenumber'];
        $email = $_POST['email'];
        $gender=$_POST['gender'];
        $course = $_POST['course'];
    
    
    
        //connection of database
        $ifinputData = mysqli_query($conn,
        "INSERT INTO enrollment(fullname,phonenumber,email,gender,course)
         VALUES('$fullName','$phoneNumber','$email','$gender','$course')");
         
         if($inputData)
         {
          echo "Submitted Successfully";
         }
         else
         {
          echo "Fatal error";
         }
      
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <title>Register now</title>
</head>