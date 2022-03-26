<?php
namespace Controllers;

abstract class Controller {
    protected $model;
    protected $modelName;
    protected $view;
    protected $pageTitle;
    
    /**
     * index the page
     *
     * @return void
     */
    public function index()
    {
      $pageTitle = $this->pageTitle;
      \Renderer::render($this->view, compact('pageTitle'));
    }
    
}