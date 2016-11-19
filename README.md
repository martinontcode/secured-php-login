# Secure and minimal PHP login script
PHP login script that includes secure validation, MySQLi injection protection and has great design.
## Screenshot
![Login Form](http://i.imgur.com/lbuttFs.png)

## Who is this script for ?
If you are looking for a simple login script then this is for you. A lot of beginners try to build login scripts from scratch and end up using outdated salting and hashing. This script comes with a fully implemented user validation system covering most of security issues. You should use this login script with the registraton script also available on my [Github] (https://github.com/MartinoEst/php-user-registration).
## Requirements
1. PHP 5.6
2. mySQLi activated

## Live demo
http://login.martincodes.com

```
You can user these credentials to test the login function:
Username: test
Password: test
```
## Installation
Create a MySQL database named 'membership'.  
Change database server, user, password in config/dbconnect.php.  
Run the script below to create MySQL table.  
```
CREATE TABLE `membership`.`membership` ( `id` INT(11) NOT NULL AUTO_INCREMENT , `username` VARCHAR(20) NOT NULL , `email` VARCHAR(40) NOT NULL , `password` VARCHAR(128) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```
## License
Licensed under MIT. You can use this script for free for any private or commercial projects.
## Contribute
Please create a feature-branch if possible when committing to the project, if not then simply commit to master branch.


