<?php

/**
 * Indexed
 * Associative
 * Multi-dimensional
 */

######### INDEXED ARRAYS #########

// Use array function or array literal
$people = array('kevin', 'jeremy', 'sara');
$cars = ['Honda', 'Toyota', 'BMW'];

// Add to specific index
$cars[3] = 'Chevy';

// Add to end of array
$cars[] = 'Ford';

// Get number of elements in array
// echo count($cars);

// Print out elements in array
// print_r($cars); 

// Get all data about the array
// var_dump($cars);

######### ASSOCIATIVE ARRAYS #########

// More like objects than normal number indexed arrays
$ages = array('Brad' => 45, 'Jose' => 35, 'William' => 37);
$ids = [10 => 'Brad', 20 => 'Jose', 30 => 'William'];

// echo $ages['Jose'];
// echo $ids[20];
$ages['Jill'] = 26;

// print_r($ages);
// var_dump($ids);

######### MULTI_DIMENSIONAL ARRAYS #########

// Can have different data types in same array, but not good practice usually
$automobiles = array(
  array('Honda', 20, 10),
  array('Toyota', 30, 15),
  array('Ford', 40, 22),
);
// Access element in nested array
echo $automobiles[1][0]; // 'Toyota'

$animals = [
  ['dog', 'cat'],
  ['squirrel', 'rat'],
  ['hippo', 'giraffe'],
];

echo $animals[2][1]; // giraffe
