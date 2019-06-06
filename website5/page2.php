<?php

if(isset($_COOKIE['username'])) {
  echo 'Username ' . $_COOKIE['username'] . 'is set';
} else {
  echo 'User is not set';
}

?>