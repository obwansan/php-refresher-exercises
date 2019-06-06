<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

# VARIABLES
/**
 * Dollar sign prefix
 * Only start with letter or underscore
 * Case sensitive
 */ 

$output = 'Hello World';
// echo $output;

# STRINGS
/**
 * Using double quotes allows you to interpolate variables, like string template literals in JS. 
 * Don't need to use concatenation operator.
 */
$string1 = 'Hello';
$string2 = 'World';
$greeting1 = $string1 .' '. $string2;
$greeting2 = "$string1 $string2";
// echo $greeting1;
// echo $greeting2;

# CONSTANTS
// Only use when you know the variable value won't change (e.g. your server name).
// Constants are case sensitive. Have to add 'true' as third parameter to make case-insensitive.
define('GREETING', 'Hello Everyone', true);
echo greeting; // 'Hello Everyone'