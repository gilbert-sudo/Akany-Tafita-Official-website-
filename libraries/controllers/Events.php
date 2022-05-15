<?php

namespace Controllers;

class Events extends Controller
{
  protected $modelName = \models\Events::class;
  protected $view1 = 'Event/addEvent';
  protected $view2 = 'Event/manageEvent';
  protected $pageTitle = 'Evènement';
  public function addEvent()
  {
    global $error_msg;
    $error_msg = ' ';
    $title_event = ' ';
    $time_event = ' ';
    $date_event = ' ';
    $description_event = ' ';
    if (isset($_POST['add_event'])) {
      if (isset($_POST['title_event']) && isset($_POST['time_event']) && isset($_POST['date_event']) && isset($_POST['description_event'])) {
        if (!empty($_POST['title_event']) && !empty($_POST['time_event']) && !empty($_POST['date_event']) && !empty($_POST['description_event']) && !empty($_FILES['image']['name'])) {

          $title_event = $_POST['title_event'];
          $time_event = $_POST['time_event'];
          $date_event = $_POST['date_event'];
          $description_event = $_POST['description_event'];
          $img = $_FILES['image']['name'];
          $ext = explode('.', $img);
          $file_ext = strtolower(end($ext));
          $image = rand(1, 1000000) . '.' . $file_ext;
          $domain = 'events';
          $Model = $this->model;
          $modelMethod = 'insertOne';
          \Database::verifyFile(compact('file_ext', 'image', 'domain', 'Model', 'modelMethod'),  compact('title_event', 'date_event', 'time_event', 'description_event','image'));

        }else
        {
          $error_msg = \Renderer::showError('Veuillez remplir tous les champs', 'danger');
        }
      }
    }
    $pageTitle = $this->pageTitle;
    \Renderer::render($this->view1, compact('pageTitle', 'error_msg', 'time_event', 'title_event', 'date_event', 'description_event'));
  }
  public function manageEvent(){
    $error_msg="";
    $pageTitle = $this->pageTitle;
     $events = $this->model->findAll();
     \renderer::render($this->view2, compact('pageTitle', 'events', 'error_msg'));
  }
}

