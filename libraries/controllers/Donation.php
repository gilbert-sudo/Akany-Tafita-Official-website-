<?php

namespace Controllers;

class Donation extends Controller
{
  public function index()
  {

    \Renderer::render('donation/index');
  }
  /*
  function ash some donation 
   */
  public function Ask()
  {
    if (isset($_POST['publier'])) {
      if (isset($_POST['but']) and isset($_POST['fond']) and isset($_POST['description']) and isset($_FILES['images'])) {

        $but = $_POST['but'];
        $fond = $_POST['fond'];
        $description = $_POST['description'];
        $img_name = $_FILES['images']['name'];

        $target_tmp = $_FILES['images']['tmp_name'];
        $img_ext = explode('.', $img_name);
        $img_error = $_FILES['images']['error'];
        $allowed = array('jpg', 'jpeg', 'png');
        $imgActExt = strtolower(end($img_ext));
        if ($img_error === 0) {
          if (in_array($imgActExt, $allowed)) {
            $images = uniqid('', true) . "." . $imgActExt;
            $img_dest = 'views/images' . $images;
            move_uploaded_file($target_tmp, $img_dest);
            $asking = new \models\Donation();
            $asking->Ask(array($but, $fond, $description, $images));
            \Http::redirect('donation/index.html.php');
          }
        }
      }
    }
  }
}
