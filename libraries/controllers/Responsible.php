<?php
namespace Controllers;
require_once('libraries/autoload.php');
class Responsible extends Controller{
    protected $pageTitle = 'Responsable';
    protected $view1 = 'responsible/addResponsible';
    protected $view2="responsible/manageResponsible";
    protected $modelName = \models\Responsible::class;
    public function addResponsible(){
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
                $allowed_ext = array('jpg', 'jpeg', 'gif', 'png');
                if(in_array($file_ext, $allowed_ext)){
                  $image = rand(1000, 1000000000) . '.' . $file_ext;
                  $target = "views/images/responsibles/".$image;
                  if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
                    $this->model->insertOne(compact('name_resp', 'firstname_resp', 'function', 'image'));
                    $error_msg = \Renderer::showError(' ', 'success');
                  }else {
                    $error_msg = \Renderer::showError("Désolé, une erreur s'est produite lors du téléchargement de votre fichier.", 'danger');
                  }
                } else {
                  $error_msg = \Renderer::showError("Désolé, seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés pour la photo.", 'danger');
                }
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