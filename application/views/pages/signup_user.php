<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='assets/signup.css'>
  <link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
</head>
<body>
<?php echo validation_errors(); ?>

<form action="<?php echo site_url('Users/users_signup') ?>"  method="post"  style="border:1px solid #ccc">
  <div class="container">

    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" class="form-control "required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" class="form-control "required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password1" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password2" required>

     <p>By creating an account you agree to our 
      <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>


</body>
</html>




<?php 
?>
