<?php

// FOREACH LOOP
/*
$people = array('Brad', 'Jose', 'Geoff');

foreach($people as $person) {
  echo $person;
  echo '<br>';
}
*/

$people = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'Geoff' => 'geoff@gmail.com');

foreach($people as $person => $email) {
  // concatenate
  echo $person . ': ' . $email;
  echo '<br>';
  // interpolate
  echo "$person: $email";
  echo '<br>';
}

?>