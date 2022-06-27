<?php include('header.php')?>

<body>
    <!-- TOP BAR STARTS HERE -->
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
                <a href="enroll.php" class="nav-link" >Register now</a>
                <button type="button" class="btn btn-primary">Register Now</button>
             
              </div>
           </div>
       
        </div>
    </nav>

    <!-- TOP BAR ENDS HERE -->

    <!-- JULY CAMP STARTS  HERE-->
   <main class="bg-light rounded py-5 mb-8 px-5 shadow">
    <div class="row col-lg-12 bg-light">
        <h1 class="text-secondary py-5 bm-8 ">
             JULY SOFTWARE ENGINEERING BOOTCAMP
        </h1>

        <span> <i class="fa fa-calendar fa-3x"></i>
                   <span>20th July 2022</span>
    
        </span>

        <span> <i class="fa fa-map-marker fa-3x"></i>
                   <span>Zalego Academy,<br>
                            Devan Plaza
                   </span>
        </span>           
    </div>
</main>
    <!-- JULY CAMP ENDS HERE -->

    <div class="container col-lg-12 p-0">
        <p>
                  <br>Looking for a place to kickstart your career in technology?<br>
            whether you're a local,new in  town or just crushing through we've got<br> 
                      loads of great tips and events for you.
        </p>
    </div>
    <!-- SIGN UP STARTS HERE -->
    <form action="enroll.php" method="POST">
    <div class="kind container col-lg-12 px-5 bg-light ">
    
       <h2 class="patience text-secondary">Sign up today?</h2>
    
     <div class="row">
     
                <div class="mb-3 px-5 py-5 col-lg-6" >
                    <label for="FullName"  class="form-label"><h6> Full Name:</h6></label>
                    <input type="text" name="fullname" class="joy shadow form-control" placeholder=" Enter Your full Name" >
                    
                  </div>
  
                  <div class="mb-3 px-5 py-5 col-lg-6">
                      <label for="PhoneNumber" class="form-label"><h6>Phone Number: </h6></label>
                      <input type="tell"  name ="phonenumber" class=" joy shadow form-control" placeholder="+2547..." >
                      
                    </div>
               </div>

               <div class="row">
                <div class="mb-3 px-5 col-lg-6" >
                    <label for="EmailAddress"  class="form-label"><h6>Email Address:</h6></label>
                    <input type="tel" name="email" class=" joy shadow form-control" placeholder="Please Enter Your Phone Number" >
                    
                  </div>
  
                  <div class="mb-3 px-5  col-lg-6">
                      <label for="What'sYourGender"  class="form-label"><h6>What's Your Gender?</h6></label>
                      
                      <select class="form-select joy shadow form-control" name="gender" type="email"  aria-label="Default select example">
                       <option selected><h1>--Select Your Gender--</h1></option>
                       <option value="Male">Male</option>
                       <option value="Female">Female</option>
                      </select>
                      
                      

                    </div>
               </div>
               <div class="row">
                <div class="col-lg-12 px-5 mb-3">
                    <p>In order to complete your registration to the bootcamp,you are required to select one course you will be <br>
                       undertaking.Please NOTE that this will be your learning track during the 2-weeks immersion.</p>

                </div>
               </div>
               <div class="row">
                
  
                  <div class="mb-3 px-5 col-lg-12">
                    <label for="Course"  class="form-label"><h6>What's Your Preffered Course?</h6></label>
                      
                    <select  class="form-select joy shadow form-control" name="course"  aria-label="Default select example">
                       <option selected><h6>--Select Your Course--</h6></option>
                       <option value="Android App Development">Android App Development</option>
                       <option value="Web Design & Development">Web Design & Development</option>
                       <option value="Web Design & Development">Data Analysis</option>
                       <option value="Cyber Security">Cyber Security</option>
                    </select>
                    
               </div>

               <div class="row">
                <div class="col-lg-12 px-5 mb-3">
                    <p>You agree to complete your registration to the bootcamp,you are required to select one course you will be <br>
                       outlined in our Terms & Conditons and the Privacy Policy statements.</p>

                </div>
               </div>
               <div class="row">
                <div class="col-lg-12 px-5 mb-3">
                <div class="form-check">
  <input class="form-check-input" name="check" type="checkbox" value="SUBMIT" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    <h6>Agree Terms And Conditions.</h6>
  </label>
</div>
                </div>
               </div>
               <br>
               <!-- Button Section Starts here -->
               <div class="row">
                <div class="col-lg-12 px-5 mb-3">
                
                

               
               <button class="btn btn-primary" name="submitApplication">Submit Application</button>
               
                   
               </form>
                </div>
               </div>

                
        </div>
        </div>
        <!-- Button Section Part ends here -->

    <!-- sign up part ends here -->

    <!-- subscribe part starts here -->
    <div class="row ">
                <div class=" ping col-lg-12 px-5 mb-3 text-secondary">
                    <p text-align="center"><h6>Subscribe to get information,latest news about <br>
                           Zalego Academy.</h6></p>

                </div>
                </div>

                <div class="container">
      <form action="aboutus.php" method="POST">
     

        <div class=" row g-2 px-5 pt-0  align-items-center">
        <div class="col-lg-6 px-5 ">
              <input type="email" name ="email" id="inputemail" class="form-control" placeholder="Your email address" >
            </div>
            <div class="col-lg-6">
            <button class="btn btn-primary" name="submitButton" type="submit" >Subscribe</button>
            </div>
              
            
          </div>
      </form>
      </div>
               
    <!-- subscribe part ends here -->
    <hr>
    <!-- FOOTER STARTS HERE -->
    <div>
        
        <footer>
            &copy;
            Company 2022
        </footer>
    </div>

    <!-- FOOTER ENDS HERE -->
    
    <!-- js links starts here -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
 
 <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
    <!-- js links ends here -->
</body>
</html>
   