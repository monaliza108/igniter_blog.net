<link rel='stylesheet' href='assets/signup.css'>
<?php echo validation_errors(); ?>
<?php echo form_open('login_user')?> 

<!-- <form action="" method="post" style="border:1px solid #ccc"> -->
  <div class="container">
    <h1>Sign In</h1>
    <p>Please fill in this form to SignIn.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

<label><input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label>

    <div class="clearfix">
      <!-- <button type="button" class="cancelbtn">Cancel</button> -->
      <button type="submit" class="loginbtn btn-block">Login</button>
    </div>
  </div>
<!-- </form> -->
<?php echo form_close('') ?>