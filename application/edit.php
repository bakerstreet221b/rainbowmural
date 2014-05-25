<?php
  session_start();
  include_once("../system/Database.php");
  require('header.php');
?>

<div class="container" id="my_container">
  <?php
    flash();
  ?>
  <h2><?php echo $_SESSION['user_name'] ?></h2>
  <p><strong>Name:</strong>
    <?php echo $_SESSION['first_name'] ." ".$_SESSION['last_name'] ?>
  </p>
  <p><strong>Email Address:</strong>
    <?php echo $_SESSION['email'] ?>
  </p>
  <div class="row">
    <form action='../system/Login_register.php' method='post'>
      <input type='submit' class="btn btn-success" value='Log off'>
    </form>
  </div>
  <br>
  <div class="col-md-6 no_padding">
    <h4>Edit account</h4>
    <form action='../system/Login_register.php' method='post' id='edit' role='form'>
      <input type='hidden' name='action' value='edit'>
      <input type='hidden' name='id' value='<?php echo $_SESSION['id'] ?>'>
      <div class='form-group'>
        <input type='text' placeholder='Username' name='user_name' class="form-control">
      </div>
      <div class='form-group'>
        <input type='text' placeholder='First name' name='first_name' class="form-control">
      </div>
      <div class='form-group'>
        <input type='text' placeholder='Last name' name='last_name' class="form-control">
      </div>
      <div class='form-group'>
        <input type='text' placeholder='Email' name='email' class="form-control">
      </div>
      <input type='submit' value='Edit account' class='btn btn-success'>
    </form>
    <br>
    <h4>Change Password</h4>
    <form action='../system/Login_register.php' method='post' id='pwd' role='form'>
      <input type='hidden' name='action' value='pwd'>
      <input type='hidden' name='id' value='<?php echo $_SESSION['id'] ?>'>
      <div class='form-group'>
        <input type='password' placeholder='Old Password' name='password' class="form-control">
      </div>
      <div class='form-group'>
        <input type='password' placeholder='New Password' name='new_password' class="form-control">
      </div>
      <div class='form-group'>
        <input type='password' placeholder='Confirm new Password' name='conf_password' class="form-control">
      </div>
      <input type='submit' value='Change password' class='btn btn-success'>
    </form>
    <br>
    <hr>
    <form action='../system/Login_register.php' method='post'>
      <input type='hidden' name='action' value='delete'>
      <input type='hidden' name='id' value='<?php echo $_SESSION['id'] ?>'>
      <input type='submit' value='Delete account' class="btn btn-danger">
    </form>
  </div>
</div>
<?php require('footer.php'); ?>
