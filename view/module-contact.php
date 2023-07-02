<section class="contact-page container">
  <h1 class="page-title"> <?= $page_output ['page_title'] ?> </h1>
  <?php display_message()?>
  <?php echo $err_msg;?>
  <form class="contact-form" action="" method="post">
    <label for="">Name:*</label>
    <input type="text" name="name">
    <label for="">Email:*</label>
    <input type="email" name="email">
    <label for="">Short message:*</label>
    <textarea name="message" id="" cols="30" rows="5"></textarea>
    <button type="submit" name="submit-message" class="btn">Send</button>
  </form>
</section>