<section class="user-page container">
    <h1 class="page-title"> <?= $page_output ['page_title'] ?> </h1>

    <form class="login-form" method="post" action="./index.php?module=admin">
      
      <?php echo $error_msg; ?>
      <?php display_message(); ?>

      <label for="book_name">Naziv knjige:</label>
      <input type="text" name="book_name" >     
      
      <label for="book_author_name">Ime autora:</label>
      <input type="text" name="book_author_name" >

      <label for="book_date_published">Datum objavljivanja:</label>
      <input type="date" name="book_date_published" >

      <label for="book_description">Opis knjige:</label>
      <textarea name="book_description" rows="4" cols="50"></textarea>

      <label for="book_image_path">Putanja do slike knjige:</label>
      <input type="text" name="book_image_path">


      <button class="submit-login" type="submit" name="submit-book">Dodaj knjigu</button>
  </form>
</section>