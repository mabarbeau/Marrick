<?php
  require('functions.php');
  require('model.php');
  require('views/list.php');
  require('controller.php');

  $controller = new Controller();
  $controller->index();
?>
