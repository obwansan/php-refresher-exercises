<?php 

  // Have to call session_start() to be able to access the SESSION array
  session_start();
  $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
  $email = $_SESSION['email'];

  print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Sessions</title>
</head>
<body>
  <h1>Hello <?php echo $name ?></h1>
</body>
</html>