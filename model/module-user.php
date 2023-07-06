<?php

$users_id = $_SESSION['users_id'];

$query = "SELECT book.* FROM rentals JOIN book ON rentals.book_id = book.book_id WHERE rentals.users_id = $users_id";
$result = query($query);

















$page_output = [
    'page_title' => 'Hello, '. $_SESSION['first_name'],
    'view' => 'module-user.php'
];?>