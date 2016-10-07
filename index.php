<?php
  require('functions.php');
  require('model.php');
  require('view.php');
  require('controller.php');

  $controller = new Controller();
  $controller->index();
?>
