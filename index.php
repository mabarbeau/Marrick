<?php
  require('model.php');
  require('view.php');
  require('controller.php');

  $model = new Model();
  $controller = new Controller($model);
  $view = new View($controller, $model);


  // var_dump($model);
  // var_dump($controller);
  // var_dump($view);

  var_dump($view->output());
?>
