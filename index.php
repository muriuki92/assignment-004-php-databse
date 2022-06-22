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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href=""style.css>
    <title>Bootstrap grid layout</title>
</head>
<body>
    <!-- NAVIGATION BAR STARTS HERE  -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow py-0 " >
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDisplayNavigations" aria-expanded="false">
            <span class="navbar-toggler-icon"></span>
           </button>
         
        <div class="collapse navbar-collapse" id="navbarDisplayNavigations">
            <div class="navbar-nav">
                <a href="index.php" class="nav-link active">Home</a>
                <a href="aboutus.php" class="nav-link ">About Us</a>
                <a href="#" class="nav-link ">Contact Us</a>
             </div>
           </div>
       
        </div>
    </nav> -->
    <!-- NAVIGATION BAR ENDS HERE  -->
    
        <main class="p-5 mb-4 bg-light">
            <h1>Welcome,Sheila Wambui</h1>
            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur corrupti error, repellendus animi facere id, 
               similique cupiditate perferendis perspiciatis voluptatum et quasi dolorum fugiat distinctio saepe veritatis sunt,
               blanditiis impedit. Provident quam reiciendis quia aut. Odit consequuntur quisquam labore cumque, explicabo praesentium 
               veniam ut, repellendus, dignissimos minus accusamus architecto suscipit.
            </p>
            <button class="btn btn-primary">Learn More</button>

        </main>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h1>Header 1</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat at doloribus 
                       minima repudiandae assumenda laborum beatae quis libero culpa aliquid!</p>
                       <button class="btn btn-primary">Learn More</button>
                </div>
                <div class="col-lg-4">
                    <h1>Header 2</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat at doloribus 
                       minima repudiandae assumenda laborum beatae quis libero culpa aliquid!</p>
                       <button class="btn btn-primary">Learn More</button>
                </div>
                <div class="col-lg-4">
                    <h1>Header 3</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat at doloribus 
                       minima repudiandae assumenda laborum beatae quis libero culpa aliquid!</p>
                       <button class="btn btn-primary">Learn More</button>
                </div>
            </div>
        </div>
        <!-- contact us page starts here -->
        <div class="container">
                <div class="row py-5">
                    <h1>Contact Us</h1>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolorem culpa aliquid nisi omnis repudiandae expedita sint reiciendis ut eaque ullam perspiciatis dolorum doloremque quis deleniti rem debitis sequi, 
                    maxime exercitationem cumque architecto doloribus labore eos! Libero fugit dolore eligendi at ab hic nesciunt doloribus, obcaecati, qui magni saepe repellendus!</p>
                    <form action="index.php" method="POST">
                    
                    <div class="row">
                        <div class="mb-3 col-lg-6" >
                            <label for="FirstName" class="form-label">First Name</label>
                            <input type="text"  name="firstname" class="form-control" placeholder="Please Enter Your Name" >
                            
                        </div>
        
                        <div class="mb-3 col-lg-6">
                            <label for="LastName" class="form-label">Last Name</label>
                            <input type="text" name="lastname" class="form-control" placeholder="Last Name" >
                            
                            </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-lg-6" >
                            <label for="PhoneNumber" class="form-label">Phone Number</label>
                            <input type="tel" name="phonenumber" class="form-control" placeholder="Please Enter Your Phone Number" >
                            
                        </div>
        
                        <div class="mb-3 col-lg-6">
                            <label for="EmailAddress" class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" placeholder="Please Enter Your Email Address" >
                            
                            </div>
                    </div>
                    <div class="row">
                        
        
                        <div class="mb-3 col-lg-12">
                            <label for="Message" class="form-label">Your Message</label>
                            <textarea cols="30" rows="5"  name="message"placeholder="Text Here" class="form-control"></textarea>
                            
                            </div>
                    </div>
                    <button type="submit" name="submitButton" class="btn btn-primary">Send A Message</button>
                </form>
            </div>
        </div>
        <!-- contact us page ends here -->
        <hr>
        <div>
        <!-- to add a copyright icon shift + 7 then type copy -->
            <footer>
                &copy;
                Company 2022
            </footer>
        </div>
    
    <!-- <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
 
    <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>