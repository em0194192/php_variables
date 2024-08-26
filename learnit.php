<?php 
/*
echo("Hello World!\n");
$opening = "Aloha\n";
echo $opening . " Eric";
*/

$count = 6; //integer
$price = 9.50; //double or float
$first_name = 'bob'; //string
$first_name = "Bob"; //string
$is_valid = true; //boolean

$nullVariable; //NULL ... a variable with no value assigned
echo @$nullVariable; //can put @ in front of a variable to suppress errors

//declare a constant - constants are always captialized
define('PI', 3.14);

//ARRAY
$games = ['Animal Crossing ', "Harry Potter"];

//PRINTING AN ARRAY
// echo($games); doesn't work as echo expects a string
//print_r($games); //print_r is a function that prints the contents of an array
//echo($games[1]); //prints Harry Potter

//ASSOCIATIVE ARRAY
$student1 = [
    'name' => 'Mitzy',
    'id' => 123456,
    'grade' => 'A',

];

echo($student1['name']); //prints Mitzy
print_r($student1); //prints the entire array