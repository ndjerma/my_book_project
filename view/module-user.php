<section class="user-page container">
    <h1 class="page-title"> <?= $page_output ['page_title'] ?> </h1>

    <h3 class="rented-page-h3">These are the books you have rented:</h3>
    <section class="rented-books-wrapper">
        
<?php 
    
if ($result -> num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo '<div class="rented-book-wrapper">
        <div class="rented-book-img">
            <img src="' . $row["book_image_path"] . '" alt="pic">
        </div>
        <div class="rented-book-text">
            <h4>' . $row["book_name"] . '</h4>
            <h3>' . $row["book_author_name"] . '</h3>
            <p>' . $row["book_description"] . '</p>
        </div>

        <div class="rented-book-btns">
            <button class="btn btn-remove">
                Remove
            </button>

            <a href="./index.php?module=books" class="btn btn-add">
                Add new book
            </a>
        </div>
    </div>';
    }
} else 
    echo "0 results"
    
    
    
    
    
    
    ?>
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- <div class="rented-book-wrapper">
            <div class="rented-book-img">
                <img src="./public/book-img/1984.jpg" alt="pic">
            </div>
            <div class="rented-book-text">
                <h4>Lorem ipsum dolor sit amet.</h4>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum, facere?</p>
            </div>

            <div class="rented-book-btns">
                <button class="btn btn-remove">
                    Remove
                </button>

                <a href="./index.php?module=books" class="btn btn-add">
                    Add new book
                </a>

            </div>
        </div> -->
        

    </section>
</section>