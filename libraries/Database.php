<?php
class Database
{
  private static $instance = null;
  public  static function getPdo(): PDO
  {
    if (self::$instance === null) {
      self::$instance = new PDO('mysql:host = 127.0.0.1;dbname=akany;charset=utf8', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]);
    }
    return self::$instance;
  }
  public static function verifyFile($domain, $lotOfVar , $Model){
    $img = $_FILES['image']['name'];
    $ext = explode('.', $img);
    $file_ext = strtolower(end($ext));
    $allowed_ext = array('jpg', 'jpeg', 'gif', 'png');
    if (in_array($file_ext, $allowed_ext)) {

      $image= rand(1000, 1000000) . '.' . $file_ext;
      $target = "views/images/$domain/".$image;
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $Model->insertOne($lotOfVar);
        $error_msg = \Renderer::showError('Votre demande a été envoyé avec succès', 'success');
      } else {
        $error_msg = \Renderer::showError("Désolé, une erreur s'est produite lors du téléchargement de votre fichier.", 'danger');
      }
    } else {
      $error_msg = \Renderer::showError("Désolé, seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés pour la photo.", 'danger');
    }
  }
}