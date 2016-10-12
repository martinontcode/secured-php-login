<?php

/* secured-php-login
 * PHP login script that uses up to date password hashing and salting.
 * Proper security againts SQL injections.
 * @author MartinoEst
 * @link https://github.com/martinoest/secured-php-login/
 * @license http://opensource.org/licenses/MIT MIT License
 * 
 * Minimum 5.6 PHP version required!
 */
   

/* Require login.php to call login function */
require_once("functions/login.php");

/* Call for login function */
$login = new Login();

?>
