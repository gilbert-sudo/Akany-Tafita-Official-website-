<?php

namespace Controllers;

require("libraries/autoload.php");
class Admin extends Controller
{
    protected $pageTitle = 'Paramètres';
    protected $view2 = 'settings/general';
    protected $modelName = \models\Admin::class;
    public function general()
    {
        global $error_msg;
        $error_msg = ' ';
        $newAdminName= ' ';
        $password_admin = ' ';
        $newPass = " ";
        $newPassConfirm = " ";
        if (isset($_POST['update'])) {
            if (isset($_POST['newAdminName']) && isset($_POST['currentPass']) && isset($_POST['newPass']) && isset($_POST['newPassConfirm'])) {
                if (!empty($_POST['newAdminName']) && !empty($_POST['currentPass']) && !empty($_POST['newPass']) && !empty($_POST['newPassConfirm']) && !empty($_FILES['image']['name'])) {
                    $newAdminName = $_POST['newAdminName'];
                    $currentPass = $_POST['currentPass'];
                    $newPass = $_POST['newPass'];
                    $newPassConfirm = $_POST['newPassConfirm'];

                    $img = $_FILES['image']['name'];
                    $ext = explode('.', $img);
                    $file_ext = strtolower(end($ext));
                    $image = rand(1, 1000000) . '.' . $file_ext;
                     $shaPass = sha1($currentPass);
                    $passToInsert = sha1($newPass);
                    $col = 'password_admin';
                    $results = $this->model->search(['col' =>'password_admin', 'keywords' =>$shaPass]);
                    $domain = 'admin';
                    $Model = $this->model;
                    $modelMethod = 'updateOne';
                    if ($results) {
                        if ($newPass == $newPassConfirm) {
                            $id = $results['id'];
                            \Database::verifyFile(compact('file_ext', 'domain', 'modelMethod', 'Model', 'image'), compact('newAdminName', 'passToInsert', 'image', 'id'));
                        } else {
                            $error_msg = \Renderer::showError("Les mots de passe ne correspondent pas", "danger");
                        }
                    } else {
                        $error_msg = \Renderer::showError("Mot de passe incorrect", "danger");
                    }
                } else {
                    $error_msg = \Renderer::showError('Veuillez remplir tous les champs', 'danger');
                }
            }
        }

        $pageTitle = $this->pageTitle;
        \Renderer::render($this->view2, compact('pageTitle', 'error_msg', 'newAdminName', 'newPass', 'newPassConfirm'));
    }
}
