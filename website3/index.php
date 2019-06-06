<?php
  // Message vars
  $msg = '';
  $msgClass = '';
  // Check if POST request (and therefore $_POST superglobal) contains 'submit' variable (not value)
  if(filter_has_var(INPUT_POST, 'submit')) {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Check required fields
    if(!empty($email) && !empty($name) && !empty($message)) {
      // Check email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Failed
        $msg = 'Please use a valid email';
        $msgClass = 'alert-danger';
      } else {
        // Passed
        $toEmail = "kob123@hotmail.co.uk";
        $subject = 'Contact request from ' .$name;
        $body = '<h2>Contact Request</h2>
                <h4>Name</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Message</h4><p>'.$message.'</p>';

        // Email headers
        $headers = "MIME-version: 1.0" . "\r\n";
        $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

        // Additional headers
        $headers .= "From: " . $name ."<" .$email.">" . "\r\n";

        // mail() function sends the email
        if(mail($toEmail, $subject, $body, $headers)) {
          // Email sent
          $msg = 'Your email has been sent';
          $msgClass = 'alert-success';
        } else {
          $msg = 'Your email was not sent';
          $msgClass = 'alert-danger';
        }
      }
    } else {
      // Failed
      $msg = 'Please fill in all fields';
      $msgClass = 'alert-danger';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand">My Website</a>
        </div>
      </div>
    </nav>
    <div class="container">
      <?php if($msg != ''):  ?>
        <div class="alert <?php echo $msgClass ?>">
          <?php echo $msg; ?>
        </div>
      <?php endif; ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
      </div>
      <div class="form-group">
        <label>Message</label>
        <textarea name="message" class="form-control" cols="30" rows="10"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </body>
</html>