<?php
/*
  // Check for posted data
  if(filter_has_var(INPUT_POST, 'data')) {
    echo 'Data found';
  } else {
    echo 'No data';
  }
  
  ******************************************

  // Check if posted data is an email (x@x.x)
  if(filter_has_var(INPUT_POST, 'data')) {
    if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)) {
      echo 'Email is valid';
    } else {
      echo 'Email is not valid';
    }
  }

  ******************************************

  if(filter_has_var(INPUT_POST, 'data')) {
    $email = $_POST['data'];

    // Remove illegal chars (e.g. script tags <>)
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email.'<br>';

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo 'Email is valid';
    } else {
      echo 'Email is not valid';
    }
  }

  ******************************************

  */

  $filters = array(
    "data" => FILTER_VALIDATE_EMAIL,
    "data2" => array(
      "filter" => FILTER_VALIDATE_INT,
      "options" => array(
        "min_range" => 1,
        "max_range" => 100
      )
    )
  );

  // Value entered in data input field has to be a valid email
  // Value entered in data2 input field has to be a valid int between 1 and 100
  print_r(filter_input_array(INPUT_POST, $filters));
?>

<form method=POST action="<?php echo $_SERVER['PHP_SELF'] ?>" >
  <input type="text" name="data">
  <input type="text" name="data2">
  <button type="submit">Submit</button>
</form>