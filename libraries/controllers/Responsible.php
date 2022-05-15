<?php
namespace Controllers;
require_once('libraries/autoload.php');
class Responsible extends Controller{
    protected $pageTitle = 'Responsable';
    protected $view1 = 'responsible/addResponsible';
    protected $view2="responsible/manageResponsible";
    protected $modelName = \models\Responsible::class;
    public function addResponsible(){
      global $error_msg;
        $error_msg = ' ';
        $name_resp = ' ';
        $firstname_resp = ' ';
        $function_resp = " ";
        if(isset($_POST['add_resp'])){
        if(isset($_POST['name_resp']) && isset($_POST['firstname_resp']) && isset($_POST['function_resp'])){
            if(!empty($_POST['name_resp']) && !empty($_POST['firstname_resp']) && !empty($_POST['function_resp']) && !empty($_FILES['image']['name'])){
                $name_resp = $_POST['name_resp'];
                $firstname_resp = $_POST['firstname_resp'];
                $function= $_POST['function_resp'];
                $img = $_FILES['image']['name'];
                $ext = explode('.', $img);
                $file_ext = strtolower(end($ext));
                $image = rand(1, 1000000) . '.' . $file_ext;
                $domain = "responsibles";
                $modelMethod = 'insertOne';
               \Database::verifyFile(compact('file_ext', 'image', 'domain', 'Model',  'modelMethod'), compact('name_resp', 'firstname_resp', 'function', 'image'));
              } else {
                $error_msg = \Renderer::showError('Veuillez remplir tous les champs', 'danger');
              }
            }

        }
    $pageTitle = $this->pageTitle;
        \Renderer::render($this->view1, compact('pageTitle', 'error_msg', 'name_resp', 'firstname_resp', 'function_resp'));
}
public function manageResponsible(){
   $error_msg="";
   $pageTitle = $this->pageTitle;
    $responsibles = $this->model->findAll();
    \renderer::render($this->view2, compact('pageTitle', 'responsibles', 'error_msg'));
}
}

?>