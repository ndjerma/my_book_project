<header class="hero container">
    <div class="hero-wrapper">
      <!-- <h1 class="hero-title">My Book World</h1> -->
      <h1 class="hero-title"> <?= $page_output ['page_title'] ?> </h1>
      <p class="hero-text">
        Books on the Move is your go-to destination for renting and reading the latest and greatest books anytime, anywhere. Our online book rental service offers a vast selection of popular titles across a variety of genres, from thrilling mysteries to heartwarming romance and everything in between.
      </p>

        <!-- opasna zona -->

      <?php 
      if(!isset($_SESSION['email']) || $_SESSION['email'] !== 1)
        echo '<a href="./index.php?module=registration" class="btn">Register Now</a>';
      ?>


    </div>
    <div class="hero-img">
      <img src="./public/img/hero-img.png" alt="hero-image">
    </div>
</header>


<!-- DISCOVER BOOKS -->

  <section class="discover-books container">
    <h2 class="section-title">Most popular books</h2>
    <div class="books-wrapper">
      <div class="book-wrapper">
        <div class="book-img">
          <a href=""><img src="./public/img/book.jpg" alt="" class="book-photo"></a>
        </div>
        <p class="book-title">Atomic Habits</p>
        <p class="book-author">James Clear</p>
      </div>
      <div class="book-wrapper">
        <div class="book-img">
          <a href=""><img src="./public/img/book.jpg" alt="" class="book-photo"></a>
        </div>
        <p class="book-title">Atomic Habits</p>
        <p class="book-author">James Clear</p>
      </div>
      <div class="book-wrapper">
        <div class="book-img">
          <a href=""><img src="./public/img/book.jpg" alt="" class="book-photo"></a>
        </div>
        <p class="book-title">Atomic Habits</p>
        <p class="book-author">James Clear</p>
      </div>
      <div class="book-wrapper">
        <div class="book-img">
          <a href=""><img src="./public/img/book.jpg" alt="" class="book-photo"></a>
        </div>
        <p class="book-title">Atomic Habits</p>
        <p class="book-author">James Clear</p>
      </div>
    </div>
    <a href="./index.php?module=books" class="btn">Discover more</a>
  </section>