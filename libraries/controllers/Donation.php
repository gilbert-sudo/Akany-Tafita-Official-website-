<?php

namespace Controllers;


class Donation extends Controller
{
  protected $pageTitle = 'Donation';
  protected $view = 'donation/index';
  protected $modelName = \models\Donation::class;

  /**
   * ask for donation
   *
   * @return void
   */
  public function ask()
  {
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
          // $ext = explode('.', $img);
          // $file_ext = strtolower(end($ext));
          // $allowed_ext = array('jpg', 'jpeg', 'gif', 'png');
          // if (in_array($file_ext, $allowed_ext)) {

          //   $image= rand(1000, 1000000) . '.' . $file_ext;
          //   $target = "views/images/donation/".$image;
          //   if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
          //     $this->model->insertOne(compact('sujet', 'montant', 'motif', 'image'));
          //     $error_msg = \Renderer::showError('Votre demande a été envoyé avec succès', 'success');
          //   } else {
          //     $error_msg = \Renderer::showError("Désolé, une erreur s'est produite lors du téléchargement de votre fichier.", 'danger');
          //   }
          // } else {
          //   $error_msg = \Renderer::showError("Désolé, seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés pour la photo.", 'danger');
          // }
          $lotOfVar ="'sujet', 'montant', 'motif', 'image'";
          \Database::verifyFile('donation', $lotOfVar, $this->model);
        } else {
          $error_msg = \Renderer::showError('Veuillez remplir tous les champs', 'danger');
        }
      }
    }
    $pageTitle = $this->pageTitle;
    \Renderer::render('donation/ask', compact('pageTitle', 'error_msg', 'sujet', 'montant', 'motif'));
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
