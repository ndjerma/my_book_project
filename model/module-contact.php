<?php 

  if ($_POST) {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    $error = [];
    if ($name == '')
      $error[] = 'Unesite ime';
    if ($email == '')
      $error[] = 'Unesite email';
    if ($message == '')
      $error[] = 'Unesite message';


  } 
  

  $page_output = [
    'page_title' => 'Contact Us',
    'view' => 'module-contact.php'
  ];

?>





