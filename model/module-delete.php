<?php 

print_r($_SERVER["REQUEST_METHOD"]);


if ((isset($_SESSION['book_id'])) && ($_SERVER["REQUEST_METHOD"] == "POST")) {
    $book_id = $_SESSION['book_id'];
    $sql = "DELETE FROM book WHERE book_id = $book_id";
    confirm(query($sql));
    echo 'Uspesno';
} else 
    echo "Neuspesno";



header('Location:  ./index.php?module=books');
exit();
?>