<?php
/**
 * For the MySQLi functions to be available, you must compile PHP with support for the MySQLi extension. The MySQLi extension was introduced with PHP version 5.0.0.
 */

// Create connection (host, user, password, DB name)
// Errors are output on http://localhost:8888/phpsandbox/website8/ 
// page if any of the arguments are incorrect
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if(mysqli_connect_errno()) {
  //Connection failed
  echo 'Failed to connect to MySQL: '. mysqli_connect_errno();
}