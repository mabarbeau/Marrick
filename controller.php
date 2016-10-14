<?php
class Controller
{

  protected $model;
  protected $view;

    public function __construct() {
      $this->model =  new Model();

      $this->view = new Lists();
    }

    public function index() {
      ob_start();

      $this->view->output($this->model->all());
      $body = ob_get_contents();

      ob_end_clean();

      require('views/layout.php');
    }

}
