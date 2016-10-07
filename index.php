<?php
  require('model.php');
  require('view.php');
  require('controller.php');

  $model = new Model();
  $controller = new Controller($model);
  $view = new View($controller, $model);
  $view->output($view->model);
?>
