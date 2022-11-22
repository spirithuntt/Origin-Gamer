<?php
include('functions.php');
?>
<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,"> 
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css" integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
   <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css">
 <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
 <script defer src="https://parsleyjs.org/dist/parsley.js"></script>
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
          <h1><a>Origin Gamer</a></h1>
        </div>
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Sign up to your account</span>
              <form id="stripe-login" method="post" data-parsley-validate>
                <div class="form-group">
                  <label for="InputEmail1" class="form-label mt-4">username</label>
                  <input type="username" class="form-control" id="user_name" name="user_name" placeholder="Enter username" required>                
                </div>
                <div class="form-group">
                  <label for="InputEmail1" class="form-label mt-4">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" data-parsley-type = "email" data-parsley-trigger="keyup" required>                
                </div>
                <div class="form-group">
                  <label for="InputPassword1" class="form-label mt-4">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-parsley-type = "email" data-parsley-trigger="keyup"  required>
                </div>
                <div class="form-group">
                <a href="index.php">you already have an account?</a>
                </div>
                    <div class="d-flex justify-content-center pb-5">
                      <button class="btn btn-primary" type="submit" name="signup" value="signup">
                        Sign up
                      </button>
                    </div>
                  
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</body>
<script  src="scripts.js"></script>
</html>