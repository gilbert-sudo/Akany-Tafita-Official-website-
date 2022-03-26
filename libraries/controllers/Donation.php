<?php

namespace Controllers;

use Renderer;

class Donation extends Controller
{
  protected $pageTitle = 'Donation';
  protected $view = 'donation/index';
  protected $table = 'demande_dons';
  protected $modelName = \models\Donation::class;

  /**
   * ask for donation
   *
   * @return void
   */
  public function ask()
  {
    $error_msg = '';
    if (isset($_POST['Publier'])) {
      if (isset($_POST['sujet']) && isset($_POST['montant']) && isset($_POST['motif'])) {
        if (!empty($_POST['sujet']) || !empty($_POST['montant']) || !empty($_POST['motif'])) {
          $sujet = $_POST['sujet'];
          $montant = $_POST['montant'];
          $motif = $_POST['motif'];
          $images = $_FILES['file']['name'];
          $target = 'views/images/' . basename($_FILES['file']['name']);
          $valid_file_extensions = array(".jpg", ".jpeg", ".png", ".gif");
          $file_extension = strrchr($_FILES['file']['name'], ".");
          if (in_array($file_extension, $valid_file_extensions)) {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
              $this->model->insert(compact('sujet', 'montant', 'motif', 'images'));
              $error_msg = \Renderer::showError('Votre demande a été envoyé avec succès', 'success');
            } else {
              $error_msg = "Désolé, une erreur s'est produite lors du téléchargement de votre fichier.";
            }
          } else {
            $error_msg = "Désolé, seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés.";
          }
        } else {
          $error_msg = 'Veuillez remplir tous les champs';
        }
      }
    }
    $pageTitle = $this->pageTitle;
    \Renderer::render('donation/ask', compact('pageTitle', 'error_msg'));
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
