<?php
if (isset($_GET['book_id'])) {
  $book_id = $_GET['book_id'];
  
  // izvršavanje SQL upita za dobijanje informacija o knjizi
  $query = "SELECT * FROM book WHERE book_id = $book_id";
  $result = query($query);
  
  if ($result->num_rows > 0) {
    // prikaz informacija o knjizi
    $row = $result->fetch_assoc();
    echo '<div class="single-book-wrapper container">
            <div class="book-cover">
              <img src="' . $row["book_image_path"] . '" alt="">
            </div>
            <div class="book-info">
              <h2>' . $row["book_name"] . '</h2>
              <p>Author: ' . $row["book_author_name"] . '</p>
              <p>Description: ' . $row["book_description"] . '</p>
              <p>Published: ' . $row["book_date_published"] . '</p>'; // Dodajemo tačku na kraju ovog reda

              if(isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == true ) { 
                echo '<button class="rent-btn btn">Delete</button>'; 
              } else {
                echo '<button class="rent-btn btn">Rent</button>'; 
              }
              
    echo '</div>
          </div>';
  } else {
    echo "Book not found";
  }
}
?>



<section class="discover-books container">
    <h3>Related featured books</h3>
    <div class="books-wrapper">
      <?php
        // SQL upit koji prikazuje četiri nasumične knjige
        $query = "SELECT * FROM book ORDER BY RAND() LIMIT 4";
        $result = query($query);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo '<div class="book-wrapper">
                    <div class="book-img">
                      <a href="./index.php?module=book&book_id=' . $row["book_id"] . '"><img src="' . $row["book_image_path"] . '" alt="" class="book-photo"></a>
                    </div>
                    <p class="book-title">' . $row["book_name"] . '</p>
                    <p class="book-author">' . $row["book_author_name"] . '</p>
                  </div>';
          }
        } else {
          echo "0 results";
      }?>
    </div>
  </section>



