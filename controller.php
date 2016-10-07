<?php
class Controller
{

  protected $model;
  protected $view;

    public function __construct() {
      $this->model =  new Model();

      $this->view = new View();
    }

    public function index() {
      $this->view->output($this->model->all());
      
    }

}
