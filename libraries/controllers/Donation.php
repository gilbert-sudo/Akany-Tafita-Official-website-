<?php

namespace Controllers;

require_once('libraries/autoload.php');
class Donation extends Controller
{
  public function index()
  {

    \Renderer::render('donation/index');
  }
  public function Ask()
  {
    if (isset($_POST['publier'])) {
      if (isset($_POST['but']) && isset($_POST['fond']) && isset($_POST['description']) && isset($_FILES['images'])) {
        $but = $_POST['but'];
        $fond = $_POST['fond'];
        $description = $_POST['description'];
        $img_name = $_FILES['images']['name'];
        $img_ext = explode('.', $img_name);
        $imgActExt = strtolower(end($img_ext));
        $images = uniqid('', true) . "." . $img_ext;
        $asking = new \models\Donation();
        $asking->Ask(array($but, $fond, $description, $images));
        \Http::redirect('donation/index.html.php');
      }
    }
  }
}
