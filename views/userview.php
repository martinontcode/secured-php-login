<!-- Include Bootstrap .css ; You can copy this to your header file instead. I've added custom code at the end. -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Custom -->
<link rel="stylesheet" href="css/custom.css">

<div class="container boxcen">
    <p><?php echo "You are signed in as <b>" . $_SESSION['user_id'] . "</b>." ;?></p>
    <form action="index.php" name="logout" method="post"><input type="submit" name="logout" value="Log out" class="btn btn-success btn-sm submit"></form>
</div>
