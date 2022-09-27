<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: welcome.php");
}

$login = new Login();

if(isset($_POST["submit"])){
  $result = $login->login($_POST["usernameemail"], $_POST["password"]);

  if($result == 1){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: welcome.php");
  }
  elseif($result == 10){
    echo
    "<script> alert('Wrong Password'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  </head>
  <body>
    <!-- <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="">Username or Email : </label>
      <input type="text" name="usernameemail" required value=""> <br>
      <label for="">Password</label>
      <input type="password" name="password" required value=""> <br>
      <button type="submit" name="submit">Login</button>
    </form>
    <br>
    <a href="registration.php">Registration</a> -->



<a href="registration.php"><input class="btn btn-light sign-up btn-lg mt-2"  type="submit"   value="Don't have an account, Sign Up"/></a>

    <div class="col">


<div class="row align-items-center">
    <div class="container w-50">
        <h1 class="h1 mb-4">Sign in</h1>
        <div class="border-Register2">
        <form action="#" class="mt-0" id="log-in"  method="post" autocomplete="off">
            <div>
                
            </div>
            <div>
                <label for="email" class="form-label"><b>Email:</b></label>
                <input type="text" name="usernameemail" required value="" id="login-email" class="form-control mb-1" />
            </div>
          
            <div>
            <label for="pass" class="form-label"><b>Password:</b></label>
           
                <input type="password" name="password" required value="" class="form-control"  />

</div>
         
            <div class="d-grid gap-2">
                <input class="btn btn-primary sign-up btn-lg mt-2" id="signup" type="submit" name="submit"  value="Log in"/>
            </div>
        </form>
    </div>
    </div>
</div>
</div>
</div>
</div>



    
  </body>
</html>