<?php
// People Array @TODO - Get from DB
// $people = ["John", "Sally", "Steve", "Carl", "Brad", "Malcolm", "Tina", "Jose", "Mike", "Sue"];
$people[] = "Steve";
$people[] = "John";
$people[] = "Kathy";
$people[] = "Evan";
$people[] = "Anthony";
$people[] = "Tom";
$people[] = "Rhonda";
$people[] = "Hal";
$people[] = "Ernie";
$people[] = "Johanna";
$people[] = "Farrah";
$people[] = "Linda";
$people[] = "Shawn";
$people[] = "Olivia";
$people[] = "Derek";
$people[] = "Amanda";
$people[] = "Rachel";
$people[] = "Katie";
$people[] = "Jillian";
$people[] = "Jose";
$people[] = "Malcom";
$people[] = "Greg";
$people[] = "Mary";
$people[] = "Brad";
$people[] = "Mike";

// Get query string (from GET or POST), i.e. the entered str
$q = $_REQUEST['q'];

// Get suggestions
$suggestion = "";

if($q !== "") {
  // Don't actually need to lowercase $q as stristr() is case insensitive
  $q = strtolower($q);
  $len = strlen($q);
  foreach($people as $person) {
    // if $q matches any of the letters of $person from the start of the word, 
    // assign it to $suggestion and return it as responseText
    if(stristr($q, substr($person, 0, $len))) {
      if($suggestion === "") {
          $suggestion = $person;
      } else {
          $suggestion .= ", $person";
      }
    };
  }
}
echo $suggestion === "" ? "No suggestion" : $suggestion;
