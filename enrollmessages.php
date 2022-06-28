<!-- <?php
//localhost connection
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server,$username,$password,$database);
        if(isset($_POST ['submitApplication']))
{
    $fullname = $_POST['fullname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $gender=$_POST['gender'];
    $course = $_POST['course'];


    //connection of database
    $ifinputData = mysqli_query($conn,
    "INSERT INTO enrollrollment(fullname,phonenumber,email,gender,course)
     VALUES('$fullname','$phonenumber','$email','$gender','$course')");
     
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

     -->