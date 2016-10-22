<?php
if(!isset($_SESSION)) { session_start();} 
/* Start session, this is necessary, you should place this into your header right after <?php syntax ! */ 
        
/* Secure and minimal PHP login script
 * PHP login script that includes secure validation, MySQLi injection protection and has great design.
 * 
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