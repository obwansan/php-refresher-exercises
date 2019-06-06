<?php 

if(isset($_GET['name'])) {
  // print_r($_GET);
  // htmlentities() stops a XSS script running by converting script tags into htmlentities.
  $name = htmlentities($_GET['name']);
  // echo $name;
};
/*
if(isset($_POST['name'])) {
  print_r($_POST);
  $name = htmlentities($_POST['name']);
  echo $name;
};


if(isset($_REQUEST['name'])) {
  print_r($_REQUEST);
  $name = htmlentities($_REQUEST['name']);
  echo $name;
};
*/

// echo $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>My Website</title>
  </head>
  <body>
    <form method="GET" action="./get_post.php">
      <div>
        <label>Name</label><br>
        <input type="text" name="name">
      </div>
      <div>
        <label>Email</label><br>
        <input type="email" name="email">
      </div>
      <input type="submit" value="Submit">
    </form>
    <ul>
    <!-- Can set the query string in the href because it performs a GET request -->
      <li>
        <a href="./get_post.php?name=Bobs">Bobs</a>
      </li>
      <li>
        <a href="./get_post.php?name=Mibs">Mibs</a>
      </li>
    </ul>
    <h1><?php echo "{$name}'s Profile"; ?></h1>
  </body>
</html>