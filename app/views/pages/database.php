<!-- Include the db_init.php and change the text according to the current notification! -->
<?php require APPROOT . '/views/inc/header.php'; ?>
  <h1><?php echo $data['title']; ?></h1>
  <p><?php echo $data['description']; ?></p>
  <p>In order to use the Register and Login function, the database have to be setup!</p>
  <p>Click here to <a href="<?php echo URLROOT; ?>/db_init.php" target="_blank">proceed</a></p>
<?php require APPROOT . '/views/inc/footer.php'; ?>
