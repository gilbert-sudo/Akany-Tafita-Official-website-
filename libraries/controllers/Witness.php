<?php
namespace Controllers;
require("libraries/autoload.php");
class Witness extends Controller{
    protected $pageTitle = 'Temoignage';
    protected $view1 = 'witness/addWitness';
    protected $view2="Witness/manageWitness";
    protected $modelName = \models\Responsible::class;
    public function addWitness(){
        $pageTitle = $this->pageTitle;
        \Renderer::render($this->view1, compact('pageTitle'));
    }
}
?>