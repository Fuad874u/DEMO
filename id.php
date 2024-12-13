<?php 


define("USERNAME","admin");
define("PASSWORD","13986");

echo"Enter username: ";
$inputUsername = readline();
 
echo "Enter password: ";
$inputpassword = readline();

if($inputUsername === USERNAME && $inputpassword === PASSWORD)
{ echo "Login Successful !";}
else { echo "Invalid username or password try again .";}
?>