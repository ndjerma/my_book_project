<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $book_name = clean($_POST['book_name']);
  $book_author_name = clean($_POST['book_author_name']);
  $book_date_published = clean($_POST['book_date_published']);
  $book_description = clean($_POST['book_description']);
  $book_image_path = clean($_POST['book_image_path']);
  
  if (!empty($errors)) {
    foreach ($errors as $error) {
      $error_msg .= '<div class="alert">' . $error . '</div>';
    }
  } else {
    
    $sql = "INSERT INTO books (book_name, book_author_name, book_date_published, book_description, book_image_path) VALUES ('$book_name', '$book_author_name', '$book_date_published', '$book_description', '$book_image_path')";

    
    confirm(query($sql));   // pozivamo funkciju iz db.php prvo se izvrsava upit tj. query zatim confirm

    set_message("You have successfully added a book");
    
    
    // exit;
  }





}
















$page_output = [
    'page_title' => 'Hello admin, '. $_SESSION['first_name'],
    'view' => 'module-admin.php'
];

?>