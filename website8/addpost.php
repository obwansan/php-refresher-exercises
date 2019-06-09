<?php

require('./config/config.php');
require('./config/db.php');

// Check for submit ('submit' is the value of the name attribute 
// in the input element (and the $_POST array, if form is submitted)
if(isset($_POST['submit'])) {
  // Get form data
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $body = mysqli_real_escape_string($conn, $_POST['body']);
  $author = mysqli_real_escape_string($conn, $_POST['author']);

  $query = "INSERT INTO posts(title, author, body) 
            VALUES($title, $author, $body)";

  // If the query is successful
  if(mysqli_query($conn, $query)) {
    // redirect to 'home' page of all posts (the INDEX route in REST)
    header('Location: '.ROOT_URL.'');
  } else {
      echo 'ERROR: '. mysqli_error($conn);
  }
}
  
?>

<?php include('./inc/header.php') ?>
    <div class="container">
      <h1>Add Post</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
          </div>
          <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control">
          </div>
          <div class="form-group">
            <label>Body</label>
            <textarea name="body" class="form-control"></textarea>
          </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
<?php include('./inc/footer.php') ?>

