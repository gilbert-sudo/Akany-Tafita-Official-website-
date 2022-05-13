<?php
namespace Controllers;
require("libraries/autoload.php");
class Responsible extends Controller{
    protected $pageTitle = 'Responsable';
    protected $view1 = 'responsible/addResponsible';
    protected $view2="responsible/manageResponsible";
    protected $modelName = \models\Responsible::class;
    public function addResponsible(){
        if(isset($_GET['add_resp'])){
        if(isset($_GET['name_resp']) && isset($_GET['firstname_resp']) && isset($_GET['function_resp']) && isset($_GET['image'])){
            $name_resp = $_GET['name_resp'];
            $firstname_resp = $_GET['firstname_resp'];
        $pageTitle = $this->pageTitle;
        \Renderer::render($this->view1, compact('pageTitle'));
    }
}
}
}
?>