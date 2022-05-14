<?php
namespace Controllers;
require("libraries/autoload.php");
class Witness extends Controller{
    protected $pageTitle = 'Temoignage';
    protected $view1 = 'witness/addWitness';
    protected $view2="Witness/manageWitness";
    protected $modelName = \models\Responsible::class;
    public function addWitness(){
        $error_msg = ' ';
        $name_witness = ' ';
        $title ="";
        $function = " ";
        $link_video = " ";
     
        if(isset($_POST['add_witness'])){
            if(isset($_POST['name_witness'])&& isset($_POST['title']) && isset($_POST['function']) && isset($_POST['link_video'])){
                if(!empty($_POST['name_witness']) && !empty($_POST['title']) && !empty($_POST['function']) && !empty($_POST['link_video']) && !empty($_FILES['image']['name'])){
                    $name_witness = $_POST['name_witness'];
                    $title = $_POST['title'];
                    $function = $_POST['function'];
                    $link_video = $_POST['link_video'];
                    $img = $_FILES['image']['name'];
                    else {
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
            }
        }
        $pageTitle = $this->pageTitle;
        \Renderer::render($this->view1, compact('pageTitle', 'error_msg', 'name_witness', 'title', 'function','link_video'));
    }

public function manageWitness(){
    $error_msg="";
    $pageTitle = $this->pageTitle;
     $witnesses = $this->model->findAll();
     \renderer::render($this->view2, compact('pageTitle', 'witnesses', 'error_msg'));
}
}
?>