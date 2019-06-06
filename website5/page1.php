<?php
  // If the submit button is clicked / enter button is hit, getthe entered name
  if(isset($_POST['submit'])) {
    $username = htmlentities($_POST['username']);

    // setcookie(cookie-name, cookie-value, expiration);
    setcookie('username', $username, time()+3600); // Expires in 1 hour

    // redirect
    header('Location: page2.php');
  };

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Cookies</title>
</head>
<body>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="username" placeholder="Enter name"><br>
    <input type="submit" name="submit" value="Submit"></input>
  </form>
</body>
</html>