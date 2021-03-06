<?php

namespace Controllers;

class Events extends Controller
{
  protected $modelName = \models\Events::class;
  protected $view = 'Event/addEvent';
  protected $pageTitle = 'Evènement';
  public function addData(string $sqlRequest,  $id)
  {
    $success = 0;
    $error_msg = ' ';
    $title_event = " ";
    $date_event = " ";
    $time_event = " ";
    $description_event = " ";
    $varData = [];
    if (isset($_POST['title_event']) && isset($_POST['date_event']) && isset($_POST['time_event']) && isset($_POST['description_event'])) {
     if (!empty($_POST['title_event']) && !empty($_POST['date_event']) && !empty($_POST['time_event']) && !empty($_POST['description_event']) && !empty($_FILES['image']['name'])) {
        $title_event = $_POST['title_event'];  
        $date_event = $_POST['date_event'];
        $time_event = $_POST['time_event'];
        $description_event = $_POST['description_event'];
        $img = $_FILES['image']['name'];
        $img_ext = explode('.', $img);
        $imgActualExt = strtolower(end($img_ext));
         $img_name = rand(1, 10000000000000) . '.' . $imgActualExt;
        if ($img != ' ') {
          $valid_file_ext = array("jpg", "jpeg", "png", "gif");
               if (in_array($imgActualExt, $valid_file_ext)) {
        
            $path_target = 'views/images/' . $img_name;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $path_target)) {
              $this->model->$sqlRequest(compact('title_event', 'date_event', 'time_event', 'description_event', 'img_name', 'id'));
              $error_msg = \renderer::showError('votre événement a été bien ajouté', 'success');
            } else {
              $error_msg = \Renderer::showError("Désolé, une erreur s'est produite lors du téléchargement de votre fichier.", 'danger');
            }
          } else {
            $error_msg = \Renderer::showError("Désolé, seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés pour la photo.", 'danger');
              
          }
        }
      } else {
        $error_msg = \Renderer::showError('Veuillez remplir tous les champs', 'danger');
      }
      $varData = [
        'success' => 1,
        'title_event' => $title_event,
        'date_event' => $date_event,
        'time_event' => $time_event,
        'description_event' => $description_event,
        'img_name' => $img_name,
        'error_msg' => $error_msg
      ];

    }
    json_encode($varData);
    return $varData;
  }

  public function addEvent()
  {
  
    if (isset($_POST['add_event'])) {
      $varData = $this->addData('insert', ' ');
      extract($varData);
    }
    $pageTitle = $this->pageTitle;
    \Renderer::render($this->view, compact('pageTitle', 'error_msg', 'title_event', 'date_event', 'time_event', 'description_event'));
   json_encode($varData);
  }

  public function update()
  {
    $error_msg = ' ';
    if (isset($_POST['update_event'])) {
      if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $varData =  $this->addData('update', $id);
      var_dump( extract($varData));

     echo $sign =" ok";  
    }
   
    } 
    $events = $this->model->findAll();
    $pageTitle = $this->pageTitle;
    \Renderer::render('Event/index', compact('pageTitle', 'events','error_msg'));
  }

  public function index()
  {
    if(isset($_GET['err_msg']) and !empty($_GET['err_msg'])){
      $error_msg = $_GET['err_msg'];}
      else{
        $error_msg = ' ';
      }
    
    $events =   $this->model->findAll();
    \Renderer::render('Event/index', ['pageTitle' => $this->pageTitle, 'error_msg' => $error_msg,  'events' => $events]);
  }
  public function suppress()
  {
    if (isset($_GET['id']) && !empty($_GET['id'])) {
      $id = $_GET['id'];
      $varData = $this->model->delete($id);
      extract($varData);
      header('Location: index.php?controller=Events&task=index');
    } else {
      header('Location: index.php?controller=Events&task=index');
    }
  }
}
