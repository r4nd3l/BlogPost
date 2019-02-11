<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="jumbotron jumbotron-fluid rounded text-center">
    <div class="container">
      <h1 class="display-3"><i class="fas fa-database text-dark"></i> <?php echo $data['title']; ?></h1>
      <p class="lead"><?php echo $data['description']; ?> - Now You can <a class="text-success" href="<?php echo URLROOT; ?>/users/register">Register</a> and then <a class="text-success" href="<?php echo URLROOT; ?>/users/login">Login</a></p>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
