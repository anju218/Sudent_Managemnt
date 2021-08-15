<?php
include 'dbconnect.php';
if(isset($_POST['add'])){
    $fname = mysqli_real_escape_string($conn,$_POST['fname']); 
    $lname = mysqli_real_escape_string($conn,$_POST['lname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    $city = mysqli_real_escape_string($conn,$_POST['city']) ;
    $state = mysqli_real_escape_string($conn,$_POST['state']);
    $class = mysqli_real_escape_string($conn,$_POST['class']);
    $rollno = mysqli_real_escape_string($conn,$_POST['rollno']);
    $gender = mysqli_real_escape_string($conn,$_POST['gender']);
    $dob = mysqli_real_escape_string($conn,$_POST['dob']) ;

    $sql = "INSERT INTO `student_detail`(`fname`, `lname`, `email`, `mobile`, `dob`, `gender`, `address`, `city`, `state`, `class`, `rollno`) VALUES ('$fname','$lname','$email','$mobile','$dob','$gender','$address','$city','$state','$class','$rollno')";
    $run=mysqli_query($conn,$sql);
    if($run)
    {
        $success="Data Stored successfully";
    }
    else
    {
        $error="Unable to submit data";
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
  </head>
  <body>
    <div class="sidenav" class="col-12" >
    <div class="btn-group-vertical btn-group-lg col-12" role="group" aria-label="Button group with nested dropdown">
    <button type="button" class="btn btn-secondary">Dashboard</button>
    <button type="button" class="btn btn-secondary">Add Student</button>
    <button type="button" class="btn btn-secondary">View Student</button>
    </div>

    <!-- <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#clients">Clients</a>
    <a href="#contact">Contact</a> -->
    </div>
    <section id="main-form">
        <p class="text-center"><?php echo $success; echo $error ?></p>
        <h2 class="text-center text-danger pt-3 font-weight-bold">Student Management System</h2>
        <div class="container w-100 bg-danger" id="formsetting">
            <h3 class="text-center text-white pb-3 pt-2 font-weight-bold">Add Student Details</h3>
            <form method="post" action="">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-12 m-auto">
                        <div class="form-group">
                            <label class="text-white">First Name</label>
                            <input type="text" name="fname" placeholder="Enter your first name" class="form-control" required="required">

                        </div>
                        <br>
                        <div class="form-group">
                            <label class="text-white">Email</label>
                            <input type="text" name="email" placeholder="Enter your first email address" class="form-control" required="required">

                        </div>
                        <br>
                        <div class="form-group">
                            <label class="text-white">Date of Birth</label>
                            <input type="text" name="dob" placeholder="YYYY-MM-DD" class="form-control" required="required">

                        </div>
                    </div>
                    
                    <div class="col-md-5 col-sm-5 col-12 m-auto">
                        <div class="form-group">
                            <label class="text-white">Last Name</label>
                            <input type="text" name="lname" placeholder="Enter your last name" class="form-control" required="required">

                        </div>
                        <br>
                        <div class="form-group">
                            <label class="text-white">Contact Number</label>
                            <input type="text" name="mobile" placeholder="Enter your mobile number" class="form-control" required="required">

                        </div>
                        <br>
                        <div class="form-group">
                            <label class="text-white">Gender</label>
                            <input type="text" name="gender" placeholder="Enter Gender" class="form-control" required="required">

                        </div>
                       
                        

                    </div>
                    
                    <div class="col-md-11 col-sm-5 col-12 m-auto">
                    <div class="form-group">
                    <br>
                            <label class="text-white">Address</label>
                            <input type="text" name="address" placeholder="Enter your address" class="form-control" required="required">
                    <br>
                    </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-12 m-auto">
                        <div class="form-group">
                            <label class="text-white">City</label>
                            <input type="text" name="city" placeholder="Enter your city" class="form-control" required="required">

                        </div>
                        <br>
                        <div class="form-group">
                            <label class="text-white">Class</label>
                            <input type="text" name="class" placeholder="Enter your class" class="form-control" required="required">

                        </div>
                    </div>
                    <div class="col-md-5 col-sm-5 col-12 m-auto">
                        <div class="form-group">
                            <label class="text-white">State</label>
                            <input type="text" name="state" placeholder="Enter your state" class="form-control" required="required">
                        </div>
                        <br>
                        <div class="form-group">
                            <label class="text-white">Roll Number</label>
                            <input type="text" name="rollno" placeholder="Enter Roll Number" class="form-control" required="required">

                        </div>
                    </div>

                    
                </div>
                <br>
                <div class="col-md-2 col-12 pb-3 m-auto">
                    <input type="submit" name="add" value="Enter Details" class="btn btn-success px-5">
                    
                </div>
                <hr>
            </form>
            <hr>
        </div>

    </section>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>
