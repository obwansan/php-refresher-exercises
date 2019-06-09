<?php

require('./config/config.php');
require('./config/db.php');

// Check for delete ('delete' is the value of the name attribute 
// in the input element (and the $_POST array, if form is submitted)
if(isset($_POST['delete'])) {
  // Get form data
  $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

  // Create query (prepared statement)
  $query = "DELETE FROM posts WHERE id = {$delete_id}";

  // die($query); // Exits the program and prints passed string

  // If the query is successful
  if(mysqli_query($conn, $query)) {
    // redirect to 'home' page of all posts (the INDEX route in REST)
    header('Location: '.ROOT_URL.'');
  } else {
      echo 'ERROR: '. mysqli_error($conn);
  }
}

// Get blog ID off the $_GET superglobal (escaping any special characters)
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Create query (have to concatenate the $id variable to the query string)
$query = 'SELECT * FROM posts WHERE id = ' .$id;

// Perform a query agianst the DB
$result = mysqli_query($conn, $query);

// Fetches single result row as an associative array
$post = mysqli_fetch_assoc($result);
// var_dump($posts);

// Frees the memory associated with a result
mysqli_free_result($result);

// Close a previously opened database connection
mysqli_close($conn);

?>

<?php include('./inc/header.php') ?>
    <div class="container">
    <a href="<?php echo ROOT_URL ?>" class="btn btn-info">Back</a>
      <h1><?php echo $post['title'] ?></h1>
        <small>Created on 
          <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?>
        </small>
        <p class="card-text"><?php echo $post['body'] ?></p>
        <hr>
        <!-- Delete button -->
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" class="float-right">
          <input type="hidden" name="delete_id" value="<?php echo $post['id'] ?>">
          <input type="submit" name="delete" value="Delete" class="btn btn-danger">
        </form>
        <!-- Edit button. $post['id'] gets the id automatically assigned in the DB -->
        <a href="<?php echo ROOT_URL ?>editpost.php?id=<?php echo $post['id'] ?>" class="btn btn-primary">Edit</a>
    </div>
  </body>
</html>
<?php include('./inc/footer.php') ?>
