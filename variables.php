<?php
// single line comment
# single line comment
/*
multiline
comment
*/

#VARIABLES
/*
    - prefix $
    - start with latter or an underscore
    - onlu letters, numbers and underscores
    - case sensitive
*/

#DATA TYPES
/*
    Strings
    Integers
    Floats
    Booleans
    Arrays
    Objects
    NULL
    Resourse

*/

$output = 'hello world!';

$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;

$string1 = 'Hello';
$string2 = 'World';
$greeting = $string1.' '.$string2. '!';
$greeting2 = "$string1 $string2";
$string3 = 'they\'re Here';

$float1 = 4.4;
$bool1 = true;

#konstante
define('GREETING', 'Hello Everyone',true);

echo GREETING;

?>