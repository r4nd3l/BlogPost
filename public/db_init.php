<?php
  require_once('../app/bootstrap.php');

  $db = new Database();

  $db->query(
      "CREATE TABLE IF NOT EXISTS posts (
      id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      user_id int(11) NOT NULL,
      title varchar(255) NOT NULL,
      body text NOT NULL,
      created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
    );

      CREATE TABLE IF NOT EXISTS users (
      id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      name varchar(255) NOT NULL,
      email varchar(255) NOT NULL,
      password varchar(255) NOT NULL,
      created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
      )"
    );

  $db->execute();

  echo "DB well done!";
