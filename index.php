<?php
require "User.php";
 
$person = new User( "Kevin", 2000, "confuse yourself with OOP");
echo "Hi ".$person->getName().", you are ".$person->age()." years old! You like to ".$person->hobby();
?>