<?php
// fly
  if(file_exists('db_init.php')){
    include('db_init.php');
  }


  require_once '../app/bootstrap.php';

  // Init Core Library
  $init = new Core;
