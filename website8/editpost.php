<?php

require('./config/config.php');
require('./config/db.php');

// Check for submit ('submit' is the value of the name attribute 
// in the input element (and the $_POST array, if form is submitted)
if(isset($_POST['submit'])) {
  // Get form data
  $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $body = mysqli_real_escape_string($conn, $_POST['body']);
  $author = mysqli_real_escape_string($conn, $_POST['author']);

  // Create query (prepared statement)
  // Note: variable interpolation of $update_id within double quotes.
  // Contrast with having to concatenate with single quotes in post.php
  // Also, values have to be in quotes, even if variables.
  $query = "UPDATE posts SET
              title='$title',
              author='$author',
              body='$body'
              WHERE id = {$update_id}";

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
      <h1>Edit Post</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $post['title'] ?>">
          </div>
          <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control" value="<?php echo $post['author'] ?>">
          </div>
          <div class="form-group">
            <label>Body</label>
            <textarea name="body" class="form-control"><?php echo $post['body'] ?></textarea>
          </div>
          <!-- $post['id'] gets the id automatically assigned in the DB -->
            <input type="hidden" name="update_id" value="<?php echo $post['id'] ?>">
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
<?php include('./inc/footer.php') ?>

