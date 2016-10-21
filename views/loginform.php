<!-- Include Bootstrap .css ; You can copy this to your header file instead. I've added custom code at the end. -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Custom -->
<link rel="stylesheet" href="css/custom.css">

<div class="container">
    
<!-- This error will be shown to user if wrong username or password is provided -->
    
<!-- Login Form -->
<form method="post" action="index.php" name="loginform" class="form-login">
    
<div class="form-group">
    <div class="cnt"><h3>Sign into portal</h3></div>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" placeholder="Username" class="input form-control" autocomplete="off" required autofocus><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" placeholder="Password" class="input form-control" autocomplete="off" required autofocus><br>
    <input type="submit"  name="login" value="Sign In" class="btn btn-lg btn-success btn-block submit" />
</div>

<?php if(@$_GET['login'] == 'false'): ?>
    <div class="alert alert-danger">
        <strong><center>Username or password is incorrect!</center></strong>
    </div>
<?php endif; ?>
    
<!-- URL to registration form -->
<div class="cnt"><a href="#">Dont have an account? Create one</a></div>

</form>
<!-- End Login Form -->

<!-- Remove this to remove the GitHub URL link -->
<div class="cnt gray"><a href="https://github.com/MartinoEst/secured-php-login">Check out this code at GitHub</a></div>

</div>
<!-- End div -->
