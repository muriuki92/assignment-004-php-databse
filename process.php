<?php
// The database connection
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server,$username,$password,$database);

    if(isset($_POST ['submitButton']))
    {
      $email = $_POST['email'];

      // submission of the data 
      $insertData = mysqli_query($conn,
        "INSERT INTO subscribers(email)
         VALUES('$email')");
         
         if($insertData)
         {
          echo "Data Submitted Successfully";
         }
         else
         {
          echo "Error Occured";
         }
    }

?>
