<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="jumbotron jumbotron-fluid rounded text-center">
    <div class="container">
      <h1 class="display-3"><i class="fas fa-database text-dark"></i> <?php echo $data['title']; ?></h1>
      <p class="lead"><?php echo $data['description']; ?> is done! - Now You can <a class="text-success" href="<?php echo URLROOT; ?>/users/register">Register</a> and then <a class="text-success" href="<?php echo URLROOT; ?>/users/login">Login</a></p>
    </div>
  </div>
  <!-- Include the db_init.php and change the text according to the current notification! -->
  <p>Click here to <a href="<?php echo URLROOT; ?>/db_init.php" target="_blank">proceed</a></p>
<?php require APPROOT . '/views/inc/footer.php'; ?>
