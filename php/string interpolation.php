<?php
$value=10;

echo "$value number is ten";

echo"<br>";

echo "$valuenumber is ten"; // it shows undefine error because $valuenumber is treated as a variable

echo"<br>";

echo "{$value}number is ten";

echo"<br>";


#################################################
# string interpolation not work in single quotes#
#################################################


echo '{$value}number is ten';

echo"<br>";

echo "\$value number is ten";

?>