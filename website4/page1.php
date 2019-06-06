<?php
  // If the submit button is clicked / enter button is hit, start the session
  if(isset($_POST['submit'])) {
    session_start();
  };
  // Assign POST values to SESSION variables
  $_SESSION['name'] = htmlspecialchars($_POST['name']);
  $_SESSION['email'] = htmlspecialchars($_POST['email']);

  // Redirect to page 2
  header('Location: page2.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Sessions</title>
</head>
<body>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="name" placeholder="Enter name"><br>
    <input type="email" name="email" placeholder="Enter email"><br>
    <input type="submit" name="submit" value="Submit"></input>
  </form>
</body>
</html>