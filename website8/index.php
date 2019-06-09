<?php

require('./config/config.php');
require('./config/db.php');

// Create query
$query = 'SELECT * FROM posts ORDER BY created_at DESC';

// Perform a query agianst the DB
$result = mysqli_query($conn, $query);

// Fetches all result rows as an associative array
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($posts);

// Frees the memory associated with a result
mysqli_free_result($result);

// Close a previously opened database connection
mysqli_close($conn);

?>

<?php include('./inc/header.php') ?>
    <div class="container">
      <h1>Posts</h1>
      <?php foreach($posts as $post) : ?>
        <div class="card text-white bg-primary mb-3" style="max-width: 30rem;"> 
          <div class="card-body">
            <h4 class="card-title"><?php echo $post['title'] ?></h4>
            <small>Created on 
              <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?>
            </small>
            <p class="card-text"><?php echo $post['body'] ?></p>
            <!-- $post['id'] gets the id automatically assigned in the DB -->
            <a href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>" class="btn btn-info">Read More</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
<?php include('./inc/footer.php') ?>

