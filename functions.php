<?php
# FUNCTONS - block of code that can be repeatedly called 

/*
    Camel case - myFunction()
    Lower Case - my_function()
    Pascal Case - MyFunction()
*/

// create simple function
function simpleFunction(){
    echo 'Hello World';
}
 // run simple function
simpleFunction();

// function with paramether
function sayHello($name = 'World'){
    echo "Hello $name<br>";
}

// sayHello('Joe');
// sayHello('Bob');
// sayHello('Tim');

//Return Value
function addNumbers($num1, $num2){
    return $num1 + $num2;
}

echo addNumbers(2,3);

// By reference

$myNum = 10;

function addFive($num){
    $num += 5;
}

function addTen(&$num){
    $num += 10;
}

addFive($myNum);

echo "Values: $myNum<br>";

addTen($myNum);

echo "Value: $myNum<br>"


?>