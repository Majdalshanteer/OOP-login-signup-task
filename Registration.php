<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: welcome.php");
}

$register = new Register();

if(isset($_POST["submit"])){
  $result = $register->registration($_POST["name"], $_POST["username"], $_POST["email"], $_POST["password"], $_POST["confirmpassword"]);

  if($result == 1){
    echo
    "<script> alert('Registration Successful'); </script>";
  }
  elseif($result == 10){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('Password Does Not Match'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <meta charset="utf-8">
    <title>Registration</title>
  </head>
  <body>

    <a href="login.php"><input class="btn btn-light sign-up btn-lg mt-2"  type="submit"   value=" have an account, Sign In"/></a>


    <div style="margin-left:100px;" class="col-8 ">
       
       <div id="signup" class="row ">
           <div class="container ">
               <h1 class="h1  mt-5 mb-4"><b>Register</b></h1>
               <div class="border-Register w-50 register-section" >
                   <form  class="mt-0" id="sign-up" method="post" autocomplete="off">
                       <div>
                           <label for="name" class="form-label "><b>Name:</b></label>
                           <br />
                           <input type="text" name="name" required value="" class="form-control mb-0 py-2"  id="name" />
                           <br>
                       </div>
                       <div>
                           <label for="name" class="form-label "><b>Username :</b></label>
                           <br />
                           <input type="text" name="username" required value="" class="form-control mb-0 py-2"  id="name" />
                           <br>
                       </div>
                       <div>
                           <label for="email" class="form-label mt-0"><b>Email:</b></label>
                           <input type="email" name="email" required value="" id="email" class="form-control mb-0 py-2" />
                       </div>
                     
                       <div><br>
                       <label for="pass" class="form-label"><b>Password:</b></label>
                           <input type="password" name="password" required value="" class="form-control py-2"  />

                           <br>
                       </div>
                       <div>
                       <label for="pass" class="form-label"><b>Confirm Password :</b></label>
                           <input type="password" name="confirmpassword" required value="" class="form-control py-2"  />

                           <br>
                       </div>
                       <div class="d-grid gap-2">
                       <input class="btn btn-primary  btn-lg mt-2 mb-2" id="signUp" type="submit" name="submit" value="Sign up" /></a>


                       </div>

                   </form>
               </div>
           </div>
       </div>

   </div>
   </div>
   </div>
   <br><br>










  </body>
</html>