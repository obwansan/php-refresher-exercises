<?php 

# Superglobals are built-in variables that are always available in all scopes

  # $_SERVER superglobal
  // An array containing information such as headers, paths, and script locations. 

  // Create server array
  $server  = [
    'Host Server Name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root'=> $_SERVER['DOCUMENT_ROOT'],
    'Current Page' => $_SERVER['PHP_SELF'],
    'Script Name' => $_SERVER['SCRIPT_NAME'],
    'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
  ];
  // echo $server['Document Root'];
  
  // Create client array
  $client = [
    'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT']
  ];

?>

<!-- <pre>
  <?php // print_r($client); ?>
</pre> -->