<?php
include 'dbconnect.php';
if(isset($_POST["submit"])){
    $fname = $_POST['fname'];
    $email =$_POST['email'];
    $password =$_POST['password'];
    $cpassword =$_POST['cpassword'];
    $pass=password_hash($password,PASSWORD_BCRYPT);
    $cpass=password_hash($password,PASSWORD_BCRYPT);
    $query = "select * from register where email = '$email'";
    $run = mysqli_query($conn,$query);
    $row = mysqli_num_rows($run);
    if($row>0){
        $email_err="Email ID already exists";
    }
    else if($password!=$cpassword){
        $pass_err="Password dosen't match";
    }
    else{
        $sql ="insert into register (fname,email,password,cpassword) values ('$fname','$email','$pass','$cpass')";
        $run= mysqli_query($conn,$sql);
        if($run){
            $success = "Registered Successfully";
        }
        else{
            $error = "Unable to submit data";
        }
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Student Management System</title>
    <script>
        function content1(){
            document.getElementById("div1").style.display="block";
            document.getElementById("div2").style.display="none";
        }
        function content2(){
            document.getElementById("div1").style.display="none";
            document.getElementById("div2").style.display="block";
        }
    </script>
  </head>
  <body>
    <section>
        <h2 class="text-center pt-5 font-weight-bold">Student Management System</h2>
        <!-- <p class="text-center font-weight-bold text-danger"><?php echo @$_GET['error']?></p> -->
        <div class="container bg-danger formsetting">
            <h3 class="text-white bg-danger text-center py-3">Admin Login | Registration</h3>
            <div class="row">
                <div class="col-md-7 col-sm-7 col-12">
                    
                </div>
                <div class="col-md-5 col-sm-5 col-12">
                    <div class="pb-3">
                        <button class="btn btn-info px-5" onclick=content1()>Register</button>
                        <button class="btn btn-info px-5" onclick=content2()>Login</button>
                    </div>
                    <div id="div1" style="display: block;">
                    <form method="post" action="">
                        <div class="form-group">
                            <label class="text-white">Full Name</label>
                            <input type="text" name="fname" placeholder="Enter your Name" class="form-control" required="required">

                        </div>
                        <br>
                        <div class="form-group">
                            <label class="text-white">Email</label>
                            <span class="float-right test-white font-weight-bold"><?php echo $email_err?></span>
                            <input type="email" name="email" placeholder="Enter your Email ID" class="form-control" required="required">

                        </div>
                        <br>
                        <div class="form-group">
                            <label class="text-white">Password</label>
                            <input type="password" name="password" placeholder="Enter your Password" class="form-control" required="required">

                        </div>
                        <br>
                        <div class="form-group">
                            <label class="text-white">Confirm Password</label>
                            <span class="float-right test-white font-weight-bold"><?php echo $pass_err?></span>
                            <input type="password" name="cpassword" placeholder="Re-Enter Password" class="form-control" required="required">

                        </div>
                        <br>
                        <div class="form-group pb-3">
                           
                            <input type="submit" name="submit" value="Register" class="btn btn-success px-5">
                            <span class="float-right test-white font-weight-bold"><?php echo $success; echo $error;?></span>

                        </div>
        
                        
                        
                    </form>
                    </div>
                    <div id="div2" style="display:none;">
                    <form method="post" action="">
                        <div class="form-group">
                            <label class="text-white">Email</label>
                            <input type="email" name="email" placeholder="Enter your Email ID" class="form-control"required="required">

                        </div>
                        <br>
                        <div class="form-group">
                            <label class="text-white">Password</label>
                            <input type="password" name="password" placeholder="Enter your Password" class="form-control" required="required">

                        </div>
                        <br>
                        <div class="form-group pb-3">
                        <span class="float-right test-white font-weight-bold"><?php echo $err?></span>
                            <input type="submit" name="login" value="Login" class="btn btn-success px-5">

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>

<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select * from register where email='$email'";
    $run = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($run);
    $pass_fetch = $row['password'];
    $pass_decode = password_verify($password,$pass_fetch);
    if($pass_decode)
    {
        echo "<script>window.location.href='main.php';</script>";
        exit;
    }
    else
    {
        $eror="Wrong Credentials";
    }
    
}
?>