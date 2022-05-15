<?php

namespace Controllers;


class Donation extends Controller
{
  protected $pageTitle = 'Donation';
  protected $view1 = 'donation/ask';
  protected $view2 = 'donation/index';
  protected $modelName = \models\Donation::class;

  /**
   * ask for donation
   *
   * @return void
   */
  public function ask()
  {
    global $error_msg;
    $error_msg = '';
    $sujet = '';
    $montant = '';
    $motif = '';
    if(isset($_POST['demande_don'])){
      if (isset($_POST['sujet']) && isset($_POST['montant']) && isset($_POST['motif'])) {
        if (!empty($_POST['sujet']) &&  !empty($_POST['montant']) && !empty($_POST['motif']) && !empty($_FILES['image']['name'])) {
          $sujet = $_POST['sujet'];
          $montant = $_POST['montant'];
          $motif = $_POST['motif'];
          $img = $_FILES['image']['name'];  
              $ext = explode('.', $img);
         $file_ext = strtolower(end($ext));
          $image= rand(1, 1000000) . '.' . $file_ext; 
          $domain = 'donation';
          $Model = $this->model;
          $modelMethod = 'insertOne';
          \Database::verifyFile(compact('file_ext', 'image', 'domain', 'Model', 'modelMethod'), compact('sujet', 'montant', 'motif','image'));
        } else {
          $error_msg = \Renderer::showError('Veuillez remplir tous les champs', 'danger');
        }
      }
    }
    $pageTitle = $this->pageTitle;
    \Renderer::render($this->view1, compact('pageTitle', 'error_msg', 'sujet', 'montant', 'motif'));
  }

  /**
   * show all donations
   *
   * @return void
   */
  public function index()
  {
    $pageTitle = $this->pageTitle;
    $donations = $this->model->findAll();
    \Renderer::render('donation/index', compact('pageTitle', 'donations'));
  }
}
