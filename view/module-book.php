<?php
if (isset($_GET['book_id'])) {
  $book_id = $_GET['book_id'];
  
  // izvršavanje SQL upita za dobijanje informacija o knjizi
  $query = "SELECT * FROM book WHERE book_id = $book_id";
  $result = query($query);
  
  if ($result->num_rows > 0) {
    // prikaz informacija o knjizi
    $row = $result->fetch_assoc();
    echo '<div class="book-container">
            <div class="book-cover">
              <img src="' . $row["book_image_path"] . '" alt="" class="book-cover">
            </div>
            <div class="book-info">
              <h2>' . $row["book_name"] . '</h2>
              <p>Author: ' . $row["book_author_name"] . '</p>
              <p>Description: ' . $row["book_description"] . '</p>
              <p>Published: ' . $row["book_date_published"] . '</p>
              <button class="rent-btn">Rent</button>
            </div>
          </div>';
  } else {
    echo "Book not found";
  }
}

?>

          <!-- <div class="single-book-wrapper container">
            <div class="book-cover">
              <img src="./public/book-img/alhemicar.jpg" alt="" >
            </div>
            <div class="book-info">
              <h2 class="single-book-title">Alhemicar</h2>
              <p class="single-book-author">Author: Paulo Koeljo</p>
              <p class="single-book-description">Description: Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo expedita saepe labore. Fugiat repellat asperiores consequatur voluptate nobis. Quos quo sint harum soluta labore sed. Aut nisi recusandae odio explicabo!</p>
              <p class="single-book-date">Published: 1999</p>
              <button class="btn rent-btn">Rent</button>
            </div>
          </div> -->





          <!-- <div class="book-container">
            <div class="book-cover">
              <img src="' . $row["book_image_path"] . '" alt="" class="book-cover">
            </div>
            <div class="book-info">
              <h2>' . $row["book_name"] . '</h2>
              <p>Author: ' . $row["book_author_name"] . '</p>
              <p>Description: ' . $row["book_description"] . '</p>
              <p>Published: ' . $row["book_date_published"] . '</p>
              <button class="rent-btn">Rent</button>
            </div>
          </div> -->