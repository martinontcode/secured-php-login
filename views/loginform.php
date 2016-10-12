<!-- Include Bootstrap .css ; You can copy this to your header file instead. I've added custom code at the end. -->
<link rel="stylesheet" href="css/bootstrap.css">

<div class="container">
    
<!-- Login Form -->
<form method="post" action="index.php" name="loginform" class="form-login">

<input type="text" name="username"  placeholder="Username" class="input form-control" autocomplete="on" required autofocus>
<input type="password" name="password" placeholder="Password" class="input form-control" autocomplete="off" required autofocus>
<input type="submit"  name="login" value="Log in" class="btn btn-lg btn-success btn-block submit" />

<!-- This error will be shown to user if wrong username or password is provided -->
<?php if(@$_GET['login'] == 'false'): ?>
    <div class="alert alert-danger">
        <strong><center>Username or password is incorrect!</center></strong>
    </div>
<?php endif; ?>

</form>
<!-- End Login Form -->

</div>
<!-- End div -->
