<?php
class View
{
  public $model;
  public $controller;

  public function __construct($controller,$model)
  {
    $this->controller = $controller;
    $this->model = $model->structure;
  }

  public function output($model)
  {
    ?>
    <ul>
      <?php foreach($model as $key => $item): ?>
        <li id= <?=$item[0];?>>
          <?=$item[1];?>
        </li>

        <?php
        if( !empty($item[3]) )
          {
            $this->output($item[3]);
          }
        ?>
      <?php endforeach; ?>
    </ul>
    <?php
  }
}
