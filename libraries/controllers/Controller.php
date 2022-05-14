<?php
namespace Controllers;

abstract class Controller {
    protected $model;
    protected $modelName;
    protected $view1;
    protected $view2;
    protected $pageTitle;
    

   public  function __construct()
    {
        $this->model = new $this->modelName();
     
    }
    /**
     * index the page
     *
     * @return void
     */
  
    public function index()
    {
        $pageTitle = $this->pageTitle;
        \Renderer::render($this->view2, compact('pageTitle'));
    }
    public function update(){
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $id = $_GET['id'];
             $this->model->update($id);
         $success = 1;
        }
        else{
            $success = 0;
        }
    }
    public function delete(): void{
                 if(isset($_GET['id'] )&& !empty($_GET['id'])){
                    $id = $_GET['id'];
                    $this->model->delete($id);
                    $success ="1";
                 }
                 else
                  {
                      $success ="0";
                  }
                  json_encode($success);
                 
    }
}